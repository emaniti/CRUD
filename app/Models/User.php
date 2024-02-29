<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_name',
        'role_id',
        'user_is_active',
        'data_of_birth',
        'gender',
        'religion',
        'photo',
        'register_number',
        'remark',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function student()
    {
        return $this->hasOne(Student::class);
    }
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    public function books()
    {
        return $this->student();
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function is_active()
    {
        return $this->user_is_active;
    }
    public function account_has_time()
    {
        // $currentDate = date('Y-m-d');
        // $currentDate = date('Y-m-d', strtotime($currentDate));
        // $account_start_date = date('Y-m-d', strtotime(str_replace('-','/', $this->account_start_date)));
        // $account_end_date = date('Y-m-d', strtotime(str_replace('-','/', $this->account_end_date)));
        // return ($currentDate >= $account_start_date) && ($currentDate <= $account_end_date);
        // $startDate = Carbon::createFromFormat('Y-m-d', $this->account_start_date);
        // $endDate = Carbon::createFromFormat('Y-m-d', $this->account_end_date);

        $check = Carbon::now()->between($this->account_start_date, $this->account_end_date);
        return $check;
    }
    public function student_books()
    {
        if ($this->role->name === 'student') {
            $student = $this->student;
            if ($student !== null) {
                $student_grade = $student->grade($student->grade_class_id);
                $school = School::find($student->grade($student->grade_class_id)->school_id);
                $result = array(
                    // 'Role'=> $this->role,
                    'student' => $student,
                    'Student_Grade' => $student_grade,
                    'school' => $school,
                    'school_books' => $school->books,
                    'Books' => Book::where('grade_id',$student->grade($student->grade_class_id)->id)->get()
                );
                return response($result);
            } else {
                return ['student'=> $student];
            }
        }else{
            return ['Role'=>$this->role->name];
        }
    }
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function code()
    {
        return $this->hasOne(Code::class);
    }
        /**
     * JWT Auth Section
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    static public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        return $user;
    }
}
