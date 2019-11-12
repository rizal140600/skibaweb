@extends('backend.layout.master')
@section('title', 'Pembelajaran Edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pembelajaran Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Pembelajaran</li>
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
                <form role="form" action="/backend/pembelajaran/{{$pembelajaran->id}}/update" method="POST">
                {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama File</label>
                        <input name="nama_file" type="text" value="{{$pembelajaran->nama_file}}" class="form-control" placeholder="Nama File...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <label>Nama Guru</label>
                      <select name="guru_id" class="form-control select2" style="width: 100%;">
                        @foreach ($data_guru as $guru)
                      <option value="{{$guru->id}}" @if($pembelajaran->guru_id == $guru->id) selected @endif >{{$guru->nama_guru}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control" placeholder="Link..." value = "{{$pembelajaran->link}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="/backend/pembelajaran">
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