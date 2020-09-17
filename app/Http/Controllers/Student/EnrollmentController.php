<?php

namespace App\Http\Controllers\Student;

use App\User;
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
       return redirect('/student/courses/'.Auth::user()->id);
    // return redirect()->route('site');
   }

   public function courses($id){
       $student = Auth::user()->id;
    $enrolls = User::select('id','name')->with('courses')->where('id', $student)->get();
//return $enrolls;
    return view('student.courses', compact('enrolls'));
   }
}
