<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    
    public function index()
    {
        return view('home.index');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function recipe()
    {
        return view('recipe.recipe');
    }


    public function singlerecipe()
    {
        return view('recipe.singlerecipe');
    }

    public function singleblog()
    {
        return view('home.singleblog');
    }




    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
