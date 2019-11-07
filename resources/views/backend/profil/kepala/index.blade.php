@extends('backend.layout.master')
@section('title', 'Kepala Sekolah')
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
        <h1>Kepala Sekolah</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Kepala Sekolah</li>
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
            <form role="form" action="/profil/kepala/{{$kepala->first()->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Kepala Sekolah</label>
                    <input name="kepala" type="text" value="{{$kepala->first()->kepala}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                    <div class="form-group">
                    <label>Sambutan Kepala Sekolah</label>
                    <div class="mb-3">
                <textarea class="textarea" name="kepala_sambutan" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {{$kepala->first()->kepala_sambutan}}
                </textarea>
                </div>
                    </div>
                </div>
                </div>
            <div class="modal-footer justify-content-between">
                <a href="/profil/kepala">
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