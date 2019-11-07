@extends('backend.layout.master')
@section('title', 'Struktur Organisasi')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Struktur Organisasi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Organisasi</li>
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
            <form role="form" action="/profil/struktur/{{$struktur->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                        <img class="rounded mx-auto d-block" style="max-height: 250px" src="{{ asset('/storage/' . $struktur->struktur_organisasi) }}" />
                    <label>Gambar</label>
                    <div class="input-group mb-3">
                    <input class="note-image-input form-control-file note-form-control note-input" value="{{$struktur->struktur_organisasi}}" type="file" name="gambar_guru" >
                    </div>
                    <!-- text input -->
            <div class="modal-footer justify-content-between">
                <a href="/profil/struktur">
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