@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
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
        <section class="blog_area pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 pt-5" style="background-color: #f9f9ff">
                                <div class="blog_left_sidebar">
                                    <article class="row blog_item">
                                        <div class="col-md-12">
                                            <div class="blog_post">
                                                <img title="{{$jurusan->jurusan_judul}}" src="{{ asset("/storage/jurusan/" . $jurusan->jurusan_gambar) }}" class="img-fluid mx-auto d-block" title="">
                                                <div class="blog_details">
                                                    <h1 style="color: black;" class="text-center mb-5">{{$jurusan->jurusan_judul}}</h1>
                                                    <p>{!!$jurusan->jurusan_isi!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article> 
                                    <hr class="pb-5">  
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
@endsection