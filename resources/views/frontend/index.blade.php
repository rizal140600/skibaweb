@extends('frontend.layout.master')
@section('content')
<!--================Home Banner Area =================-->
        <section class="home_banner_area">
					<div onclick="playPause()" class="banner_inner d-flex align-items-center">
							<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
							<div class="position-absolute mid-center text-white" id="buttonPlay">
								<i class="fa fa-play-circle fa-5x"></i>
							</div>
								<video id="videoSMK"  class="video-js" controls preload="auto"  width="100%" height="100%" data-setup="{}">
                    <source src="/frontend/video/VideoProfileSMKN1BadeganPonorogo.mp4" type='video/mp4'>
                </video>
                {{-- <iframe src="/frontend/video/VideoProfileSMKN1BadeganPonorogo.mp4" width="100%" height="100%" frameborder="0" allowfullscreen allow="autoplay; encrypted-media"></iframe> --}}
              </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
				<!--================Finance Area =================-->
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30 title_color">Sambutan Kepala Sekolah</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset("/storage/" . $kepala_sekolah->first()->kepala_gambar) }}" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p" style="font-family: -apple-system, BlinkMacSystemFont, 'Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important">
								{!!$kepala_sekolah->first()->kepala_sambutan!!}
							</div>
						</div>
					</div>
				</div>
				<section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="/frontend/img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>Astronomy Binoculars A Great Alternative</h2></a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="/frontend/img/blog/main-blog/m-blog-2.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>The Basics Of Buying A Telescope</h2></a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="/frontend/img/blog/main-blog/m-blog-3.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>The Glossary Of Telescopes</h2></a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="/frontend/img/blog/main-blog/m-blog-4.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>The Night Sky</h2></a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="/frontend/img/blog/main-blog/m-blog-5.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>Telescopes 101</h2></a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Kegiatan</h3>
                                @foreach ($data_kegiatan as $kegiatan)
                                <div class="media post_item">
                                    <img style="max-width:100px" src="{{ asset("/storage/" . $kegiatan->kegiatan_foto) }}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>{{$kegiatan->kegiatan_judul}}</h3></a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Pengumuman</h4>
                                <ul class="list cat-list">
                                    @foreach ($data_pengumuman as $pengumuman)
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>{{$pengumuman->judul_pengumuman}}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="br"></div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
@endsection
