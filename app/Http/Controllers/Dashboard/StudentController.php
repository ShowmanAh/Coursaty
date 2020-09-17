<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(){

      $students = User::with('courses')->get();
     return view('dashboard.students.index', compact('students'));
    }
    public function enrollement(){
     $enrolls = User::select('id','name')->with('courses')->get();

     return view('dashboard.students.enrollment', compact('enrolls'));
    }
}
