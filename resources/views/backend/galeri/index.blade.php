@extends('backend.layout.master')
@section('title', 'Galeri')
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
            <h1>Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Galeri</li>
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
                    <h3 class="col-11 card-title pt-2">Data Galeri</h3>
                      <button type="button" class="btn col-1 btn-sm bg-success btn-default" data-toggle="modal" data-target="#modal-default">
                      <i class="fas fa-plus"></i>
                      </button>
                    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Tambah Galeri</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/backend/galeri/create" enctype="multipart/form-data"  method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_id" class="form-control select2" style="width: 100%;">
                                      @foreach ($data_kategori as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                      @endforeach  
                                    </select>
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Judul Gambar</label>
                                        <input name="judul_gambar" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul...">
                                      </div>
                                      <div class="form-group">
                                        <img class="rounded mx-auto d-block" style="max-height: 250px;max-width: 250px" id="gambar" />
                                        <label>Gambar</label>
                                        <input class="note-image-input form-control-file note-form-control note-input" type="file" id="gambarUpload" name="gambar" >
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
                <table class="table table-hover mb-5">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Kategori</th>
                      <th>Judul</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_galeri as $index => $galeri)
                    <tr>
                      <td>{{ $data_galeri->firstItem() + $index }}</td>
                      <td>{{$galeri->kategori->kategori}}</td>
                      <td>{{$galeri->judul_gambar}}</td>
                      <th >
                        <!-- Button trigger modal -->
                        <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#galeri{{$galeri->id}}">
                          <img title"{{$galeri->judul_gambar}}" style="max-width: 100px" class="img-fluid" src="{{ asset('/storage/galeri/' . $galeri->gambar) }}" />
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="galeri{{$galeri->id}}" tabindex="-1" role="dialog" aria-labelledby="galeri{{$galeri->id}}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <img title"{{$galeri->judul_gambar}}" class="img-fluid" src="{{ asset('/storage/galeri/' . $galeri->gambar) }}" />
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </th>
                      <td style="min-width: 105px">
                          <a class="" href="/backend/galeri/{{$galeri->id}}/edit">
                              <button title="Edit" type="button" class="btn btn-warning text-white  btn-sm" >
                              <i class="far fa-edit"></i>
                              </button>
                          </a>
                          <a class="" href="/backend/galeri/{{$galeri->id}}/delete">
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
                  {{$data_galeri->links()}}
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
@section('script')
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#gambar').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#gambarUpload").change(function() {
  readURL(this);
});
</script>
@endsection