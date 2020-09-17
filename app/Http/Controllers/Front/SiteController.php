<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function ListCourses(){
        $courses = Course::all();
        //return $courses;
        return view('site', compact('courses'));
    }
}
