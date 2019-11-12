@extends('backend.layout.master')
@section('title', 'Visi Misi')
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
        <h1>Visi Misi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Visi Misi</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        @if ($misi->isNotEmpty())
            <div class="card card-warning">
            @else
            <div class="card card-success">
            @endif
                <div class="card-header text-white">
                <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
            <div class="card-body">
                    @if ($misi->isNotEmpty())
                        <form role="form" action="/backend/profil/misi/{{$misi->first()->id}}/update" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label>Visi</label>
                            <div class="mb-3">
                            <textarea class="textarea" name="visi" placeholder="tentang sekolah..."
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$misi->first()->visi}}
                            </textarea>
                            </div>
                                </div>
                            <div class="form-group">
                            <label>Misi</label>
                            <div class="mb-3">
                            <textarea class="textarea" name="misi" placeholder="tentang sekolah..."
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$misi->first()->misi}}
                            </textarea>
                            </div>
                                </div>
                            </div>
                            </div>
                        <div class="modal-footer justify-content-between">
                            <a href="/backend/profil/misi">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" class="btn text-white btn-warning">
                            Edit
                        </button>
                    </form>
                    @else
                        <form action="/backend/profil/misi/create" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                        <label>Visi</label>
                        <div class="mb-3">
                        <textarea class="textarea" name="visi" placeholder="Tentang Sekolah"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                            </div>
                        <div class="form-group">
                        <label>Misi</label>
                        <div class="mb-3">
                        <textarea class="textarea" name="misi" placeholder="Tentang Sekolah"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                            </div>
                    <div class="modal-footer justify-content-between">
                    <a href="/backend/profil/misi">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </a>
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