@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Pengumuman</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
{{-- <div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Pengumuman</h3>
    <div class="card-body table-responsive p-0">
            <table class="table table-hover mb-5">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data_pengumuman as $index => $pengumuman)
                <tr>
                    <td>{{ $data_pengumuman->firstItem() + $index}}</td>
                    <td>{{$pengumuman->judul_pengumuman}}</td>
                    <td>{!! str_limit(strip_tags($pengumuman->isi_pengumuman), $limit = 150, $end = '...') !!}</td>
                    <td style="min-width: 105px">
                        <a class="" href="/pengumuman/detail/{{$pengumuman->id}}">
                          <button title="Lihat" type="button" class="btn btn-primary text-white  btn-sm" >
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          </button>
                        </a>
                    </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            
            </div>
  </div>
</div> --}}
<section class="blog_area pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 pt-4" style="background-color: #f9f9ff">
                                <div class="blog_left_sidebar">
                                  <div id="accordion">
                                    @foreach ($data_pengumuman as $pengumuman)
                                    <div class="card">
                                      <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                          <a class="d-inline-block h4 collapse-link" href="/pengumuman/detail/{{$pengumuman->id}}">
                                            {{$pengumuman->judul_pengumuman}}
                                          </a>
                                          <hr class="p-0 m-0">
                                          <p class="d-inline-block mt-2"><i class="far fa-calendar-alt mr-2"></i>{{ \Carbon\Carbon::parse($pengumuman->updated_at)->format('d M Y')}}</p>
                                          <button class="btn float-right btn-link" data-toggle="collapse" data-target="#pengumuman{{$pengumuman->id}}" aria-expanded="true" aria-controls="pengumuman{{$pengumuman->id}}">
                                              <i class="fas fa-1x mt-0 fa-sort-down"></i>
                                          </button>
                                        </h5>
                                      </div>

                                      <div id="pengumuman{{$pengumuman->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                          {!!$pengumuman->isi_pengumuman!!}
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                  </div>
                                </div>
                                <div class="container ml-3 mt-5">
                                  {{$data_pengumuman->links()}}
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
                                        <h4 class="widget_title">Galeri</h4>
                                        <div class="row courses_inner">
                                        <div class="col-lg-12">
                                          <div class="grid_inner roww">
                                            <?php $count = 0; ?>
                                            @foreach ($data_galeri as $galeri)
                                            <?php if($count == 10) break; ?>
                                            <div class="kolom grid_item p-0">
                                              <div class="courses_item">
                                                  <a href="{{ asset("/storage/galeri/" . $galeri->gambar) }}">
                                                  <img title="{{$galeri->judul_gambar}}" src="{{ asset("/storage/galeri/" . $galeri->gambar) }}" style="width:100%">
                                                </a>
                                                    </div>
                                                  </div>
                                                <?php $count++; ?>
                                              @endforeach
                                              </div>
                                            </div>
                                          </div>
                                        <div class="br"></div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
@endsection