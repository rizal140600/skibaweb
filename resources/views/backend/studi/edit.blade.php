@extends('backend.layout.master')
@section('title', 'Bidang Edit')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Bidang Edit</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Bidang Studi</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header text-white">
            <h3 class="card-title">Form Edit</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form role="form" action="/backend/studi/{{$studi->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Bidang Studi</label>
                    <input name="nama_bidang" type="text" value="{{$studi->nama_bidang}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                </div>
                </div>
            <div class="modal-footer justify-content-between">
                <a href="/backend/studi">
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