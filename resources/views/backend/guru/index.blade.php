@extends('backend.layout.master')
@section('title', 'Guru')
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
            <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru">X</a>
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
            <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru">X</a>
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
            <a class="ml-5 text-white pl-4" style="text-decoration:none" href="/guru">X</a>
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
                      <button type="button" class="btn col-1 btn-sm bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                      <i class="fas fa-plus"></i>
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
                                <form action="/guru/create" enctype="multipart/form-data"  method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gambar</label>
                                        <input name="gambar_guru" type="file" class="form-control" id="imageInput" placeholder="Nama Guru...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Guru...">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="kelamin_id" class="form-control select2" style="width: 100%;">
                                      @foreach ($data_kelamin as $kelamin)
                                    <option value="{{$kelamin->id}}">{{$kelamin->kelamin}}</option>
                                      @endforeach  
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Bidang Studi</label>
                                    <select name="bidang_id" class="form-control select2" style="width: 100%;">
                                      @foreach ($data_studi as $studi)
                                    <option value="{{$studi->id}}">{{$studi->nama_bidang}}</option>
                                      @endforeach  
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <select name="pendidikan_id" class="form-control select2" style="width: 100%;">
                                      @foreach ($data_pendidikan as $pendidikan)
                                    <option value="{{$pendidikan->id}}">{{$pendidikan->pendidikan}}</option>
                                      @endforeach  
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <textarea class="form-control" name="alamat_guru" rows="3" placeholder="Alamat ..."></textarea>
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
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Kelamin</th>
                      <th>Bidang Studi</th>
                      <th>Pendidikan</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_guru as $index => $guru)
                    <tr>
                      <td>{{$index +1}}</td>
                      <th>
                        <img src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
                      </th>
                      <td>{{$guru->nama_guru}}</td>
                      <td>{{$guru->kelamin->kelamin}}</td>
                    <td>{{$guru->studi->nama_bidang}}</td>
                      <td>{{$guru->pendidikan->pendidikan}}</td>
                      <td>{{$guru->alamat_guru}}</td>
                      <td>{{$guru->telepon_guru}}</td>
                      <td>
                        <div class="row">
                          <a href="/guru/{{$guru->id}}/edit">
                          <div class="col-1">
                              <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                              <i class="far fa-edit"></i>
                              </button>
                            </div>
                          </a>
                          <div class="col-1">

                          </div>
                          <a class="ml-2" href="/guru/{{$guru->id}}/delete">
                          <div class="col-1">
                              <button type="button" class="btn btn-danger text-white  btn-sm" title="Delete" onclick="return confirm(
                                'apakah anda yakin mau menghapus file ini ?')">
                                <i class="far fa-trash-alt"></i>
                              </button>
                            </div>
                          </a>
                          <div class="col-9">
                            
                          </div>
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