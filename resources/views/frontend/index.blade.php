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
        
		<div style="background-color: #f9f9ff">
            <div class="container" >
                <div class="section-top-border">
                    <h3 class="mb-30 title_color">Sambutan Kepala Sekolah</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset("/storage/" . $kepala_sekolah->first()->kepala_gambar) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9 mt-sm-20 left-align-p">
                            <p>
                                {!!$kepala_sekolah->first()->kepala_sambutan!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
				<section class="blog_area pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 pt-5" style="background-color: #f9f9ff">
                                <div class="blog_left_sidebar">
                                    <?php $count = 0; ?>
                                    @foreach ($data_kegiatan as $kegiatan)
                                    <?php if($count == 3) break; ?>
                                    <article class="row blog_item">
                                        <div class="col-md-12">
                                            <div class="blog_post">
                                                <img src="{{ asset("/storage/" . $kegiatan->kegiatan_foto) }}" alt="">
                                                <div class="blog_details">
                                                    <a href="single-blog.html"><h2>{{$kegiatan->kegiatan_judul}}</h2></a>
                                                    <p>{!!$kegiatan->kegiatan_isi!!}</p>
                                                    <a href="single-blog.html" class="text-white white_bg_btn" style="background-color: #ff7209">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article> 
                                    <hr class="pb-5">  
                                    <?php $count++; ?>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog_right_sidebar">
                                    <aside class="single_sidebar_widget popular_post_widget">
                                        <h3 class="widget_title">Pembelajaran</h3>
                                        <?php $count = 0; ?>
                                        @foreach ($data_pembelajaran as $pembelajaran)
                                        <?php if($count == 5) break; ?>
                                        <div class="media post_item">
                                            <div class="media-body">
                                                <a href="{{$pembelajaran->link}}"><h3>{{$pembelajaran->nama_file}}</h3></a>
                                            </div>
                                        </div>
                                        <?php $count++; ?>
                                        @endforeach
                                        <div class="br"></div>
                                    </aside>
                                    <aside class="single_sidebar_widget post_category_widget">
                                        <h4 class="widget_title">Pengumuman</h4>
                                        <ul class="list cat-list">
                                            <?php $count = 0; ?>
                                            @foreach ($data_pengumuman as $pengumuman)
                                            <?php if($count == 5) break; ?>
                                                <li>
                                                    <a href="#" class="d-flex justify-content-between">
                                                        <p>{{$pengumuman->judul_pengumuman}}</p>
                                                    </a>
                                                </li>
                                            <?php $count++; ?>
                                            @endforeach
                                        </ul>
                                        <div class="br"></div>
                                    </aside>
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
                                <?php $count = 0; ?>
                                @foreach ($data_galeri as $galeri)
                                <?php if($count == 6) break; ?>
                                <div class="">
                                    <a href="{{ asset("/storage/" . $galeri->gambar) }}">
                                        <div class="hovereffect">
                                            <img class="single-gallery-image" src="{{ asset("/storage/" . $galeri->gambar) }}" alt="">
                                            <div class="overlay">
                                                <h2>{{$galeri->judul_gambar}}</h2>
                                                <p>
                                                    {{$galeri->kategori->kategori}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                    <?php $count++; ?>
                                @endforeach
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="pt-5">
                    <div class="container" style="min-height: 250px">
                        <div class="main_title">
        			<h2>Tenaga Pendidikan</h2>
        			<p>SMK Negeri 1 Badegan</p>
        		</div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($data_guru as $key => $guru)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <div class="row team_inner container">
                                    <div class="item w-100">
                                    <div class="testi_item w-100 text-center ">
                                        <img style="max-width: 250px" src="{{ asset("/storage/" . $guru->gambar_guru) }}" alt="">
                                        <h4>{{$guru->nama_guru}}</h4>
                                        <p>{{$guru->studi->nama_bidang}}</p>
                                        <span>{{$guru->pendidikan->pendidikan}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
@endsection
