<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\ContactInfo;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Series;
class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->where('user_is_active',1)->first(); // check if the user has an active account.
            if ($user &&
            Hash::check($request->password, $user->password)) {
                if (trim($user->role->name) === 'admin') {
                        $cookie_name = "user_book";
                        $cookie_value = crypt($user, '$1$');
                        setcookie($cookie_name, $cookie_value, time() + 3600,  '/' , "knowledgewave.org");
                        header("Set-Cookie: user_book='$cookie_value'; expires=time() + 3600; path=/; domain=knowledgewave.org");
                        return $user;
                    }
                    if (trim($user->role->name) === 'student' || trim($user->role->name) === 'teacher') {
                        // if ($user->is_active() && $user->account_has_time()) {
//                        dd($user->sessions->count());
                            if ($user->sessions->count() <= 6) {
                                $cookie_name = "user_book";
                                $cookie_value = crypt($user, '$1$');
                                setcookie($cookie_name, $cookie_value, time() + 3600,  '/' , "knowledgewave.org");
                                header("Set-Cookie: user_book='$cookie_value'; expires=time() + 3600; path=/; domain=knowledgewave.org");
                                return $user;
                            } else {
                                $request->session()->flash('login_error', $user->sessions.'you are logged in from to many browsers!');
                            }
                        // } else {
                        //     $request->session()->flash('login_error', 'this account is deactivated!');

                        // }
                    }
            } else {
                $request->session()->flash('login_error', 'wrong user name or password!');
            }
        });
        Fortify::loginView(function () {
            $seriess = Series::latest()->take(5)->get();
            $contactInfo = ContactInfo::find(1);
            return view('website.auth.login', compact(['seriess','contactInfo']));
        });
        Fortify::registerView(function () {
            $seriess = Series::latest()->take(5)->get();
            $contactInfo = ContactInfo::find(1);
            return view('website.auth.register', compact(['seriess','contactInfo']));
        });
        $this->app->singleton(
            \Laravel\Fortify\Contracts\LoginResponse::class,
            \App\Http\Responses\LoginResponse::class
        );
        $this->app->singleton(
            \Laravel\Fortify\Contracts\RegisterResponse::class,
            \App\Http\Responses\RegisterResponse::class
        );
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
