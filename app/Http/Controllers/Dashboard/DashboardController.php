<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index(){
    $students = User::count();
    $courses = Course::count();
    $enrolls = User::select('id','name')->with('courses')->count();

       return view('dashboard.index', compact('students', 'courses', 'enrolls'));
   }
}
