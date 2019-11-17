@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
								<img src="/frontend/img/background.jpg" class="background-kecil" alt="">
							</div>
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
                    <li><a style="color:black;font-weight:bolder">Nama <span style="color: #777;font-weight:normal">{{$guru->nama_guru}}</span></a></li>
                    <li><a style="color:black;font-weight:bolder">Jenis Kelamin<span style="color: #777;font-weight:normal">{{$guru->kelamin->kelamin}}</span></a></li>
        						<li><a style="color:black;font-weight:bolder">Bidang Studi<span style="color: #777;font-weight:normal">{{$guru->studi->nama_bidang}}</span></a></li>
                    <li><a style="color:black;font-weight:bolder">Pendidikan<span style="color: #777;font-weight:normal">{{$guru->pendidikan->pendidikan}}</span></a></li>
                    <li><a style="color:black;font-weight:bolder">Status<span style="color: #777;font-weight:normal">{{$guru->status->status}}</span></a></li>
                    <li><a style="color:black;font-weight:bolder">Telepon<span style="color: #777;font-weight:normal">{{$guru->telepon_guru}}</span></a></li>
                    <li><a class="alamat-guru" style="color:black;font-weight:bolder">Alamat<span style="color: #777;font-weight:normal" class="alamatguru">{{$guru->alamat_guru}}</span></a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
</div>
@endsection