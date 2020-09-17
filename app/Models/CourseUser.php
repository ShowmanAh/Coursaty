<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $fillable = ['student_id', 'course_id'];
    public function student(){
        return $this->belongsToMany(\App\User::class, 'student_id', 'id');
    }
    public function course(){
        return $this->belongsToMany(Course::class, 'course_id', 'id');
    }
}
