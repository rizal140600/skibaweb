@extends('backend.layout.master')
@section('title', 'Bidang Studi')
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
        <h1>Bidang  Studi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Bidang Studi</li>
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
                <h3 class="col-11 card-title pt-2">Data Bidang Studi</h3>
                <button type="button" class="btn btn-sm col-1 bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fas fa-plus"></i>
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Bidang Studi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/backend/studi/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bidang Studi</label>
                                    <input name="nama_bidang" type="text" class="form-control" id="exampleInputEmail1" placeholder="Bidang Studi...">
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
                    <th>Bidang Studi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_studi as $index => $studi)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$studi->nama_bidang}}</td>
                    <td>
                    <a href="/backend/studi/{{$studi->id}}/edit">
                    <button title="Edit" type="button" class="btn btn-warning text-white  btn-sm" >
                    <i class="far fa-edit"></i>
                    </button>
                    </a>
                    <a class="ml-2" href="/backend/studi/{{$studi->id}}/delete">
                    <button title="Delete" type="button" class="btn btn-danger text-white  btn-sm"  onclick="return confirm(
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