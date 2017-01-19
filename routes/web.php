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
    return view('login.connexion');
});

Route::get('/inscription', function () {
    return view('login.inscription');
});

Route::get('/reinitialisation', function () {
    return view('login.oubli_mot_de_passe');
});

Route::get('/messagerie','MessagesController@index');


Route::get('/historique', function () {
    return view('user.user_historique', ['classActive' => 'active']);
});

//route par group pour profil
Route::group(['prefix' => 'profil'], function(){
    Route::get('/', function () {
        return view('user.user_profil', ['classActive' => 'active']);
    });

    Route::get('/modification', function () {
        return view('user.info_user');
    });
});

//route par group pour evenements
Route::group(['prefix' => 'evenements'], function(){
    Route::get('/', function () {
        return view('user.event.user_events', ['classActive' => 'active']);
    });

    Route::get('/nouveau', function () {
        return view('user.event.create_event', ['classActive' => 'active']);
    });

    Route::get('/{id}', function ($id) {
        return view('user.event.visit_user_event', ['id' => $id]);
    });
});

//route par group pour amis
Route::group(['prefix' => 'amis'], function(){
    Route::get('/', 'FriendsController@index');

    Route::get('/{pseudo_amis}', function ($pseudo_amis) {
        return view('user.friend.visit_friends', ['name' => $pseudo_amis]);
    });
});

//route par group pour admin
Route::group(['prefix' => 'admin'], function() {

    Route::get('post', function () {
        return view('admin.admin_page_posts', ['classActive' => 'active']);
    });

    Route::get('events', function () {
        return view('admin.admin_page_events', ['classActive' => 'active']);
    });

    Route::get('tags', function () {
        return view('admin.admin_page_tags', ['classActive' => 'active']);
    });

});

Route::get('/{pseudo}', function ($pseudo) {
   return view('user.accueil_connecte', ['classActive' => 'active']);    
})->where('pseudo', '^[A-Za-z0-9]{1,20}$');


