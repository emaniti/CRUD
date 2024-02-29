<?php

namespace App\Http\Controllers\Apis;

use Exception;
use App\Models\Code;
use App\Models\User;
use App\Models\Student;
use App\Models\Academic_year;
use Illuminate\Http\Request;
use App\Http\Responses\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Apis\LoginRequest;
use App\Http\Requests\Apis\SignUpRequest;

class AuthController extends Controller
{

    protected $user;
    public function login(LoginRequest $request)
    {
        try {
            $request->authenticate();
            $JWTToken = Auth::guard('api')->attempt($request->only('email', 'password'));
            if (!$JWTToken) {
                return APIResponse::UserUnauthorized();
            }
            $this->user = $request->user();
            return APIResponse::LoginResponse($JWTToken, UserResource::make($this->user));
        } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
    public function signUp(SignUpRequest $request)
    {
        try {
            $data = $request->validated();
            $code = Code::where('code', $data['code'])->firstOrFail();
            if (!is_null($code->user_id)) {
                return APIResponse::ErrorsResponse(__FUNCTION__, 'Code Already has been taken');
            }
            $DBUser = User::firstOrCreate(['email' => $data['email']], [
                'email' => $data['email'],
                'user_name' => $data['email'],
                'name' => $data['name'],
                'password' => Hash::make($data['password']),
                'role_id' => $code->role->id
            ]);
            $code->user_id = $DBUser->id;
            $code->save();
            //============================================================
            // --- first check the role id "to insert data at students table or teacher table"---
            //-------------------------------------------------
            if ($code->role_id ==2){ // student case..
                $student = new Student();
                $student->student_name =$data['name'];
                $student->grade_id = $code->grade_id;
                $student->school_id = $code->school_id;

                $student->user_id = $DBUser->id;
                $student->year_id = Academic_year::where('year_is_active', 1)->first()->id;
                $student->save();
              //  $this->login($DBUser);

            }


            //================================================================
             APIResponse::CreatedSuccessfully($DBUser, 'User Signed-up successfully, Confirmation mail has been sent');
             return redirect('student/dashboard')->with('message', $data['name'].' Created successfully!');

            } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
}
