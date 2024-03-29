<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('profile::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('profile::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $imagepath= $request->file('gambar');
            $id = Auth::user()->id;
            $userObject = User::find($id);
            $userObject->name = $request->name;
            $userObject->email = $request->email;
            $userObject->image = 'users/'.$imagepath->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('users', $imagepath->getClientOriginalName());
            $userObject->save();
            return redirect()->route('profile.index');
            
        }else{
            $id = Auth::user()->id;
            $userObject = User::find($id);
            $userObject->name = $request->name;
            $userObject->email = $request->email;
            $userObject->save();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('profile::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('profile::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
