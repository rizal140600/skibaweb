@extends('backend.layout.master')
@section('title', 'Kegiatan')
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
            <h1>Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Kegiatan</li>
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
                    <h3 class="col-11 card-title pt-2">Data Kegiatan</h3>
                      <button type="button" class="btn col-1 btn-sm bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                      <i class="fas fa-plus"></i>
                      </button>
                    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Tambah Kegiatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/kegiatan/create" enctype="multipart/form-data"  method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Foto Kegiatan</label>
                                        <input class="note-image-input form-control-file note-form-control note-input" type="file" name="kegiatan_foto" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="kegiatan_judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul...">
                                      </div>
                                      <div class="form-group">
                                        <label>Isi</label>
                                        <textarea class="textarea" name="kegiatan_isi" placeholder="isi kegiatan"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label>Lokasi</label>
                                        <input name="kegiatan_lokasi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi...">
                                      </div>
                                      <div class="form-group">
                                        <label>Tahun</label>
                                        <input name="kegiatan_tahun" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Waktu</label>
                                        <input name="kegiatan_waktu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Waktu...">
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
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Lokasi</th>
                      <th>Tahun</th>
                      <th>Waktu</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_kegiatan as $index => $kegiatan)
                    <tr>
                      <td>{{$index +1}}</td>
                      <th >
                        <!-- Button trigger modal -->
                        <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#kegiatan{{$kegiatan->id}}">
                          <img style="max-width: 100px" class="img-fluid" src="{{ asset('/storage/' . $kegiatan->kegiatan_foto) }}" />
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="kegiatan{{$kegiatan->id}}" tabindex="-1" role="dialog" aria-labelledby="kegiatan{{$kegiatan->id}}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <img class="img-fluid" src="{{ asset('/storage/' . $kegiatan->kegiatan_foto) }}" />
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </th>
                      <td>{{$kegiatan->kegiatan_judul}}</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#isi{{$kegiatan->id}}">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="isi{{$kegiatan->id}}" tabindex="-1" role="dialog" aria-labelledby="isi{{$kegiatan->id}}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <textarea class="textarea" name="kegiatan_isi" placeholder="isi kegiatan"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$kegiatan->kegiatan_isi}}</textarea>
                              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>{{$kegiatan->kegiatan_lokasi}}</td>
                      <td>{{$kegiatan->kegiatan_tahun}}</td>
                      <td>{{$kegiatan->kegiatan_waktu}}</td>
                      <td style="min-width: 105px">
                          <a class="" href="/kegiatan/{{$kegiatan->id}}/edit">
                              <button type="button" class="btn btn-warning text-white  btn-sm" title="Edit">
                              <i class="far fa-edit"></i>
                              </button>
                          </a>
                          <a class="" href="/kegiatan/{{$kegiatan->id}}/delete">
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