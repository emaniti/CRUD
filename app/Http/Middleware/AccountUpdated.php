<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccountUpdated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check())
            return redirect('login');

        $user = auth()->user();
        if (trim(auth()->user()->role->name) === 'student') {
            if ($user->account_updated === 1) {
                return redirect('/student/dashboard');
            } else {
                if ($request->is('student/*'))
                    return $next($request);
            }
        }
        if (trim(auth()->user()->role->name) === 'teacher') {
            if ($user->account_updated === 1) {
                return redirect('/teacher/dashboard');
            } else {
                if ($request->is('teacher/*'))
                return $next($request);
            }
        }
        // if ($user->account_updated === 0) {
        //     // if (trim(auth()->user()->role->name) === 'student') {
        //     //     return $next($request);
        //     // } else if (trim(auth()->user()->role->name) === 'teacher') {
        //         return $next($request);
        //     // }
        // } else if ($user->account_updated === 1) {
        //     if (trim(auth()->user()->role->name) === 'student') {
        //         return redirect('/student/dashboard');
        //     } else if (trim(auth()->user()->role->name) === 'teacher') {
        //         return redirect('/teacher/dashboard');
        //     }
        // }
        return redirect('/');
    }
}
