@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Sarana Prasarana</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Sarana Prasarana</h3>
    <div class="card-body table-responsive p-0">
                <table class="table table-hover mb-5">
                  <thead>
                    <tr>
                      <th scope="col">NO.</th>
                      <th scope="col" style="min-width: 150px">Ruang Area</th>
                      <th scope="col" style="min-width: 125px">Jumlah Ruang</th>
                      <th scope="col">Luas (m<sup style="color: #777777">2</sup>)</th>
                      <th scope="col" style="min-width: 100px">Total Luas(m<sup style="color: #777777">2</sup>)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_sarana as $index => $sarana)
                    <tr>
                      <th scope="row">{{$data_sarana->firstItem() + $index}}</th>
                      <td>{{$sarana->ruang_area}}</td>
                      <td>{{$sarana->jumlah_ruang}}</td>
                      <td>{{$sarana->luas}}</td>
                      <td>{{number_format($sarana->jumlah_ruang * $sarana->luas)}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="container ml-3">
                  {{$data_sarana->links()}}
                </div>
              </div>
  </div>
  </div>
</div>
@endsection