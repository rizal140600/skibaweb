@extends('backend.layout.master')
@section('title', 'Kegiatan Edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kegiatan Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Kegiatan</li>
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
                <form role="form" action="/kegiatan/{{$kegiatan->id}}/update" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <img class="rounded mx-auto d-block" style="max-height: 250px;max-width: 250px" src="{{ asset('/storage/' . $kegiatan->kegiatan_foto) }}" />
                        <label for="exampleInputEmail1">Foto Kegiatan</label>
                        <input type="hidden" name="kegiatan_foto" value="{{$kegiatan->kegiatan_foto}}">
                        <input class="note-image-input form-control-file note-form-control note-input" type="file" name="kegiatan_foto" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                      <input name="kegiatan_judul" type="text" class="form-control" id="exampleInputEmail1" value="{{$kegiatan->kegiatan_judul}}" placeholder="Judul...">
                      </div>
                      <div class="form-group">
                        <label>Isi</label>
                        <textarea class="textarea" name="kegiatan_isi" placeholder="isi kegiatan"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$kegiatan->kegiatan_isi}}</textarea>
                      </div>
                      <div class="form-group">
                        <label>Lokasi</label>
                      <input name="kegiatan_lokasi" value="{{$kegiatan->kegiatan_lokasi}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi...">
                      </div>
                      <div class="form-group">
                        <label>Tahun</label>
                      <input name="kegiatan_tahun" type="text" class="form-control" value="{{$kegiatan->kegiatan_tahun}}" id="exampleInputEmail1" placeholder="Tahun...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                    <input name="kegiatan_waktu" value="{{$kegiatan->kegiatan_waktu}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Waktu...">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="/kegiatan">
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