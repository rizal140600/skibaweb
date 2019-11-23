@extends('backend.layout.master')
@section('title', 'Jurusan Edit')
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
            <h1>Jurusan Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Jurusan</li>
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
                <form role="form" action="/backend/jurusan/{{$jurusan->id}}/update" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-12">
                      <img class="rounded mx-auto d-block" style="max-height: 250px;max-width: 250px" src="{{ asset('/storage/jurusan/' . $jurusan->jurusan_gambar) }}"  id="gambar" />
                        <label for="exampleInputEmail1">Gambar</label>
                        <input type="hidden" name="jurusan_gambar" value="{{$jurusan->jurusan_gambar}}">
                        <input class="note-image-input form-control-file note-form-control note-input" type="file" name="jurusan_gambar" id="gambarUpload" >
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Judul</label>
                        <input value="{{$jurusan->jurusan_judul}}" name="jurusan_judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul ...">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Isi</label>
                        <textarea class="textarea" name="jurusan_isi" placeholder="isi"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$jurusan->jurusan_isi}}</textarea>
                    </div>
                <div class="modal-footer justify-content-between col-12">
                    <a href="/backend/jurusan">
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