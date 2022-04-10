<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newc;
use App\Http\Controllers\xyz;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\gomail;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Musiclib;
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

//Route::get('/', function () {
//   return view('welcome');
//});


Route::group(['middleware'=>"web"],function(){

    Route::get('/', [Musiclib::class,'index']);

Route::get('/list', [Musiclib::class,'list']);

Route::get('/add', function () {
       return view('add');
    });

    Route::post('/add', [Musiclib::class,'store']);

    Route::get('/view/{id}', [Musiclib::class,'view']);

    Route::get('/register', function () {
        return view('register');
     });

     Route::post('/register',[Musiclib::class,'register']);

     Route::get('/in', function () {
        return view('in');
     });

     Route::post('/in',[Musiclib::class,'login']);


});







































































































/*Route::view("form",'form');
Route::post('form',[gomail::class,'sendmail']);



Route::get('/{lang}',function ($lang)
{
    App::setlocale($lang);
    return view("km053");
});

//Route::view("language",'km053');

/* Route::get('/test', function () {
    return view('test');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Math', function () {
    return view('Math');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/sub', function () {
    return view('sub');
});

Route::get('/divide', function () {
    return view('div');
});

Route::get('/multiply', function () {
    return view('mult');
});

//Route::get('/', [newc::class,'new']);

//Route::get('/', [newc::class,'old']);                                                                                                  

//Route::get('/activity', [newc::class,'activity']);

Route::get('/', [xyz::class,'old']);

Route::post('login',[UserAuth::class,'userlogin']);
Route::view("login",'login');
Route::view('profile','Profile');

Route::get('/login',function(){

    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/profile',function(){
    if(!session()->has('user'))
    {
        return redirect('login');
    }
    return view('profile');
});



Route::get('/logout',function(){
   if(session()->has('user'))
   {
       session()->pull('user');
   }

   return redirect('login');
}); */


