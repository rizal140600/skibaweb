@extends('backend.layout.master')
@section('title', 'Kritik dan Saran')
@section('content')
<section class="content-header pb-0 mb-0">
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
        <div class="col-sm-6 mt-2">
        <h1>Kritik dan Saran</h1>
        </div>
        <div class="col-sm-6 mt-2">
        <ol class="breadcrumb float-sm-right">
            <form action="/backend/saran" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="cari" class="form-control" value="{{ $cari}}" placeholder="Search...">
                        <span class="input-group-btn">
                          <button type="submit" value="CARI" name="search" id="search-btn" class="btn btn-flat btn-info btn-lg btn-block"><i class="fa fa-search"></i>
                          </button>
                        </span>
                  </div>
                </form>
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
                <h3 class="col-11 card-title pt-2">Data Kritik dan Saran</h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover mb-5">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th style="min-width: 250px">Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_saran as $index => $saran)
                <tr>
                    <td>{{ $data_saran->firstItem() + $index }}</td>
                    <td>{{$saran->nama_saran}}</td>
                    <td>{{$saran->email_saran}}</td>
                    <td style="min-width: 105px">
                        <a class="" href="/backend/saran/{{$saran->id}}/lihat">
                            <button title="Lihat" type="button" class="btn btn-primary text-white  btn-sm">
                            <i class="far fa-eye"></i>
                            </button>
                        </a>
                        <a class="" href="/backend/saran/{{$saran->id}}/delete">
                            <button title="Delete" type="button" class="btn btn-danger text-white  btn-sm"  onclick="return confirm(
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
            <div class="container ml-3">
                {{$data_saran->links()}}
            </div>
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