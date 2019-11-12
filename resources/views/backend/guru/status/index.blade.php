@extends('backend.layout.master')
@section('title', 'Status Guru')
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
        <h1>Status Guru</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Status Guru</li>
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
                <h3 class="col-11 card-title pt-2">Data Status Guru</h3>
                <button type="button" class="btn btn-sm col-1 bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fas fa-plus"></i>
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Status Guru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/backend/guru/status/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input name="status" type="text" class="form-control" id="exampleInputEmail1" placeholder="Status...">
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
                    <th>Status Guru</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_status as $index => $status)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$status->status}}</td>
                    <td>
                    <a href="/backend/guru/status/{{$status->id}}/edit">
                    <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                    <i class="far fa-edit"></i>
                    </button>
                    </a>
                    <a class="ml-2" href="/backend/guru/status/{{$status->id}}/delete">
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