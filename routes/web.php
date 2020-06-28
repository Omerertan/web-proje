<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => 'yonetim', 'namespace' => 'Admin'], function() 
{   
    Route::match(['get', 'post'], '/login', 'AdminController@login')->name('admin.login');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout'); 

    Route::group(['middleware' => 'yonetim'], function() 
    {        
        Route::get('/permit', 'PermitController@index')->name('admin.permit');    
        Route::post('/permit/{id}', 'PermitController@editPermit')->name('admin.editPermit');    
        
        Route::get('/notice', 'NoticeController@index')->name('admin.notice');    
        Route::post('/notice', 'NoticeController@createNotice')->name('admin.createNotice');
        
        Route::get('/message', 'AdminMessageController@index')->name('admin.message');    
        
    });  
    
});


Route::group(['middleware' => 'auth'], function() 
{

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/noticelist', 'HomeController@noticeList')->name('noticelist');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/project', 'ProjectController@index')->name('project');
    Route::get('/article', 'ArticleController@index')->name('article');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contact', 'ContactController@createMessage')->name('createmessage');

});


Route::group(['prefix'=>'account'], function() { 
    Route::get('/login', 'AccountController@login')->name('account.login');
    Route::post('/login', 'AccountController@createlogin')->name('account.createlogin');
    Route::get('/register', 'AccountController@register')->name('account.register');
    Route::post('/register', 'AccountController@createRegister')->name('account.registersave');
    Route::post('/logout', 'AccountController@logout')->name('account.logout');
    Route::get('/repassword', 'AccountController@password')->name('account.repassword');
    Route::post('/repassword', 'AccountController@resetPassword')->name('account.repassword');
});

// Route::get('/test/mail', function() {
//     $user = App\User::find(1);
//     return new App\Mail\ForgotPasswordMail($user);
// });