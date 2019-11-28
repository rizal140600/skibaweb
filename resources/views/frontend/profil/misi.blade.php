@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Visi Misi Sekolah</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div style="background-color: #f9f9ff">
            <div class="container" >
                <div class="section-top-border">
						<h3 class="mb-30 title_color">Visi</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									{!!$visi_misi->visi!!} 
								</blockquote>
							</div>
            </div>
            <hr>
            <h3 class="mb-30 title_color mt-5">Misi</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									{!!$visi_misi->misi!!} 
								</blockquote>
							</div>
						</div>
          </div>
            </div>
        </div>
@endsection