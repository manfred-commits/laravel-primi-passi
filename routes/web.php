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

Route::get('/chi-siamo', function(){
    $data= [
        'nav'=>[
            [
                'title'=>'Home',
                'link'=>'http://127.0.0.1:8000/'

            ],
            [
                'title'=>'Contatti',
                'link'=>'http://127.0.0.1:8000/contatti'

            ],
        ],
        'info'=>[
            [
                'name'=>'Mr.Gray',
                'img'=>'https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore atque maxime magnam quo, quaerat consequuntur similique, reiciendis aut numquam in? Distinctio quidem praesentium architecto assumenda! Labore soluta beatae molestias?'

            ],
        ]
    ];
    return view('chi-siamo',$data);
});

Route::get('/contatti', function(){
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
        ],
        'info'=>[
            [
                'address'=>'Via Benedetto Benedetti 23, 20100, Milano, Italia',
                'phoneNumber'=>'+390291537134',
                'email'=>'gray@gray.com'

            ],
        ]
    ];
    return view('contatti',$data);
});