@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Identitas Sekolah</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Identitas Sekolah</h3>
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td>Nama Sekolah</td>
                      <td>:</td>
                      <td>{{$identitas->nama_sekolah}}</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>:</td>
                      <td>{{$identitas->status}}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td>{{$identitas->alamat}}</td>
                    </tr>
                    <tr>
                      <td>Telepon/Fax</td>
                      <td>:</td>
                      <td>{{$identitas->telepon_fax}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{$identitas->website_email}}</td>
                    </tr>
                    <tr>
                      <td>Kepala Sekolah</td>
                      <td>:</td>
                      <td>{{$identitas->kepala_sekolah}}</td>
                    </tr>
                    <tr>
                      <td>Nomer Sekolah</td>
                      <td>:</td>
                      <td>{{$identitas->nomer_sekolah}}</td>
                    </tr>
                    <tr>
                      <td>NPSN</td>
                      <td>:</td>
                      <td>{{$identitas->npsn}}</td>
                    </tr>
                    <tr>
                      <td>Nomer SK Pendirian</td>
                      <td>:</td>
                      <td>{{$identitas->no_sk_pendirian}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal SK Pendirian</td>
                      <td>:</td>
                      <td>{{$identitas->tgl_sk_pendirian}}</td>
                    </tr>
                    <tr>
                      <td>Nomer Penyelenggaraan</td>
                      <td>:</td>
                      <td>{{$identitas->no_penyelenggaraan}}</td>
                    </tr>
                    <tr>
                      <td>Penyelenggara</td>
                      <td>:</td>
                      <td>{{$identitas->penyelenggara}}</td>
                    </tr>
                    <tr>
                      <td>Akreditasi</td>
                      <td>:</td>
                      <td>{{$identitas->akreditasi}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
  </div>
</div>
@endsection