@extends('backend.layout.master')
@section('title', 'Pembelajaran')
@section('content')
<section class="content-header">
      <div class="container-fluid">
          @if(session('success'))
      <div id="toastsContainerTopRight" class="toasts-top-right fixed">
          <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                  <strong class="mr-auto">Success</strong>
                  <small>Subtitle</small>
                  <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="toast-body">Tambah data pembelajaran baru</div>
            </div>
            @endif
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pembelajaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Pembelajaran</li>
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
                    <h3 class="col-11 card-title pt-2">Data Pembelajaran</h3>
                    <button type="button" class="btn col-1 bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                  Tambah
                    </button>
                    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Tambah Pembelajaran</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/pembelajaran/create" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama File</label>
                                        <input name="nama_file" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama File">
                                    </div>
                                    <div class="form-group">
                                    <label>Minimal</label>
                                    <select name="guru_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link</label>
                                        <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Link">
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
                      <th>Nama File</th>
                      <th>Guru</th>
                      <th>Bahan</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_pembelajaran as $pembelajaran)
                    <tr>
                      <td>1</td>
                      <td>{{$pembelajaran->nama_file}}</td>
                      <td>{{$pembelajaran->guru_id}}</td>
                      <td><span class="tag tag-success">{{$pembelajaran->link}}</span></td>
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