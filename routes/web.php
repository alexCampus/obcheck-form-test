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
    return view('faq');
});

Route::get('/cgu', function () {
    return view('cgu');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/new_password', function () {
    return view('oubli_mot_de_passe');
});

Route::get('/admin_post', function () {
    return view('admin_page_post');
});

Route::get('/admin_events', function () {
    return view('admin_page_events');
});

Route::get('/admin_tags', function () {
    return view('admin_page_tags');
});

Route::get('/toto', function () {
    return view('accueil_connecte');
});

Route::get('/toto/messagerie', function () {
    return view('user_messaging');
});

Route::get('/toto/amis', function () {
    return view('user_friends');
});

Route::get('/toto/amis/0', function () {
    return view('visit_friends');
});

Route::get('/toto/evenements', function () {
    return view('user_events');
});

Route::get('/toto/evenements/nouveau', function () {
    return view('create_event');
});

Route::get('/toto/evenements/0', function () {
    return view('visit_user_event');
});

Route::get('/toto/historique', function () {
    return view('user_historique');
});

Route::get('/toto/profil', function () {
    return view('user_profil');
});

Route::get('/toto/profil/modification', function () {
    return view('info_user');
});




