@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Roles</h2>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Roles</h2>
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
                                    <h4 class="modal-title">Form Input Data Roles</h4>
                                </div>
                                <form id="formroles">
                                    <div class="modal-body">
                                        <label for="email_address">Roles</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Nama category..." name="name" id="name">
                                            </div>
                                        </div>
                                        <label for="email_address">Slug</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Nama category..." name="slug" id="slug">
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
                                    <h4 class="modal-title">Form Ubah Data Roles</h4>
                                </div>
                                <form id="formrolesedit">
                                    <div class="modal-body">
                                        <label for="email_address">Roles</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Nama category..." name="nameedit" id="nameedit">
                                                <input type="hidden" id="idroles">
                                            </div>
                                        </div>
                                        <label for="email_address">Slug</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Input Nama category..." name="slugedit" id="slugedit">
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
                            <th>Roles</th>
                            <th>Slug</th>
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
                            url:'/api/roles/'+id,
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
                url:'/api/roles/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#nameedit' ).val(data.name);
                    $( '#slugedit' ).val(data.slug);
                    $( '#idroles' ).val(data.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                    deferRender: true,
                    ajax: {
                        url: "/api/roles",
                        type: "GET",
                        dataSrc: function (d) {
                            return d
                        }
                    },
                    columns: [
                        { data: 'name' },
                        { data: 'slug' },
                        {
                            data: null,
                            render: function ( data, type, row ) {
                                return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                            }
                        }
                    ]
                });
        $('document').ready(function(){
            $('form[id="formroles"]').validate({
                rules: {
                    name: 'required',
                    slug: 'required',
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'name', $( '#name' ).val());
                    data.append( 'slug', $( '#slug' ).val());
                    $.ajax({
                        url:'/api/roles',
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
                                    $( '#slug' ).val('');
                                    $( '#name' ).val('');
                                    $('#myModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
            $('form[id="formrolesedit"]').validate({
                rules: {
                    rolesedit: 'required',

                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    var id = $('#idroles').val();
                    data.append('_method', 'PUT');
                    data.append( 'name', $( '#nameedit' ).val());
                    data.append( 'slug', $( '#slugedit' ).val());
                    $.ajax({
                        url:'/api/roles/'+id,
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
                                    $( '#nameedit' ).val('');
                                    $( '#slugedit' ).val('');
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
