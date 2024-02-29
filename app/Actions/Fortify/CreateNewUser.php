<?php

namespace App\Actions\Fortify;

use App\Models\Code;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Academic_year;
use App\Models\GradeBookSchoolYear;
use App\Rules\ValidCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{

    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'code' => ['required', 'string', 'max:255', 'exists:codes,code', new ValidCode()],
            'password' => $this->passwordRules(),
        ])->validate();
        $code = Code::where('code', '=', $input['code'])->firstOrFail();
        $user = User::create([
                    'name' => $input['name'],
                    'user_name' => $input['email'],
                    'email' => $input['email'],
                    'role_id' => $code->role->id,
                    'password' => Hash::make($input['password']),
                    'user_is_active' => 1,
        ]);
        $user->account_start_date = $code->start_date;
        $user->account_end_date = $code->end_date;
        $user->save();
        $code->user_id = $user->id;
        $code->save();
        if ($code->role->id == 2)
        {
            $student = new Student();
            $student->student_name = $input['name'];
            $student->grade_id = $code->grade_id;
            $student->school_id = $code->school_id;
            $student->year_id = Academic_year::where('year_is_active', 1)->first()->id;
            $user->student()->save($student);
            $year_id = Academic_year::where('year_is_active', 1)->first()->id;
            foreach ($code->books as $book)
            {
                GradeBookSchoolYear::firstOrCreate([
                    'book_id' => $book->id,
                    'grade_id' => $code->grade_id,
                    'school_id' => $code->school_id,
                    'academic_year_id' => $year_id,
                    'available_from' => $user->account_start_date,
                    'available_to' => $user->account_end_date
                ]);
            }
        }
        else if ($code->role->id == 3)
        {
            $teacher = new Teacher();
            $teacher->teacher_name = $input['name'];
            $teacher->school_id = $code->school_id;
            $user->teacher()->save($teacher);
            /* $teacher->grades()->attach($request->grades); */
            $teacher->classes()->attach($code->classes);
            $year_id = Academic_year::where('year_is_active', 1)->first()->id;
            foreach ($code->bookCodes as $book)
            {
                \App\Models\BookTeacher::firstOrCreate([
                    'book_id' => $book->book_id,
                    'teacher_id' => $teacher->id,
                    'school_id' => $code->school_id,
                    'academic_year_id' => $year_id,
                    'cd_link' => $book->cd_link,
                    'extra_sheets' => $book->extra_sheets,
                    'available_from' => $user->account_start_date,
                    'available_to' => $user->account_end_date
                ]);
            }
            $user->account_updated = 1;
            $user->save();
        }
        $cookie_name = "user_book";
        $cookie_value = crypt($user, '$1$');
        setcookie($cookie_name, $cookie_value, time() + 3600, '/', "knowledgewave.org");
        header("Set-Cookie: user_book='$cookie_value'; expires=time() + 3600; path=/; domain=knowledgewave.org");
        return $user;
    }

}
