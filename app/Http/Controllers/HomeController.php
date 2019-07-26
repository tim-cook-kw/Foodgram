<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Modules\Article\Entities\ArticleModel;
use Modules\Category\Entities\CategoryModel;
use Auth;
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
        $latestnewsdata = DB::table('article')
        ->join('users', 'users.id', '=', 'article.created_by')
        ->select('article.*', 'users.name')
        ->orderBy('created_at')

        ->limit(3)
        ->get();
        $bestrecipe = DB::table('article')
        ->join('users', 'users.id', '=', 'article.created_by')
        ->select('article.*', 'users.name')
        ->where('article.id_category','=',4)
        ->limit(4)
        ->get();
        return view('home.index',['article' => $latestnewsdata,'receipe' => $bestrecipe]);
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
                ->limit(3)
                ->get();
        $categorydata = CategoryModel::all();
        return view('home.blog',['article' => $articledata,'category'=>$categorydata,'latestnews' => $latestnewsdata]);
    }

    public function recipe()
    {
        $articledata = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->where('article.id_category','=',4)
                ->paginate(12);
        $bestrecipe = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->where('article.id_category','=',4)
                ->limit(8)
                ->get();
        $latestrecipe = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->orderBy('created_at')
                ->limit(3)
                ->get();
        return view('recipe.recipe',['recipe' => $articledata,'bestrecipe'=>$bestrecipe,'latestrecipe' => $latestrecipe]);
    }


    public function singlerecipe($id)
    {
        $singlerecipe =  DB::table('article')->join('users', 'users.id', '=', 'article.created_by')
        ->select('article.*', 'users.name')
        ->where('article.title','=',$id)->first();
        return view('recipe.singlerecipe',['singlerecipe'=>$singlerecipe]);
    }

    public function singleblog($id)
    {
        $latestnewsdata = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->orderBy('created_at')
                ->limit(3)
                ->get();
        $categorydata = CategoryModel::all();
        $singleblog =  DB::table('article')->join('users', 'users.id', '=', 'article.created_by')
                                           ->select('article.*', 'users.name')
                                           ->where('article.title','=',$id)->first();
        return view('home.singleblog',['singleblog' => $singleblog,'category'=>$categorydata,'latestnews'=>$latestnewsdata]);
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }






    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin(){
        return view('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
	    return redirect()->route('login');
    }
}
