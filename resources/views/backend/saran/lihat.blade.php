@extends('backend.layout.master')
@section('title', 'Kritik dan Saran')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Kritik dan Saran</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Kritik dan Saran</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-primary">
            <div class="card-header text-white">
            <h3 class="card-title">Detail</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form role="form" method="POST">
            {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Nama</label>
                    <input disabled name="judul_saran" type="text" value="{{$saran->nama_saran}}" class="form-control" placeholder="Judul...">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Email</label>
                    <input disabled name="judul_saran" type="text" value="{{$saran->email_saran}}" class="form-control" placeholder="Judul...">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Isi</label>
                    <textarea disabled class="form-control">{{$saran->isi_saran}}</textarea>
                    </div>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <a href="/backend/saran">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </a>
                </div>
            </div>
        </form>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
        <!-- /.card -->
        </div>
        {{-- <!--/.col (right) --> --}}
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
@endsection