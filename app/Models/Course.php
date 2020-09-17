<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price'];
    // get image attribute
    public function getimageAttribute($val){
        return ($val !== null) ? asset('assets/' . $val) : '';
    }
    public function user(){
        return $this->belongsToMany(\App\User::class,'courses_users', 'course_id','student_id');
    }
    public function Registered(){
        return $this->hasMany(RegisterStudent::class, 'course_id', 'id');
    }
}
