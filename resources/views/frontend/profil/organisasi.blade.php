@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Struktur Organisasi</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div style="background-color: #f9f9ff">
            <div class="container" >
                <img src="{{ asset("/storage/" . $organisasi->first()->struktur_organisasi) }}" alt="" class="w-100 mt-5 mb-5">
            </div>
        </div>
@endsection