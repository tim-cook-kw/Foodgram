<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Article\Entities\ArticleModel;
class ArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $article = DB::table('article')
            ->join('categories', 'categories.id', '=', 'article.id_category')
            ->join('users', 'users.id', '=', 'article.created_by')
            ->select('article.*', 'users.name', 'categories.name as name_category')
            ->get();
            return $article;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('article::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagepath= $request->file('image');
            $articleObject = new ArticleModel();
            $articleObject->title = $request->judul;
            $articleObject->description = $request->description;
            $articleObject->ingredient = $request->ingredient;
            $articleObject->direction = $request->direction;
            $articleObject->id_category = $request->category;
            $articleObject->slug = $request->slug;
            $articleObject->image =  'imagearticle/'.$imagepath->getClientOriginalName();
            $path = $request->file('image')->storeAs('imagearticle', $imagepath->getClientOriginalName());
            $articleObject->created_by = '1';
            $articleObject->save();
        }else{
            $articleObject = new ArticleModel();
            $articleObject->title = $request->judul;
            $articleObject->description = $request->description;
            $articleObject->id_category = $request->category;
            $articleObject->slug = $request->slug;
            $articleObject->ingredient = $request->ingredient;
            $articleObject->direction = $request->direction;
            $articleObject->created_by = '1';
            $articleObject->save();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $articledata = ArticleModel::find($id);
        return $articledata;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('article::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $imagepath= $request->file('image');
            $articleObject = ArticleModel::find($id);
            $articleObject->title = $request->judul;
            $articleObject->description = $request->description;
            $articleObject->id_category = $request->category;
            $articleObject->slug = $request->slug;
            $articleObject->created_by = '1';
            $articleObject->ingredient = $request->ingredient;
            $articleObject->direction = $request->direction;
            $articleObject->image =  'imagearticle/'.$imagepath->getClientOriginalName();
            $path = $request->file('image')->storeAs('imagearticle', $imagepath->getClientOriginalName());
            $articleObject->save();
        }else{
            $articleObject = ArticleModel::find($id);
            $articleObject->title = $request->judul;
            $articleObject->description = $request->description;
            $articleObject->id_category = $request->category;
            $articleObject->ingredient = $request->ingredient;
            $articleObject->direction = $request->direction;
            $articleObject->slug = $request->slug;
            $articleObject->created_by = '1';
            
            $articleObject->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $articleObject = ArticleModel::find($id);
        $articleObject->delete();
    }
    public function findarticle($id){
        $articleObject = ArticleModel::where('id_category',$id)->get();
        return $articleObject;
    }
}
