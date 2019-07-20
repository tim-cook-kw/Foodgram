<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Modules\Category\Entities\CategoryModel;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('admin.dashboard');
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
        $dataarticle = DB::table('article')
            ->join('users', 'users.id', '=', 'article.created_by')
            ->select('article.*', 'users.name')
            ->paginate(3);
        $latestnews = DB::table('article')
                ->join('users', 'users.id', '=', 'article.created_by')
                ->select('article.*', 'users.name')
                ->orderBy('created_at')
                ->limit(3)
                ->get();
        $kategori = CategoryModel::all();
        return view('home.blog',['articledata' => $dataarticle,'latestnewsdata' => $latestnews, 'kategoridata' => $kategori]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
