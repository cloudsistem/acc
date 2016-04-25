<?php

Route::get('/',function(){
    return view('home/index');
});

/*Route::get('/new/login',function(){
   return view('auth/login');
});*/


Route::get('/new/login',['as' => 'authRegister', 'uses' => 'UserController@VerificaSessao',function () {
    return Response::json(['lixo' => true], 404);
}] );

Route::post('/new/login',['as' => 'authRegister', 'uses' => 'UserController@login',function () {
    return Response::json(['Não realizou o login' => true], 404);
}] );

Route::get('/new/user',function(){
     return view('auth/register');
});

Route::post('/new/user',['as' => 'authRegister', 'uses' => 'UserController@create',function () {
    return Response::json(['lixo' => true], 404);
}] );

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/new/course',function(){
    return view('/course/addCourse');
});

Route::get('/add/activity',function(){
    return view('/course/activity/addActivity');
});

Route::get('/course_project/settings',function(){
    return view('/course/project/settings');
});

Route::get('/new/activity',function(){
    return view('/aluno/addActivity');
});

Route::get('/me/profile',function(){
    return view('/profile/editProfile');
});

Route::get('/me/activities',function(){
    return view('/aluno/showactivities');
});

Route::get('/dashboard/activities',function(){
    return view('/course/activity/showactivities');
});

Route::get('/dashboard/courses',function(){
    return view('/course/showcourses');
});

Route::get('/course/{slug}/settings',function(){
    return view('/course/settings');
});

Route::get('/course/activity/{slug}/settings',function(){
    return view('/course/activity/settings');
});

Route::Auth();
?>