@extends('backend.layout.master')
@section('title', 'Sarana Prasarana Edit')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Sarana Prasarana Edit</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Sarana Prasarana</li>
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
            <form role="form" action="/backend/profil/sarana/{{$sarana->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                        <label for="exampleInputEmail1">Ruang Area</label>
                    <input name="ruang_area" type="text" value="{{$sarana->ruang_area}}" class="form-control" id="exampleInputEmail1" placeholder="Ruang Area...">
                    </div>
                    <div class="form-group">
                    <label>Jumlah Ruang</label>
                    <input name="jumlah_ruang" type="text" value="{{$sarana->jumlah_ruang}}" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Ruang...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Luas</label>
                        <input type="text" name="luas" value="{{$sarana->luas}}" class="form-control" id="exampleInputEmail1" placeholder="luas...">
                    </div>
                </div>
            <div class="modal-footer justify-content-between">
                <a href="/backend/profil/sarana">
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