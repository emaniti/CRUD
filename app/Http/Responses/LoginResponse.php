<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        switch (trim(auth()->user()->role->name)) {
            case 'student':
                // if (auth()->user()->account_updated) {
                    return redirect()->intended('/student/dashboard');
                // } else {
                //     return redirect()->intended('/student/update-account');
                // }
                break;
            case 'admin':
                return redirect()->intended('/admin/dashboard');
                break;
            case 'teacher':
                // if (auth()->user()->account_updated) {
                    return redirect()->intended('/teacher/dashboard');
                // } else {
                //     return redirect()->intended('/teacher/update-account');
                // }
                break;
            default:
                # code...
                break;
        }
        // $home = auth()->user()->role->name == 'student' ? '/student/dashboard' : '/';

        // return redirect()->intended($home);
            
    }

}