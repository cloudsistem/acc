<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Http\Requests;
use Validator;

class courseController extends Controller
{
    public function create(Request $request){
        $course = new Model\Course();
        
        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->user_id = $request['user_id'];
               
        $course->save();
        
        $course_project = new Model\CourseProject();
        $course_project->course_id = $course->id;
        $course_project->hours_min = $request['hours_min'];
        
        $course_project->save();
        
        return view('/dashboard/courses');
    }
}
