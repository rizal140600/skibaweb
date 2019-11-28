@extends('backend.layout.master')
@section('title', 'Identitas Sekolah')
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
        <div class="col-sm-6">
        <h1>Identitas Sekolah</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Identitas Sekolah</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if ($identitas->isNotEmpty())
            <div class="card card-warning">
            @else
            <div class="card card-success">
            @endif
                <div class="card-header text-white">
                <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
            <div class="card-body">
                    @if ($identitas->isNotEmpty())
                        <form role="form" action="/backend/profil/identitas/{{$identitas->first()->id}}/update" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input name="nama_sekolah" type="text" value="{{$identitas->first()->nama_sekolah}}" class="form-control" placeholder="Pendidikan...">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input name="status" type="text" value="{{$identitas->first()->status}}" class="form-control" placeholder="Pendidikan...">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" cols="30" rows="3">{{$identitas->first()->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>telepon/fax</label>
                                <input name="telepon_fax" type="text" value="{{$identitas->first()->telepon_fax}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email_sekolah" type="text" value="{{$identitas->first()->email_sekolah}}" class="form-control" placeholder="Email...">
                            </div>
                            <div class="form-group">
                                <label>Kepala Sekolah</label>
                                <input name="kepala_sekolah" type="text" value="{{$identitas->first()->kepala_sekolah}}" class="form-control" placeholder="Kepala Sekolah...">
                                </div>
                            <div class="form-group">
                                <label>Nomer Statistik Sekolah</label>
                                <input name="nomer_sekolah" type="text" value="{{$identitas->first()->nomer_sekolah}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                                <div class="form-group">
                                <label>NPSN</label>
                                <input name="npsn" type="text" value="{{$identitas->first()->npsn}}" class="form-control" placeholder="Pendidikan...">
                            </div>
                            <div class="form-group">
                                <label>Nomer SK Pendirian</label>
                                <input name="no_sk_pendirian" type="text" value="{{$identitas->first()->no_sk_pendirian}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal SK Pendirian</label>
                                    <input name="tgl_sk_pendirian" id="tanggal" type="text" value="{{$identitas->first()->tgl_sk_pendirian}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                                <div class="form-group">
                                    <label>Nomer Penyelenggaraan</label>
                                    <input name="no_penyelenggaraan" type="text" value="{{$identitas->first()->no_penyelenggaraan}}" class="form-control" placeholder="Pendidikan...">
                                </div>
                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                <input name="penyelenggara" type="text" value="{{$identitas->first()->penyelenggara}}" class="form-control" placeholder="Pendidikan...">
                            </div>
                            <div class="form-group">
                                <label>Akreditasi</label>
                                <textarea name="akreditasi" class="form-control" cols="30" rows="10">{{$identitas->first()->akreditasi}}</textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn text-white btn-warning">
                        Edit
                        </button>
                    </div>
                    </form>
                    @else
                        <form role="form" action="/backend/profil/identitas/create" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input name="nama_sekolah" type="text"  class="form-control" placeholder="Nama Sekolah...">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input name="status" type="text" class="form-control" placeholder="Status...">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>telepon/fax</label>
                                <input name="telepon_fax" type="text" class="form-control" placeholder="format: xxxxxxxxxx">
                                </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email_sekolah" type="text"  class="form-control" placeholder="Email...">
                            </div>
                            <div class="form-group">
                                <label>Kepala Sekolah</label>
                                <input name="kepala_sekolah" type="text" class="form-control" placeholder="Kepala Sekolah...">
                                </div>
                            <div class="form-group">
                                <label>Nomer Statistik Sekolah</label>
                                <input name="nomer_sekolah" type="text" class="form-control" placeholder="Nomer Statistik Sekolah...">
                                </div>
                                <div class="form-group">
                                <label>NPSN</label>
                                <input name="npsn" type="text" class="form-control" placeholder="Nomor Pokok Sekolah Nasional...">
                            </div>
                            <div class="form-group">
                                <label>Nomer SK Pendirian</label>
                                <input name="no_sk_pendirian" type="text"class="form-control" placeholder="Nomer Surat Keputusan...">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal SK Pendirian</label>
                                    <input id="tanggal" name="tgl_sk_pendirian" type="text" class="form-control " placeholder="format : HH-BB-TTTT">
                                    {{-- <input class="datepicker" name="tahun" id="tanggal" type="text"> --}}
                                </div>
                                <div class="form-group">
                                    <label>Nomer Penyelenggaraan</label>
                                    <input name="no_penyelenggaraan" type="text" class="form-control" placeholder="Nomer...">
                                </div>
                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                <input name="penyelenggara" type="text" class="form-control" placeholder="Penyelenggara...">
                            </div>
                            <div class="form-group">
                                <label>Akreditasi</label>
                                <textarea name="akreditasi" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn text-white btn-success">
                        Tambah
                        </button>
                    </div>
                    </form>
                    @endif
                <!-- /.card-body -->
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
@endsection