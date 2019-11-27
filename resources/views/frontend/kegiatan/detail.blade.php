@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title"">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Kegiatan</h2>
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
                                                <img title"{{$kegiatan->kegiatan_judul}}" src="{{ asset("/storage/kegiatan/" . $kegiatan->kegiatan_foto) }}" class="img-fluid mx-auto d-block" title"">
                                                <div class="blog_details">
                                                    <h1 style="color: black;" class="text-center mb-5">{{$kegiatan->kegiatan_judul}}</h1>
                                                    <p>{!!$kegiatan->kegiatan_isi!!}</p>
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