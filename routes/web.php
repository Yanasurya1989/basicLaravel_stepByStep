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

Route::get('/', function () {
    return view('home', 
    [
        'name' => 'Yana', 
        'role' => 'owner',
        'fruit' => ['banana','apple', 'orange', 'melon']
    ]);
});

Route::get('main', function(){
    return view('layout.mainLayout');
});

Route::get('/aboute', function(){
    return 8 * 2;
});

Route::get('/about', function(){
    return view('about');
});

// Route::get('/contact', function(){
//     return view('contact', ['nama'=> 'Yana', 'telp' => '0897878...']);
// });

Route::view('/contact', 'contact', ['nama' => 'Yana', 'telp' => '089778876776']); //bentuk ringkas dari code diatas

// redirec
Route::redirect('aboutt', 'contact'); //ketika ketik about akan redirect ke cotact

// Rout dengan parameter
Route::get('/product', function(){
    return 'ini product ';
});

Route::get('/product/{id}', function($id){
    return 'ini product id : '.$id;
});

Route::get('/product/{id}', function($id){
    return view('product.detail',['id' => $id]);
});

// Prefix Route
Route::prefix('ganti-disini-prefix~')->group(function(){
    Route::get('/profil-admin1', function(){
        return 'ini admin ke 1';
    });
    Route::get('/profil-admin2', function(){
        return 'ini admin ke 2';
    });
    Route::get('/profil-admin3', function(){
        return 'ini admin ke 3';
    });
    Route::get('/profil-admin4', function(){
        return 'ini admin ke 4';
    });
    Route::get('/profil-admin5', function(){
        return 'ini admin ke 5';
    });

    // php artisan route:list -> jalankan di terminal untuk melihat daftar route yang dibuat
});

