@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Bidang Studi</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Bidang Studi</h3>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">Nama Bidang</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_studi as $index => $studi)
      <tr>
        <th scope="row">{{$index +1}}</th>
        <td>{{$studi->nama_bidang}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection