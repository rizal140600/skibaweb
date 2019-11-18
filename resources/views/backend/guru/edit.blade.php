@extends('backend.layout.master')
@section('title', 'Guru Edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        @if (count($errors) > 0)
      <div class="alert text-white alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf!</strong> Ada Kesalahan
        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        @endif
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Guru Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Guru</li>
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
                <form role="form" action="/backend/guru/{{$guru->id}}/update" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                          <img class="rounded mx-auto d-block" style="max-height: 250px;max-width: 250px" src="{{ asset('/storage/' . $guru->gambar_guru) }}" id="gambar" />
                        <label>Gambar</label>
                      <div class="input-group mb-3">
                      <input type="hidden" name="gambar_guru" value="{{$guru->gambar_guru}}">
                      <input id="gambarUpload" class="note-image-input form-control-file note-form-control note-input" type="file" name="gambar_guru" >
                      </div>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" type="text" value="{{$guru->nama_guru}}" class="form-control" placeholder="Nama File...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Jenis Kelamin</label>
                      <select name="kelamin_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_kelamin as $kelamin)
                      <option value="{{$kelamin->id}}" @if($guru->kelamin_id == $kelamin->id) selected @endif >{{$kelamin->kelamin}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Bidang Studi</label>
                      <select name="bidang_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_studi as $studi)
                      <option value="{{$studi->id}}" @if($guru->bidang_id == $studi->id) selected @endif >{{$studi->nama_bidang}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Pendidikan Terakhir</label>
                      <select name="pendidikan_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_pendidikan as $pendidikan)
                      <option value="{{$pendidikan->id}}" @if($guru->pendidikan_id == $pendidikan->id) selected @endif >{{$pendidikan->pendidikan}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Status</label>
                      <select name="status_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_status as $status)
                      <option value="{{$status->id}}" @if($guru->status_id == $status->id) selected @endif >{{$status->status}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                      <textarea class="form-control" name="alamat_guru" rows="3" placeholder="Alamat ...">{{$guru->alamat_guru}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon_guru" class="form-control" placeholder="Link..." value = "{{$guru->telepon_guru}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="/backend/guru">
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
@section('script')
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#gambar').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#gambarUpload").change(function() {
  readURL(this);
});
</script>
@endsection