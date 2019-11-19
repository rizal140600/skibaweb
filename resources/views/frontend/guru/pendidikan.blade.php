@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" alt="">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Pendidikan Guru</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Pendidikan Guru</h3>
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">NO.</th>
                      <th scope="col">Status</th>
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pendidikan as $index => $pendidikan)
                    <tr>
                      <th scope="row">{{$index +1}}</th>
                      <td>{{$pendidikan->pendidikan}}</td>
                      @if ($index == 0)
                      <td>{{$s1}}</td>
                      @elseif($index == 1)
                      <td>{{$s2}}</td>
                      @elseif($index == 2)
                      <td>{{$s3}}</td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
      </div>
  </div>
</div>
@endsection