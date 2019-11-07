@extends('backend.layout.master')
@section('title', 'Identitas Sekolah')
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
        <h1>Identitas Sekolah</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Identitas Sekolah</li>
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
            <form role="form" action="/profil/identitas/{{$identitas->first()->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input name="nama_sekolah" type="text" value="{{$identitas->first()->nama_sekolah}}" class="form-control" placeholder="Pendidikan...">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" type="text" value="{{$identitas->first()->status}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="3">{{$identitas->first()->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>telepon/fax</label>
                        <input name="telepon_fax" type="text" value="{{$identitas->first()->telepon_fax}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                    <div class="form-group">
                        <label>Website Email</label>
                        <input name="website_email" type="text" value="{{$identitas->first()->website_email}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                    <div class="form-group">
                        <label>Kepala Sekolah</label>
                        <input name="kepala_sekolah" type="text" value="{{$identitas->first()->kepala_sekolah}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                    <div class="form-group">
                        <label>Nomer Sekolah</label>
                        <input name="nomer_sekolah" type="text" value="{{$identitas->first()->nomer_sekolah}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                        <div class="form-group">
                        <label>NPSN</label>
                        <input name="npsn" type="text" value="{{$identitas->first()->npsn}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                    <div class="form-group">
                        <label>Nomer SK Pendirian</label>
                        <input name="no_sk_pendirian" type="text" value="{{$identitas->first()->no_sk_pendirian}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                        <div class="form-group">
                            <label>Tanggal SK Pendirian</label>
                            <input name="tgl_sk_pendirian" type="text" value="{{$identitas->first()->tgl_sk_pendirian}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                        <div class="form-group">
                            <label>Nomer Penyelenggaraan</label>
                            <input name="no_penyelenggaraan" type="text" value="{{$identitas->first()->no_penyelenggaraan}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                        <div class="form-group">
                            <label>Penyelenggara</label>
                        <input name="penyelenggara" type="text" value="{{$identitas->first()->penyelenggara}}" class="form-control" placeholder="Pendidikan...">
                    </div>
                    <div class="form-group">
                        <label>Akreditasi</label>
                        <textarea name="akreditasi" class="form-control" cols="30" rows="10">{{$identitas->first()->akreditasi}}</textarea>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/profil/identitas">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </a>
                <button type="submit" class="btn text-white btn-warning">
                Edit
                </button>
            </div>
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