@extends('backend.layout.master')
@section('title', 'Struktur Organisasi')
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
            @if ($struktur->isNotEmpty())
            <div class="card card-warning">
            @else
                <div class="card card-success">
            @endif
                <div class="card-header text-white">
                <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
            <div class="card-body">
                    @if ($struktur->isNotEmpty())
                        <form role="form" action="/backend/profil/struktur/{{$struktur->first()->id}}/update" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <img class="rounded mx-auto d-block" style="max-height: 250px; max-width: 250px" src="{{ asset("/storage/struktur sekolah/" . $struktur->first()->struktur_organisasi) }}" id="gambar" />
                                <label>Gambar</label>
                            <div class="input-group mb-3">
                            <input type="hidden" name="struktur_organisasi" value="{{ asset("/storage/struktur sekolah/" . $struktur->first()->struktur_organisasi) }}">
                            <input class="note-image-input form-control-file note-form-control note-input"  type="file" name="struktur_organisasi" id="gambarUpload" >
                            </div>
                        <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn text-white btn-warning">
                            Edit
                        </button>
                    </form>
                    @else
                        <form action="/backend/profil/struktur/create" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <img class="rounded mx-auto d-block" style="max-height: 250px; max-width: 250px" id="gambar" />
                            <label for="exampleInputEmail1">Gambar</label>
                            <input class="note-image-input form-control-file note-form-control note-input" id="gambarUpload" type="file" name="struktur_organisasi" >
                        </div>
                    <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                    </form>
                    @endif
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