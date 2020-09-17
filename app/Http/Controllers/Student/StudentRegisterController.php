<?php

namespace App\Http\Controllers\Student;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Notifications\StudentCreated;
use Illuminate\Support\Facades\Notification;

class StudentRegisterController extends Controller
{
    public function register(){
      return view('student.register');
    }
    public function PostRegister(Request $request){
       // dd($request->all());
       $request_data = $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png',
        'name' => 'required',
        'email'=> 'required',
        'password' => 'required',
       ]);
       $filepath = "";
       if ($request->has('image')) {// check request image
          $filepath = uploadImage('students', $request->image);
          $request_data['image'] = $filepath;
       }

        if ($request->has('password')) {
            $request_data['password'] = bcrypt($request->password);
        }

        $student = User::create($request_data);
        Notification::send($student, new StudentCreated($student));

        return redirect()->route('site');


    }

}
