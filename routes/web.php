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

Route::get('/admin/post', function () {
    return view('admin.admin_page_posts');
});

Route::get('/admin/events', function () {
    return view('admin.admin_page_events');
});

Route::get('/admin/tags', function () {
    return view('admin.admin_page_tags');
});

Route::get('/messagerie', function () {
    return view('user.user_messaging');
});

Route::get('/amis', function () {
    return view('user.friend.user_friends', ['classActive' => 'active']);
});

Route::get('/evenements', function () {
    return view('user.event.user_events', ['classActive' => 'active']);
});

Route::get('/evenements/nouveau', function () {
    return view('user.event.create_event', ['classActive' => 'active']);
});

Route::get('/historique', function () {
    return view('user.user_historique', ['classActive' => 'active']);
});

Route::get('/profil', function () {
    return view('user.user_profil', ['classActive' => 'active']);
});

Route::get('/profil/modification', function () {
    return view('user.info_user');
});

Route::get('/evenements/{id}', function ($id) {
    return view('user.event.visit_user_event', ['id' => $id]);
});

Route::get('/amis/{pseudo_amis}', function ($pseudo_amis) {
    return view('user.friend.visit_friends', ['name' => $pseudo_amis]);
});

Route::get('/{pseudo}', function ($pseudo) {
    return view('user.accueil_connecte');
});



