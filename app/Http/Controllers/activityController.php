<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Http\Requests;

class activityController extends Controller
{
    public function create(Request $request){
        $Score = new Model\Score()::where('id',$request['score_id'])->limit(1);
        
        $ActivityGroup = new Model\ActivityGroup()::where('id',$request['activity_group_id'])->limit(1);
        
        return dd($Score->id);
    }    
}
