<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class StudentLoginController extends Controller
{
public function login(){
    return view('student.login');

}
public function PostLogin(Request $request){
//dd('nn');
        $remember_me = $request->has('remember_me') ? true : false;
          if(auth()->attempt(['email'=> $request->input("email"), 'password'=> $request->input("password")])){
         // dd('login');
            return redirect()->route('site');
        }
          return redirect()->back()->with(['error'=> 'خطأ فى البيانات']);

}
}
