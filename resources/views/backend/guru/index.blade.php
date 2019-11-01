@extends('backend.layout.master')
@section('title', 'Guru')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        @if(session('success'))
      <div class="alert alert-success" role="alert">
        <div class="row">
          <div class="col-11">
            {{session('success')}}
          </div>
          <div class="col-1">
            <a class="ml-5 text-white" style="text-decoration:none" href="/guru">x</a>
          </div>
        </div>
      </div>
        @elseif(session('update'))
        <div class="alert alert-warning" role="alert">
        <div class="row">
          <div class="col-11">
            {{session('update')}}
          </div>
          <div class="col-1">
            <a class="ml-5 text-white" style="text-decoration:none" href="/guru">x</a>
          </div>
        </div>
      </div>
      @elseif(session('delete'))
      <div class="alert alert-danger" role="alert">
        <div class="row">
          <div class="col-11">
            {{session('delete')}}
          </div>
          <div class="col-1">
            <a class="ml-5 text-white" style="text-decoration:none" href="/guru">x</a>
          </div>
        </div>
      </div>
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Guru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Guru</li>
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
                    <h3 class="col-11 card-title pt-2">Data Guru</h3>
                    <button type="button" class="btn col-1 bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                  Tambah
                    </button>
                    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Tambah Guru</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/guru/create" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Guru...">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="kelamin_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bidang Studi</label>
                                        <input type="text" name="bidang_studi" class="form-control" id="exampleInputEmail1" placeholder="Bidang Studi...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                                        <input type="text" name="tmpt_tgl_lahir" class="form-control" id="exampleInputEmail1" placeholder="Tempat, Tanggal Lahir...">
                                    </div>
                                    <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <select name="pendidikan_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" name="alamat_guru" class="form-control" id="exampleInputEmail1" placeholder="Alamat...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor Telepon</label>
                                        <input type="text" name="telepon_guru" class="form-control" id="exampleInputEmail1" placeholder="Nomor Telepon...">
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
                      <th>Nama</th>
                      <th>Kelamin</th>
                      <th>Bidang Studi</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>Pendidikan</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_guru as $guru)
                    <tr>
                      <td>1</td>
                      <td>{{$guru->nama_guru}}</td>
                      <td>{{$guru->kelamin_id}}</td>
                      <td>{{$guru->bidang_studi}}</td>
                      <td>{{$guru->tmpt_tgl_lahir}}</td>
                      <td>{{$guru->pendidikan_id}}</td>
                      <td>{{$guru->alamat_guru}}</td>
                      <td>{{$guru->telepon_guru}}</td>
                      <td>
                      <a href="/guru/{{$guru->id}}/edit">
                        <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                        <i class="far fa-edit"></i>
                        </button>
                      </a>
                      <a class="ml-2" href="/guru/{{$guru->id}}/delete">
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