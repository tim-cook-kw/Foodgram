<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Category\Entities\CategoryModel;
class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = DB::table('categories')->get();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $imagepath= $request->file('image');
        $categoryObject = new CategoryModel();
        $categoryObject->name = $request->name;
        $categoryObject->slug = $request->slug;
        $categoryObject->image =  'imagecategory/'.$imagepath->getClientOriginalName();
        $path = $request->file('image')->storeAs('imagecategory', $imagepath->getClientOriginalName());
        $categoryObject->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $datacategory = CategoryModel::find($id);
        return $datacategory;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $datacategory = CategoryModel::find($id);
        return $datacategory;
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
            $categoryObject = CategoryModel::find($id);
            $categoryObject->name = $request->name;
            $categoryObject->slug = $request->slug;
            $categoryObject->image =  'imagecategory/'.$imagepath->getClientOriginalName();
            $path = $request->file('image')->storeAs('imagecategory', $imagepath->getClientOriginalName());
            $categoryObject->save();
        }else{
            $categoryObject = CategoryModel::find($id);
            $categoryObject->name = $request->name;
            $categoryObject->slug = $request->slug;
            $categoryObject->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $categoryObject = CategoryModel::find($id);
        $categoryObject->delete();
    }
}
