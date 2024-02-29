<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role, $role2 = '')
    {
        if (!auth()->check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return redirect('login');

        $user = auth()->user();
     
        if(trim($user->role->name) === $role || trim($user->role->name) === $role2)
            if (trim($user->role->name) === 'student') {
                if (!$user->account_updated) {
                    return redirect('/student/update-account');
                }
            }
            if (trim($user->role->name) === 'teacher') {
                if (!$user->account_updated) {
                    return redirect('/teacher/update-account');
                }
            }
            return $next($request);
        return redirect('/');
    }
}
