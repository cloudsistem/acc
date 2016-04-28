<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Http\Requests;

class activityController extends Controller
{
    public function create(Request $request){
        
        $activity = new Model\Activity();
        
        $activity->title = $request['title'];
        $activity->description = $request['description'];
        $activity->hours = $request['hours'];
        $activity->hours_max = $request['hours_max'];
        $activity->score = $request['score_id'];
        $activity->activity_group = $request['activity_group_id'];
        
        $user_id = $request->session()->get('usuarios');
        
        $course = Model\Profile::where('user_id',$user_id)->first();
        
        $activity->course_id = $course->course_id;
             
        return dd($activity);
        //$activity->save();
        //openssl_random_pseudo_bytes / bin2hex
    }
    
    public function showAllActivitiesByCourse(Resquest $resquest){
        $string = '';
        
        $course_id = Model\UserCourse::where('user_id',$request->session()->get('usuarios'));
        $activitys = Model\Activity::where('couse_id',$course_id->course_id);
        foreach ($activity as $activitys){
            $string = $string." ".$activity->title."<br>";
        }
        return $string;        
    }  
    
      public function showAllActivities(Resquest $resquest){
        $string = '';
        
        $activitys = Model\Activity::all();
        foreach ($activity as $activitys){
            $string = $string." ".$activity->title."<br>";
        }
        return $string;        
    }   
}
