@extends('backend.layout.master')
@section('title', 'Tentang Sekolah')
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
        <h1>Tentang Sekolah</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Tentang Sekolah</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        @if ($tentang->isNotEmpty())
            <div class="card card-warning">
            @else
            <div class="card card-success">
            @endif
                <div class="card-header text-white">
                <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
            <div class="card-body">
                    @if ($tentang->isNotEmpty())
                        <form role="form" action="/backend/profil/tentang/{{$tentang->first()->id}}/update" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <img class="rounded mx-auto d-block" style="max-height: 250px; max-width: 250px" src="{{ asset("/storage/" . $tentang->first()->sekolah_gambar) }}" />
                                <label>Gambar</label>
                            <div class="input-group mb-3">
                            <input type="hidden" name="sekolah_gambar" value="{{$tentang->first()->sekolah_gambar}}">
                            <input class="note-image-input form-control-file note-form-control note-input" type="file" name="sekolah_gambar" >
                            </div>
                            <div class="form-group">
                            <label>Tentang Sekolah</label>
                            <div class="mb-3">
                            <textarea class="textarea" name="tentang" placeholder="tentang sekolah..."
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$tentang->first()->tentang}}
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
                        <form action="/backend/profil/tentang/create" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gambar</label>
                            <input class="note-image-input form-control-file note-form-control note-input" type="file" name="sekolah_gambar" >
                        </div>
                        <div class="form-group">
                        <label>Tentang Sekolah</label>
                        <div class="mb-3">
                        <textarea class="textarea" name="tentang" placeholder="Tentang Sekolah"
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
        </div>
        <!--/.col (right) -->
    </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
@endsection