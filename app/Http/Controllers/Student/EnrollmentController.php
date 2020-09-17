<?php

namespace App\Http\Controllers\Student;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
   public function enroll($student, $course){
       $course = Course::find($course);
       DB::table('courses_users')->insert([
       'student_id' => Auth::user()->id,
       'course_id' => $course->id,
       ]);
     return redirect()->route('site');
   }
}
