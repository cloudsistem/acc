<?php

namespace App\Http\Controllers;

use Session;
use Hash;
use App\Model;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class UserController extends Controller
{
   
    public function __construct()
    { }
    
    protected function create(Request $Request){
        $user = New Model\User();
        $user->save();
               
        $acc = New Model\Account();
        $acc->username = $Request['username'];
        $acc->email = $Request['email'];
        $acc->password = Hash::make($Request['password']);
        $acc->user_id = $user->id;
        $acc->save();
        
        $profile = new Model\Profile();
        $profile->name = $Request['name'];
        $profile->user_id = $user->id;
        $profile->save();
        
        return View('auth/login');
    }
    
    protected function login(Request $Request){
       //return dd(session_id());
       $var = $Request->session()->all();
       return dd($var);   
       
       $user = Model\Account::where('username',$Request['username'])->first();
       if(isset($user)){
           if (Hash::check($Request['password'], $user->password))
                {
                    Session::put('user_id',$user->user_id);
                    return view('aluno/showActivities');
                }
           else{
               return dd('Senha invalida');
           }
       } 
       else{
           return dd('Usuário não existe'); 
       }
    }
}