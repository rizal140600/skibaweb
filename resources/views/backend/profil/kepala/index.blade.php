@extends('backend.layout.master')
@section('title', 'Kepala Sekolah')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Kepala Sekolah</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Kepala Sekolah</li>
            </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            @if ($kepala->isNotEmpty())
            <div class="card card-warning">
            @else
            <div class="card card-success">
            @endif
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
                <div class="card-header text-white">
                <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
            <div class="card-body">
                    @if ($kepala->isNotEmpty())
                        <form role="form" action="/backend/profil/kepala/{{$kepala->first()->id}}/update" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <img class="rounded mx-auto d-block" style="max-height: 250px; max-width: 250px" src="{{ asset("/storage/kepala/" . $kepala->first()->kepala_gambar) }}" id="gambar" />
                                <label>Gambar</label>
                            <div class="input-group mb-3">
                            <input type="hidden" name="kepala_gambar" value="{{$kepala->first()->kepala_gambar}}">
                            <input class="note-image-input form-control-file note-form-control note-input" type="file" name="kepala_gambar" id="gambarUpload" >
                            </div>
                            <div class="form-group">
                                <label>Kepala Sekolah</label>
                                <input name="kepala" type="text" value="{{$kepala->first()->kepala}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                                <div class="form-group">
                                <label>Sambutan Kepala Sekolah</label>
                                <div class="mb-3">
                            <textarea class="textarea" name="kepala_sambutan" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$kepala->first()->kepala_sambutan}}
                            </textarea>
                            </div>
                                </div>
                            </div>
                            </div>
                        <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn text-white btn-warning">
                            Edit
                        </button>
                    </form>
                    @else
                        <form action="/backend/profil/kepala/create" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <img class="rounded mx-auto d-block" style="max-height: 250px; max-width: 250px" src="" id="gambar" />
                            <label for="exampleInputEmail1">Gambar</label>
                            <input class="note-image-input form-control-file note-form-control note-input" type="file" id="gambarUpload" name="kepala_gambar" >
                        </div>
                        <div class="form-group">
                            <label>Kepala Sekolah</label>
                            <input name="kepala" type="text" class="form-control" placeholder="Kepala Sekolah...">
                            </div>
                            <div class="form-group">
                            <label>Sambutan Kepala Sekolah</label>
                            <div class="mb-3">
                        <textarea class="textarea" name="kepala_sambutan" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
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