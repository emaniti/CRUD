<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContact;

class RegisterResponse implements RegisterResponseContact
{

    public function toResponse($request)
    {
        switch (trim(auth()->user()->role->name)) {
            case 'student':
                return redirect()->intended('/student/dashboard');
            case 'admin':
                return redirect()->intended('/admin/dashboard');
            case 'teacher':
                return redirect()->intended('/teacher/dashboard');
        }
    }
}
