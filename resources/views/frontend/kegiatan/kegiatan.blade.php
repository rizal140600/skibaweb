@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
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
                            <div class="col-lg-8 pt-5" style="background-color: #f9f9ff">
                                <div class="blog_left_sidebar">
                                    @foreach ($data_kegiatan as $kegiatan)
                                    <article class="row blog_item">
                                        <div class="col-md-12">
                                            <div class="blog_post">
                                                <img title="{{$kegiatan->kegiatan_judul}}" src="{{ asset("/storage/kegiatan/" . $kegiatan->kegiatan_foto) }}" title="">
                                                <div class="blog_details">
                                                    <a href="/kegiatan/detail/{{$kegiatan->id}}"><h2>{{$kegiatan->kegiatan_judul}}</h2></a>
                                                    <p>{!! str_limit(strip_tags($kegiatan->kegiatan_isi), $limit = 250, $end = '...') !!}</p>
                                                <a href="/kegiatan/detail/{{$kegiatan->id}}" class="text-white white_bg_btn" style="background-color: #ff7209">Lihat Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article> 
                                    <hr class="pb-5">  
                                    @endforeach
                                        <div class="container ml-3">
                                            {{$data_kegiatan->links()}}
                                        </div>
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
                                                    <a href="/pengumuman/detail/{{$pengumuman->id}}" class="d-flex justify-content-between">
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
@endsection