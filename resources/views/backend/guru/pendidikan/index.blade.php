@extends('backend.layout.master')
@section('title', 'Pendidikan Guru')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    @if(session('success'))
    <div class="alert text-white alert-success" role="alert">
    <div class="row">
        <div class="col-11">
        {{session('success')}}
        </div>
        <div class="col-1">
        <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru/pendidikan">X</a>
        </div>
    </div>
    </div>
    @elseif(session('update'))
    <div class="alert  alert-warning" role="alert">
    <div class="row">
        <div class=" text-white col-11">
        {{session('update')}}
        </div>
        <div class="col-1">
        <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru/pendidikan">X</a>
        </div>
    </div>
    </div>
    @elseif(session('delete'))
    <div class="alert text-white alert-danger" role="alert">
    <div class="row">
        <div class="col-11">
        {{session('delete')}}
        </div>
        <div class="col-1">
        <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru/pendidikan">X</a>
        </div>
    </div>
    </div>
    @endif
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pendidikan Guru</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Pendidikan Guru</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
    <div class="card">
            <div class="card-header">
                <div class="row">
                <h3 class="col-11 card-title pt-2">Data Pendidikan Guru</h3>
                <button type="button" class="btn btn-sm col-1 bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fas fa-plus"></i>
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Pendidikan Guru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/guru/pendidikan/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pendidikan</label>
                                    <input name="pendidikan" type="text" class="form-control" id="exampleInputEmail1" placeholder="pendidikan...">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                            </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th>Pendidikan Guru</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_pendidikan as $index => $pendidikan)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$pendidikan->pendidikan}}</td>
                    <td>
                    <a href="/guru/pendidikan/{{$pendidikan->id}}/edit">
                    <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                    <i class="far fa-edit"></i>
                    </button>
                    </a>
                    <a class="ml-2" href="/guru/pendidikan/{{$pendidikan->id}}/delete">
                    <button type="button" class="btn btn-danger text-white  btn-sm" title="Delete" onclick="return confirm(
                        'apakah anda yakin mau menghapus file ini ?')">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
@endsection