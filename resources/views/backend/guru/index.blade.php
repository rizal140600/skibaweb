@extends('backend.layout.master')
@section('title', 'Guru')
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
                                        <input class="note-image-input form-control-file note-form-control note-input" type="file" name="gambar_guru" >
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
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">+62</span>
                                          </div>
                                          <input type="text" name="telepon_guru" class="form-control" placeholder="Telepon...">
                                        </div>
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#guru{{$guru->id}}">
                          <i class="far fa-eye"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="guru{{$guru->id}}" tabindex="-1" role="dialog" aria-labelledby="guru{{$guru->id}}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <img class="img-fluid" src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </th>
                      <td>{{$guru->nama_guru}}</td>
                      <td>{{$guru->kelamin->kelamin}}</td>
                    <td>{{$guru->studi->nama_bidang}}</td>
                      <td>{{$guru->pendidikan->pendidikan}}</td>
                      <td>{{$guru->alamat_guru}}</td>
                      <td>{{$guru->telepon_guru}}</td>
                      <td style="min-width: 105px">
                          <a class="" href="/guru/{{$guru->id}}/edit">
                              <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                              <i class="far fa-edit"></i>
                              </button>
                          </a>
                          <a class="" href="/guru/{{$guru->id}}/delete">
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