@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Detail Pengumuman</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <section class="about_area p_120">
        	<div class="container">
        		<div class="main_title">
              <h2>{{$data_pengumuman->judul_pengumuman}}</h2>
        		</div>
        		<div class="about_details">
        			<p>{!!$data_pengumuman->isi_pengumuman!!}</p>
        		</div>
        	</div>
        </section>
</div>
@endsection