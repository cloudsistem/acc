<?php
/** DEVELOPED BY THIAGO HENRIQUE GOMES BRANDAO **/

/** VIEWS LEVEL 0 **/
Route::get('/',function(){
    return view('home/index');
});

/** VIEWS LEVEL 2 **/

Route::get('/dashboard', ['middleware' => 'SessionExist',function(){
       return view('dashboard');
}]); 

Route::get('/me/profile',['middleware' => 'SessionExist',function(){
    return view('/profile/editProfile');
}]);

Route::get('/me/account',['middleware' => 'SessionExist',function(){
    return view('/profile/editAccount');
}]);

/** VIEWS LEVEL 4 **/

Route::get('/new/user',['as' => 'authRegister', 'uses' => 'UserController@VerificaSessao',function(){
     return view('auth/register');
}]);

Route::post('/new/user',['as' => 'authRegister', 'uses' => 'UserController@create',function () {
    return view('errors/404');
}] );

Route::get('/new/login',['as' => 'authRegister', 'uses' => 'UserController@VerificaSessao',function () {
    return view('errors/404');
}] );

Route::post('/new/login',['as' => 'authRegister', 'uses' => 'UserController@login',function () {
    return view('erros/503');
}] );

/** VIEWS LEVEL 5 **/  

Route::get('/new/activity',['middleware' => ['SessionExist','AuthStudent'],function(){
    return view('/aluno/addActivity');
}]);

Route::get('/me/activities',['middleware' => ['SessionExist','AuthStudent'],function(){
    return view('/aluno/showactivities');
}]);
 
 // see later route /me/activity/{hexadecimal} 

/**  VIEWS LEVEL 6 **/

Route::get('/add/activity',function(){
    return view('/course/activity/addActivity');
});

Route::get('/course_project/settings',function(){
    return view('/course/project/settings');
});

Route::get('/dashboard/activities',function(){
    return view('/course/activity/showactivities');
});

Route::get('/course/{slug}/settings',function(){
    return view('/course/settings');
});

Route::get('/course/activity/{slug}/settings',function(){
    return view('/course/activity/settings');
});

/** VIEWS LEVEL 7 **/

Route::get('/new/course',function(){
    return view('/course/addCourse');
});

Route::get('/dashboard/courses',function(){
    return view('/course/showcourses');
});

?>