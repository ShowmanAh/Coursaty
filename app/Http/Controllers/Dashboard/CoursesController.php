<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CoursesRequest;
use Illuminate\Support\Str;
class CoursesController extends Controller
{
    protected $model;
    protected $view = 'dashboard.courses/.';
    public function __construct(Course $course){
        $this->model =new Repository($course);
    }
    public function index(){
        $courses = $this->model->all();
         return view($this->view.'index', compact('courses'));

    }
    public function create(){
        return view($this->view.'create');
    }
    public function store(Request $request){
     $request_data = $request->validate([
        'image' => 'required_without:id|mimes:jpg,jpeg,png',
        'name' => 'required',
        'price' => 'required'
     ]);
     $filepath = "";
     if ($request->has('image')) {// check request image
        $filepath = uploadImage('courses', $request->image);
     }
     $request_data['image'] = $filepath;
    $this->model->create($request_data);
    return redirect()->route('admin.courses');
    }
    public function edit($id){
        try {
            $course = Course::find($id);
            if(!$course){
                return redirect()->route('admin.courses');
            }
            return view($this->view.'edit', compact('course'));
        } catch (Exception $ex) {
            return redirect()->route('admin.courses');
        }
    }
    public function update(Request $request, $id){
        $request_data = $request->validate([
            'image' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required',
            'price' => 'required'
         ]);
         $filepath = "";
         if ($request->has('image')) {// check request image
            $filepath = uploadImage('courses', $request->image);
         }
         $request_data['image'] = $filepath;
         try {
            $course = Course::find($id);
            if(!$course){
                return redirect()->back();
            }
          $this->model->update($request_data, $id);
          return redirect()->route('admin.courses');
         } catch (Exception $ex) {
             return redirect()->back();
         }

    }
    public function destroy($id){
        try {
            $course = Course::find($id);
            if(!$course){
                return redirect()->route('admin.courses');
            }

         $image = Str::after($course->image, 'assets/');// cutting domain http localhost
         $image = base_path('assets/'.$image); // get image path
         // return $image;
            unlink($image); // delete image from folde
            $course->delete();
            return redirect()->route('admin.courses');
        } catch (Exception $ex) {
           // return $ex;
            return redirect()->route('admin.courses');
        }
    }
}
