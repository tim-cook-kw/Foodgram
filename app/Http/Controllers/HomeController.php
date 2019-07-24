<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Modules\Article\Entities\ArticleModel;
use Modules\Category\Entities\CategoryModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

        $articledata = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->paginate(3);
        $latestnewsdata = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->orderBy('created_at')
                ->limit(1)
                ->get();
        $categorydata = CategoryModel::all();
        return view('home.blog',['article' => $articledata,'category'=>$categorydata,'latestnews' => $latestnewsdata]);
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

    public function about()
    {
        return view('home.about');
    }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
