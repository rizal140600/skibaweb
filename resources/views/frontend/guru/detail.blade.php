@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Profil Guru</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-4">
        				<div class="c_details_img">
        					<img class="img-fluid w-100" src="{{ asset('/storage/' . $guru->gambar_guru) }}" alt="">
        				</div>
        			</div>
        			<div class="col-lg-8">
        				<div class="c_details_list">
        					<ul class="list">
                    <li><a >Nama <span style="color: #777">{{$guru->nama_guru}}</span></a></li>
                    <li><a >Jenis Kelamin<span>{{$guru->kelamin->kelamin}}</span></a></li>
        						<li><a >Bidang Studi<span>{{$guru->studi->nama_bidang}}</span></a></li>
                    <li><a >Pendidikan<span>{{$guru->pendidikan->pendidikan}}</span></a></li>
                    <li><a >Status<span>{{$guru->status->status}}</span></a></li>
                    <li><a >Alamat<span>{{$guru->alamat_guru}}</span></a></li>
                    <li><a >Telepon<span>{{$guru->telepon_guru}}</span></a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
</div>
@endsection