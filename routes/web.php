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
Route::get('/ciccio', function () {
    return 'ciccio';
});

// url = http://127.0.0.1:8000/topolino
Route::get('/topolino', function () {
    return view('topolino');
});
