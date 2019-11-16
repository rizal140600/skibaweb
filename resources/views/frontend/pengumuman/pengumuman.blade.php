@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Pengumuman</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Pengumuman</h3>
    <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_pengumuman as $index => $pengumuman)
                <tr>
                    <td>{{ $index +1}}</td>
                    <td>{{$pengumuman->judul_pengumuman}}</td>
                    <td>{!! str_limit(strip_tags($pengumuman->isi_pengumuman), $limit = 150, $end = '...') !!}</td>
                    <td style="min-width: 105px">
                        <a class="" href="/pengumuman/detail/{{$pengumuman->id}}">
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
            </div>
  </div>
</div>
@endsection