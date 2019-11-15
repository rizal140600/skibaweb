@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
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
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">Ruang Area</th>
        <th scope="col">Jumlah Ruang</th>
        <th scope="col">Luas</th>
        <th scope="col">Total Luas</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_sarana as $index => $sarana)
      <tr>
        <th scope="row">{{$index +1}}</th>
        <td>{{$sarana->ruang_area}}</td>
        <td>{{$sarana->jumlah_ruang}}</td>
        <td>{{$sarana->luas}}</td>
        <td>{{$sarana->total_luas}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection