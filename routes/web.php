<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
// return 'hello world!!!';
// });

Route::get('/', function (){
    $res = 2+3;
    $name='Sergey';
    return view('home',compact('res', 'name')); // первый способ передать переменные на сайт
    return view('home',['var'=>$name,'var2'=>$res]); // второй способ передать переменные на сайт
})->name('home');

// ----------------------работа с формой и POST-------------------------------------------- 
// Route::post('/send-email',function(){
//     dump($_POST);
//     return "Send Email";
//     });   

// Route::match(['post','get'],'/contact',function(){
//     dump($_POST); 
// return view('contact');
// });

Route::match(['post','get'],'/contact',function(){
    dump($_POST); 
return view('contact');
})->name('contact');

//-------------------------перенаправление на другую ссылку------------------------------

Route::redirect('/about','contact');
Route::permanentRedirect('about','contact');

// Route::get('/post/{id}',function($id){
// return "Post $id";
// });

// Route::get('/post/{id}/{slug}',function($id,$slug){
//     return "Post $id and $slug";
//     })
//     // ->where('id','[0-9]+');
//     ->where(['id'=>'[0-9]+','slug'=>'[A-Za-z]+']);

Route::get('/post/{id}/{slug?}',function($id,$slug=null){
    return "Post $id And $slug";
    })->name('post'); // изменения в app/providers/RouteServiceProvider.php в public function boot()


//--------------------adminka--------------------------------------------    
Route::prefix('admin')->name('admin.')->group(function(){
Route::get('/posts', function(){
return 'Posts List';
});

Route::get('/post/create', function(){
return 'Posts Create';
});
 
Route::get('/post/{id}/edit',function($id){
return "Edit Post $id";
})->name('post');   
});

//------------------------PUT send-------------------------------------------------
Route::match(['post','get','put'],'/test1',function(){
    dump($_POST); 
return view('putsend');
});

//-------------------------fallback-------------------------------------------------
Route::fallback(function(){
//return redirect()->route('home');
abort(404,'так работает fallback, т.е. если страницы нет то откроется это');
});