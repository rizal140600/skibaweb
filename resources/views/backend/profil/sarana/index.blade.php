@extends('backend.layout.master')
@section('title', 'Sarana Prasarana')
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
        <h1>Sarana Prasarana</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Sarana Prasarana</li>
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
                <h3 class="col-11 card-title pt-2">Data Sarana Prasarana</h3>
                <button type="button" class="btn col-1 btn-sm bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i>
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Sarana Prasarana</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/backend/profil/sarana/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ruang Area</label>
                                    <input name="ruang_area" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ruang Area...">
                                </div>
                                <div class="form-group">
                                <label>Jumlah Ruang</label>
                                <input name="jumlah_ruang" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Ruang...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Luas</label>
                                    <input type="text" name="luas" class="form-control" id="exampleInputEmail1" placeholder="luas...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total Luas</label>
                                    <input type="text" name="total_luas" class="form-control" id="exampleInputEmail1" placeholder="total luas...">
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
                    <th>Ruang Area</th>
                    <th>Jumlah Ruang</th>
                    <th>Luas</th>
                    <th>Total Luas</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_sarana as $index => $sarana)
                <tr>
                    <td>{{ $index +1}}</td>
                    <td>{{$sarana->ruang_area}}</td>
                    <td>{{$sarana->jumlah_ruang}}</td>
                    <td>{{$sarana->luas}}</td>
                    <td>{{$sarana->total_luas}}</td>
                    <td style="min-width: 105px">
                        <a class="" href="/backend/profil/sarana/{{$sarana->id}}/edit">
                            <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                            <i class="far fa-edit"></i>
                            </button>
                        </a>
                        <a class="" href="/backend/profil/sarana/{{$sarana->id}}/delete">
                            <button type="button" class="btn btn-danger text-white  btn-sm" title="Delete" onclick="return confirm(
                            'apakah anda yakin mau menghapus file ini ?')">
                            <i class="far fa-trash-alt"></i>
                            </button>
                        </a>
                    </div>
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