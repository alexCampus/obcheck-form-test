<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/faq', function () {
    return view('static.faq');
});

Route::get('/cgu', function () {
    return view('static.cgu');
});

Route::get('/contact', function () {
    return view('static.contact');
});

Route::get('/about', function () {
    return view('static.about');
});

Route::get('/connexion', function () {
    return view('auth.login');
});

Route::get('/inscription', function () {
    return view('auth.register');
});

Route::get('/reinitialisation', function () {
    return view('login.oubli_mot_de_passe');
});

Route::get('/messagerie','MessagesController@index');


Route::get('/historique', function () {
    return view('user.user_historique', ['classActive' => 'active']);
})->middleware('auth');

//route par group pour profil
Route::group(['prefix' => 'profil'], function(){
    Route::get('/{pseudo}', 'MessagesController@show');

    Route::get('/{pseudo}/update', 'MessagesController@profil');

    Route::put('/{id}/update', 'MessagesController@update');
});

//route par group pour evenements
Route::group(['prefix' => 'evenements'], function(){
    Route::get('/', function () {
        return view('user.event.user_events', ['classActive' => 'active']);
    })->middleware('auth');

    Route::get('/nouveau', function () {
        return view('user.event.create_event', ['classActive' => 'active']);
    })->middleware('auth');

    Route::get('/{id}', function ($id) {
        return view('user.event.visit_user_event', ['id' => $id]);
    })->middleware('auth');
});

//route par group pour amis
Route::group(['prefix' => 'amis'], function(){
    Route::get('/', 'FriendsController@index');

    Route::get('/{pseudo_amis}', function ($pseudo_amis) {
        return view('user.friend.visit_friends', ['name' => $pseudo_amis]);
    })->middleware('auth');
});

//route par group pour admin
Route::group(['prefix' => 'admin'], function() {

    Route::get('post', function () {
        return view('admin.admin_page_posts', ['classActive' => 'active']);
    })->middleware('auth');

    Route::get('events', function () {
        return view('admin.admin_page_events', ['classActive' => 'active']);
    })->middleware('auth');

    Route::get('tags', function () {
        return view('admin.admin_page_tags', ['classActive' => 'active']);
    })->middleware('auth');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*Route::get('/toto', function () {
   return view('user.accueil_connecte', ['classActive' => 'active']);    
})->where('pseudo', '^[A-Za-z0-9]{1,20}$');*/




