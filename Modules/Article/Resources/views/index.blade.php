@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Article</h2>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>List Article</h2>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                    <br>
                    <br>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Form Input Data Article</h4>
                                </div>
                                <form id="formarticle">
                                    <div class="modal-body">
                                        <label for="email_address">Nama Category</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="category" id="category">
                                                    @foreach ($category as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <label for="slug">Slug</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Slug..." name="slug" id="slug">
                                            </div>
                                        </div>
                                        <label for="slug">Gambar</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" placeholder="Input Slug..." name="image" id="image">
                                            </div>
                                        </div>
                                        <label for="slug">Judul</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Slug..." name="judul" id="judul">
                                            </div>
                                        </div>
                                        <label for="image">description</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                               <textarea class="form-control" id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="modals2" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Form Ubah Data Article</h4>
                                </div>
                                <form id="formarticleedit">
                                    <div class="modal-body">
                                        <label for="email_address">Nama Category</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="categoryedit" id="categoryedit">
                                                    @foreach ($category as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" id="idarticle">
                                            </div>
                                        </div>
                                        <label for="slug">Slug</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Slug..." name="slugedit" id="slugedit">
                                            </div>
                                        </div>
                                        <label for="slug">Gambar</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" placeholder="Input Slug..." name="imageedit" id="imageedit">
                                            </div>
                                        </div>
                                        <label for="slug">Judul</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input judul..." name="juduledit" id="juduledit">
                                            </div>
                                        </div>
                                        <label for="image">description</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="descriptionedit" id="descriptionedit"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table" id="myTable" style="width:100%">
                        <thead>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>title</th>
                            <th>Action </th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
    <script>
        function myfunc(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/api/article/'+id,
                            type:'DELETE',
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di hapus!',
                                            'success'
                                        )
                                        table.ajax.reload();
                            }
                        })
                    }
                })
          
        }
        function editfunc(id){
            $.ajax({
                url:'/api/article/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#juduledit' ).val(data.title);
                    $( '#slugedit' ).val(data.slug);
                    $( '#descriptionedit' ).val(data.description);
                    $( '#categoryedit' ).val(data.id_category);
                    $( '#idarticle' ).val(data.id_article);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                    deferRender: true,
                    ajax: {
                        url: "/api/article",
                        type: "GET",
                        dataSrc: function (d) {
                            return d
                        }
                    },
                    columns: [
                        { data: 'name_category' },
                        { data: 'slug' },
                        { data: 'title' },
                        {
                            data: null,
                            render: function ( data, type, row ) {
                                return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id_article+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id_article+")'>Delete</button>";
                            }
                        }
                    ]
                });
        $('document').ready(function(){
            new FroalaEditor('#description', {
                                    heightMin: 100,
                                    heightMax: 200
                                })
            new FroalaEditor('#descriptionedit', {
                heightMin: 100,
                heightMax: 200
            })
            $('form[id="formarticle"]').validate({
                rules: {
                    judul: 'required',
                    description: 'required',
                    slug: 'required',
                    category: 'required',
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'judul', $( '#judul' ).val());
                    data.append( 'description', $( '#description' ).val());
                    data.append( 'slug', $( '#slug' ).val());
                    data.append( 'category', $( '#category' ).val());
                    data.append( 'image', $( '#image' )[0].files[0]);
                    $.ajax({
                        url:'/api/article',
                        method:'POST',
                        data:data,
                        contentType: false,
                        processData:false,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $( '#judul' ).val('');
                                    $( '#description' ).val('');
                                    $( '#slug' ).val('');
                                    $('#image').val('');
                                    $( '#category' ).val('');
                                    $('#myModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
            $('form[id="formarticleedit"]').validate({
                rules: {
                    name: 'required',
                    slug: 'required',
                    image: 'required',

                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    var id = $('#idarticle').val();
                    data.append('_method', 'PUT');
                    data.append( 'judul', $( '#juduledit' ).val());
                    data.append( 'slug', $( '#slugedit' ).val());
                    data.append( 'description', $( '#descriptionedit' ).val());
                    data.append( 'category', $( '#categoryedit' ).val());
                    data.append( 'image', $( '#imageedit' )[0].files[0]);
                    $.ajax({
                        url:'/api/article/'+id,
                        method:'POST',
                        data:data,
                        contentType: false,
                        processData:false,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $( '#juduledit' ).val('');
                                    $( '#descriptionedit' ).val('');
                                    $( '#slugedit' ).val('');
                                    $( '#categoryedit' ).val('');
                                    $('#imageedit').val('');
                                    $('#modals2').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
        })
    </script>
@endpush
