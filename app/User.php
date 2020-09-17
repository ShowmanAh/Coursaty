<?php

namespace App;

use App\Models\Course;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image', 'registiration',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Undocumented function
     * public function courses(){
       * return $this->hasMany(Course::class);
   * }
     * @return void
     */
    public function setPasswordAtrribute($password){
        if (!empty($password)) {
           $this->attributes['password'] = bcrypt($password);
        }
    }
    public function getimageAttribute($val){
        return ($val !== null) ? asset('assets/' . $val) : '';
    }
    public function courses(){
        return $this->belongsToMany(Course::class,'courses_users','student_id', 'course_id');
    }
    public function RegisterCourses(){
        return $this->hasMany(RegisterStudent::class, 'student_id', 'id');
    }
}
