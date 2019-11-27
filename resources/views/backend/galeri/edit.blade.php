@extends('backend.layout.master')
@section('title', 'Galeri Edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Galeri</li>
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
                <form role="form" action="/backend/galeri/{{$galeri->id}}/update" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <img title"{{$galeri->judul_gambar}}"class="rounded mx-auto d-block" style="max-height: 250px;max-width: 250px" src="{{ asset('/storage/galeri/' . $galeri->gambar) }}" id="gambar" />
                        <label>Gambar</label>
                      <div class="input-group mb-3">
                      <input type="hidden" name="gambar" value="{{$galeri->judul_gambar}}">
                      <input id="gambarUpload" class="note-image-input form-control-file note-form-control note-input" value="{{$galeri->judul_gambar}}" type="file" name="gambar" >
                      </div>
                      <!-- text input -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Kategori</label>
                      <select name="kategori_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_kategori as $kategori)
                      <option value="{{$kategori->id}}" @if($galeri->kategori_id == $kategori->id) selected @endif >{{$kategori->kategori}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul_gambar" class="form-control" placeholder="Link..." value = "{{$galeri->judul_gambar}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="/backend/galeri">
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
          {{-- <!--/.col (right) --> --}}
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