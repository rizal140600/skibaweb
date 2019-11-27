@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
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
  <div class="card-body table-responsive p-0">
                <table class="table table-hover mb-5">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Kelamin</th>
                      <th style="min-width: 150px">Bidang Studi</th>
                      <th>Pendidikan</th>
                      <th>Status</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_guru as $index => $guru)
                    <tr>
                      <td>{{ $data_guru->firstItem() + $index }}</td>
                      <th>
                        <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#kegiatan{{$guru->id}}">
                          <img alt="{{$guru->nama_guru}}" style="max-width: 100px" class="img-fluid" src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="kegiatan{{$guru->id}}" tabindex="-1" role="dialog" aria-labelledby="kegiatan{{$guru->id}}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <img alt="{{$guru->nama_guru}}" class="img-fluid" src="{{ asset('/storage/' . $guru->gambar_guru) }}" />
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </th>
                      <td style="min-width: 250px">{{$guru->nama_guru}}</td>
                      <td>{{$guru->kelamin->kelamin}}</td>
                      <td>{{$guru->studi->nama_bidang}}</td>
                      <td>{{$guru->pendidikan->pendidikan}}</td>
                      <td style="min-width: 250px">{{$guru->status->status}}</td>
                      <td style="min-width: 300px">{{$guru->alamat_guru}}</td>
                      <td>{{$guru->telepon_guru}}</td>
                      <td style="min-width: 105px">
                          <a class="" href="/guru/detail/{{$guru->id}}">
                <button type="button" class="btn btn-primary text-white  btn-sm" title="Edit">
                <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="container ml-3">
                  {{$data_guru->links()}}
                </div>
              </div>
  </div>
</div>
@endsection