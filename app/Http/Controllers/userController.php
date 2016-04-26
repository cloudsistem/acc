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
           
       $user = Model\Account::where('username',$Request['username'])->first();
       if(isset($user)){
           if (Hash::check($Request['password'], $user->password))
                {
                    $Request->Session()->put('usuarios',$user->user_id);
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
  
    protected function VerificaSessao(Request $Request){
        if ($Request->session()){
            if ($Request->session()->has('usuarios')){              
                $curso = Model\Course::where('user_id',$Request->session()->get('usuarios'));
                if (!isset($curso)){
                   return View('course/activity/showActivities');
                }
                else{
                   return View('aluno/showActivities');
                }
                
            }
            else{
                if ($Request->path() == 'new/user'){
                    return view('auth/register');
                }
                else if ($Request->path() == 'new/login'){
                    return view('auth/login');
                }
                else{
                    return view('errors/404');
                }
            }            
        }
        else{
            return view('errors/404');
        }
    }
}