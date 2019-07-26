@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Profile</h2>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Profile User</h2>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-rounded" src="{{asset(Auth::user()->image)}}" style="width:200px;height:200px">
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('profile.create')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <label for="slug">name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Input Name" name="name" id="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <label for="slug">email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Input Name" name="email" id="email" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                            <label for="slug">Gambar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" placeholder="Input Name" name="gambar" id="gambar">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Save Changes </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

