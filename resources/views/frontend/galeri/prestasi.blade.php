@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title"">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Galeri Prestasi</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div style="background-color: #f9f9ff">
                    <div class="container">
                        <div class="section-top-border">
                            <h3 class="title_color">Galeri</h3>
                            <div class="row gallery-item">
                                @foreach ($prestasi_galeri as $galeri)
                                <div class="">
                                    <a href="{{ asset("/storage/galeri/" . $galeri->gambar) }}">
                                        <div class="hovereffect">
                                            <img title="{{$galeri->judul_gambar}}" class="single-gallery-image px-2 galeri" src="{{ asset("/storage/galeri/" . $galeri->gambar) }}" title"">
                                            <div class="overlay">
                                                <h2 style="font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{$galeri->judul_gambar}}</h2>
                                                <p>
                                                    {{$galeri->kategori->kategori}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div> 
                    </div> 
                </div>
@endsection