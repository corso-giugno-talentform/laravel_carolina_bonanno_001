<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $projects = [ //lo mettiamo statico perché tanto non é un dato che l'utente andrà a modificare 
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

    public function homepage()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = ['Marketing', 'Comunicazione', 'Web Design'];
        return view('services', ['services' => $services, 'projects' => self::$projects]);
    }

    public function service($service)
    {
        return view('service', ['service' => $service]);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function project($project)
    {
        foreach (self::$projects as $element) {
            if ($element['slug'] == $project) {
                return view('project', ['project' => $element]);
            }
        }
        abort(404);
    }
};
