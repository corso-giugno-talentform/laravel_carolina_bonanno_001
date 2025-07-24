<?php

use Illuminate\Support\Facades\Route;

// Lo slash = root (pagina principale)
// Callback function

// dominio = http://127.0.0.1:8000

// Fa il controllo sull'uri
Route::get('/', function () {
    return view('welcome');
});

// url = http://127.0.0.1:8000/ciccio
Route::get('/about', function () {
    return view('about');
});

Route::get('/servizi', function () {
    $services = ['Marketing', 'Comunicazione', 'Web Design'];
    return view('services', ['services' => $services]);
});

Route::get('/servizi/{service}', function ($service) {
    return view('service', ['service' => $service]);
});

Route::get('/contatti', function () {
    return view('contacts');
});
