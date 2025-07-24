<?php

use Illuminate\Support\Facades\Route;

// Lo slash = root (pagina principale)
// Callback function

// dominio = http://127.0.0.1:8000

// Fa il controllo sull'uri
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// url = http://127.0.0.1:8000/ciccio
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/servizi', function () {
    $services = ['Marketing', 'Comunicazione', 'Web Design'];
    $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'name' => 'Piattaforma di eCommerce',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'image' => 'https://picsum.photos/id/1/300/150'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'name' => 'Applicazione per Task',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'image' => 'https://picsum.photos/id/2/300/150'
        ],
        [
            'id' => 3,
            'slug' => 'software-gestionale',
            'name' => 'Software Gestionale',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'image' => 'https://picsum.photos/id/3/300/150'
        ],
    ];
    return view('services', ['services' => $services, 'projects' => $projects]);
})->name('services');

Route::get('/servizi/{service}', function ($service) {
    return view('service', ['service' => $service]);
})->name('service');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/progetti/{project}', function ($project) {
    //project = ago
    //projects = paglia
    //abort(404);
    $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'name' => 'Piattaforma di eCommerce',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://picsum.photos/id/1/1920/1080'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'name' => 'Applicazione per Task',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://picsum.photos/id/2/1920/1080'

        ],
        [
            'id' => 3,
            'slug' => 'software-gestionale',
            'name' => 'Software Gestionale',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://picsum.photos/id/3/1920/1080'

        ],
    ];


    foreach ($projects as $element) {
        if ($element['slug'] == $project) {
            return view('project', ['project' => $element]);
        }
    }
    abort(404);
})->name('project');




/* Route::get('/', function () {
    $services = ['Marketing', 'Comunicazione', 'Web Design'];
    return view('welcome', ['services' => $services]);
}); */