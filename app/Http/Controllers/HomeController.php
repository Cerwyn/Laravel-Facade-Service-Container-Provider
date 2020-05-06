<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');

        //return app('view')->make('welcome'); //Facade behind the scene
        //return View::make('welcome'); //Facade

        //return request('data');

        //return Request::input('name'); //Facade

        //return file(public_path('index.php'));

        //return File::get(public_path('index.php')) //Facade
    }
}
