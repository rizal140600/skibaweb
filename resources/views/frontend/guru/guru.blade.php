@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-42.9025px);"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Tenaga Pendidik</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Guru</h3>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Bidang Studi</th>
        <th scope="col">Pendidikan</th>
        <th scope="col">Status</th>
        <th scope="col">Alamat</th>
        <th scope="col">Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_guru as $index => $guru)
      <tr>
        <th scope="row">{{$index +1}}</th>
        <td>
          <!-- Button trigger modal -->
          <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#kegiatan{{$guru->id}}">
            <img style="max-width: 100px" class="img-fluid" src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="kegiatan{{$guru->id}}" tabindex="-1" role="dialog" aria-labelledby="kegiatan{{$guru->id}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <img class="img-fluid" src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
                  <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </td>
        <td>{{$guru->nama_guru}}</td>
        <td>{{$guru->kelamin->kelamin}}</td>
        <td>{{$guru->studi->nama_bidang}}</td>
        <td>{{$guru->pendidikan->pendidikan}}</td>
        <td>{{$guru->status->status}}</td>
        <td>{{$guru->alamat_guru}}</td>
        <td>{{$guru->telepon_guru}}</td>
        <td style="min-width: 105px">
            <a class="" href="/guru/detail/{{$guru->id}}">
                <button type="button" class="btn btn-primary text-white  btn-sm" title="Edit">
                <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </a>
            {{-- <a class="" href="/backend/guru/{{$guru->id}}/delete">
                <button type="button" class="btn btn-danger text-white  btn-sm" title="Delete" onclick="return confirm(
                  'apakah anda yakin mau menghapus file ini ?')">
                  <i class="far fa-trash-alt"></i>
                </button>
            </a> --}}
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection