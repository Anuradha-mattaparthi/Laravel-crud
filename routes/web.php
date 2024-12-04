<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
// Route::get('/',[ProductsController::class,'fetch']);
// Route::get('/show/{id}', [ProductsController:: class,'detailProduct']);
Route:: controller(ProductsController::class)->group(function(){
Route::get('/','fetch');
Route::get('/show/{id}','detailProduct' );
Route::get('/addproduct','create' );
Route::post('/storeproduct','storeproduct');
Route::put('/editproduct/{id}','editProduct' );
Route::delete('/delete/{id}','deleteproduct')->name('product.delete'); // product.delete is just a name
Route::get('/','searchProduct');
});
// Route::get('/', [StudentController::class,'showUsers']);
// Route::get('/user{id}', [StudentController::class,'singleUser'])->name('view.user');
// Route::get('/add',[StudentController::class,'addUser']);

//use App\Http\Controllers\TestingController;
//use Illuminate\Support\Facades\Route;
//se App\Http\Controllers\PageController;
//use App\Http\Controllers\StudentController;
//Route::get("/", [StudentController::class,'showUsers']);
// Route::controller(PageController::class)->group(function (){
//     Route::get('/user/{id}','showUser')->name('users');
//     Route::get('/','showHome')->name('home');
//     Route::get('/blog','showBlog')->name('blog');
// });
// Route::get('/test',TestingController::class);




// function getUsers(){
//      return [
//         6 => ['name'=> 'Anu', 'phone' => '444444444' ,'city' => 'ooty'],
//         7 => ['name'=> 'Sai', 'phone' => '666666666' ,'city' => 'Goa'],
//         8 => ['name'=> 'Divya', 'phone' => '8888888' ,'city' => 'Srikakulam'],
//         9 => ['name'=> ' Naveen', 'phone' => '99999999' ,'city' => 'Athreyapuram'],
//     ];
// }
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/post', function () {
//     return view('post');
// });
// Route::get('/test',function (){
//     return view('phpjavascript');
// });

// Route::get('/dataroutetoview',function (){
//     $names = getUsers();
    // $names = [
    //     6 => ['name'=> 'Anu', 'phone' => '444444444' ,'city' => 'ooty'],
    //     7 => ['name'=> 'Sai', 'phone' => '666666666' ,'city' => 'Goa'],
    //     8 => ['name'=> 'Divya', 'phone' => '8888888' ,'city' => 'Srikakulam'],
    //     9 => ['name'=> ' Naveen', 'phone' => '99999999' ,'city' => 'Athreyapuram'],
    // ];
    // return view('dataroutetoview')->with('user',$names)->with('user_id','9');
    // return view('dataroutetoview')
    // ->withUser($name)
    // ->withUserid('9');
// });

// Route::get('/dataroutetoview/{id}',function ($namesid){
//     $users = getUsers();
//     abort_if(!isset($users[$namesid]),404);
//     $user = $users[$namesid];
//     return view('user',['id'=> $user]);
// })->name("view.dataroutetoview");


// Route::get('/post', function () {
//     return view('post');
// //return "<h1>anucreated post</h1>";
// })->name('mypost');
// Route::get('/test', function () {
//     return view('about');
// //return "<h1>anucreated post</h1>";
// });

//Route::redirect('/about','/test',301);


// Route::view("post","/post");


// Route::get('/post/{id?}/comment/{commentid?}', function(string $id = null, string $comment=null) {
//     if($id){
//         return "<h1>Post ID :". $id."</h1><h2>".$comment."</h2>";
//     }else{
//         return "<h1> No id found";
//     }
    
// })->whereAlpha('id')->whereIn('commentid',['Anu','sai']);

// Route::prefix('page')->group(function(){
//     Route::get('/about',function(){
//         return "Hello  this is about page";
//     });
//     Route::get('/gallery',function(){
//         return "Hello  this is gallary page";
//     });
//     Route::get('post/firstpost',function(){
//         return "Hello  this is post page";
//     });
// });

// Route::fallback(function (){
//     return "<h1>Page Not Found";
// });





