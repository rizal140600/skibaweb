@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
			<img src="/frontend/img/background.jpg" class="background-kecil" title"">
		</div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>Jurusan</h2>
				<div class="page_link">
					<a>SMKN 1 BADEGAN</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="courses_area p_120 pt-0">
	<div class="container">
		<div class="main_title">
	</div>
	<div class="row courses_inner">
		<div class="col-lg-12">
			<div class="grid_inner roww">
				@foreach ($data_jurusan as $jurusan)
				<div class="kolom grid_item">
					<div class="courses_item">
						<img title="{{$jurusan->jurusan_judul}}" src="{{ asset("/storage/jurusan/" . $jurusan->jurusan_gambar) }}" style="width:100%">
							<div class="hover_text">
							<a class="cat" href="/jurusan">JURUSAN</a>
							<a href="/jurusan/{{$jurusan->id}}"><h4>{{$jurusan->jurusan_judul}}</h4></a>
							{{-- <ul class="list">
							<li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
							<li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
							<li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
							</ul> --}}
								</div>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection