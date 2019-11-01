@extends('backend.layout.master')
@section('title', 'Pembelajaran edit')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
      @endif
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
              <div class="card-header">
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/pembelajaran/{{$pembelajaran->id}}/update" method="POST">
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
                            <option value="0" @if($pembelajaran->guru_id == 0) selected @endif >0</option>
                            <option value="1" @if($pembelajaran->guru_id == 1) selected @endif >1</option>
                            <option value="2" @if($pembelajaran->guru_id == 2) selected @endif >2</option>
                            <option value="3" @if($pembelajaran->guru_id == 3) selected @endif >3</option>
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
                    <a href="/pembelajaran">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </a>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
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