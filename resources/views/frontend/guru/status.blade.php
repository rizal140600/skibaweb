@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title"">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Status Guru</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Status Guru</h3>
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
                    @foreach ($data_status as $index => $status)
                    <tr>
                      <th scope="row">{{$index +1}}</th>
                      <td>{{$status->status}}</td>
                      @if ($index == 0)
                      <td>{{$pns_kemendikbud}}</td>
                      @elseif($index == 1)
                      <td>{{$pns_kemenag}}</td>
                      @elseif($index == 2)
                      <td>{{$honorer}}</td>
                      @elseif($index == 3)
                      <td>{{$tetap}}</td>
                      @elseif($index == 4)
                      <td>{{$tidak_tetap}}</td>
                      @elseif($index == 5)
                      <td>{{$pns_swasta}}</td>
                      @elseif($index == 6)
                      <td>{{$pemda}}</td>
                      @elseif($index == 7)
                      <td>{{$sm3t}}</td>
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