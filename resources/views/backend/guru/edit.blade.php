@extends('backend.layout.master')
@section('title', 'Guru Edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>guru Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Guru</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header text-white">
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/guru/{{$guru->id}}/update" method="POST">
                {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" type="text" value="{{$guru->nama_guru}}" class="form-control" placeholder="Nama File...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Jenis Kelamin</label>
                      <select name="kelamin_id" class="form-control select2" style="width: 100%;">
                            <option value="0" @if($guru->kelamin_id == 0) selected @endif >0</option>
                            <option value="1" @if($guru->kelamin_id == 1) selected @endif >1</option>
                            <option value="2" @if($guru->kelamin_id == 2) selected @endif >2</option>
                            <option value="3" @if($guru->kelamin_id == 3) selected @endif >3</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bidang Studi</label>
                        <input type="text" name="bidang_studi" class="form-control" placeholder="Link..." value = "{{$guru->bidang_studi}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="tmpt_tgl_lahir" class="form-control" placeholder="Link..." value = "{{$guru->tmpt_tgl_lahir}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Pendidikan Terakhir</label>
                      <select name="pendidikan_id" class="form-control select2" style="width: 100%;">
                            <option value="0" @if($guru->pendidikan_id == 0) selected @endif >0</option>
                            <option value="1" @if($guru->pendidikan_id == 1) selected @endif >1</option>
                            <option value="2" @if($guru->pendidikan_id == 2) selected @endif >2</option>
                            <option value="3" @if($guru->pendidikan_id == 3) selected @endif >3</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat_guru" class="form-control" placeholder="Link..." value = "{{$guru->alamat_guru}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon_guru" class="form-control" placeholder="Link..." value = "{{$guru->telepon_guru}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="/guru">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </a>
                  <button type="submit" class="btn text-white btn-warning">
                    Edit
                  </button>
            </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
@endsection