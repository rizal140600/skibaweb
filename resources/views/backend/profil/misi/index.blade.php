@extends('backend.layout.master')
@section('title', 'Visi Misi')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        @if(session('success'))
        <div class="alert text-white alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            @elseif(session('update'))
            <div class="alert text-white alert-warning alert-dismissible fade show" role="alert">
            {{session('update')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif(session('delete'))
        <div class="alert text-white alert-danger alert-dismissible fade show" role="alert">
            {{session('delete')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Visi Misi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Visi Misi</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header text-white">
            <h3 class="card-title">Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form role="form" action="/profil/misi/{{$misi->first()->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Visi</label>
                    <textarea name="visi" id="panjang" class="form-control" cols="30" rows="10">{{$misi->first()->visi}}</textarea>
                    </div>
                    <div class="form-group">
                    <label>Misi</label>
                    <textarea name="misi" id="besar" class="form-control " cols="30" rows="10">{{$misi->first()->misi}}</textarea>
                    </div>
                </div>
                </div>
            <div class="modal-footer justify-content-between">
                <a href="/profil/misi">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </a>
                <button type="submit" class="btn text-white btn-warning">
                Edit
                </button>
        </form>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
        <!-- /.card -->
        </div>
        <!--/.col (right) -->
    </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
@endsection