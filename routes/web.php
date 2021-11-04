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

Route::get('/',function(){
    $data= [
        'nav'=>[
            [
                'title'=>'Home',
                'link'=>'http://127.0.0.1:8000/'

            ],
            [
                'title'=>'Chi Siamo',
                'link'=>'http://127.0.0.1:8000/chi-siamo'

            ],
            [
                'title'=>'Contatti',
                'link'=>'http://127.0.0.1:8000/contatti'

            ],
        ]
    ];
    return view('home',$data);
});
