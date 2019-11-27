@extends('frontend.layout.master')
@section('content')
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
              <img src="/frontend/img/background.jpg" class="background-kecil" title"">
              </div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Pembelajaran</h2>
						<div class="page_link">
							<a>SMKN 1 BADEGAN</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
  <div class="section-top-border">
    <h3 class="mb-30 title_color">Tabel Pembelajaran</h3>
  <div class="card-body table-responsive p-0">
                <table class="table table-hover mb-5">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th style="min-width: 250px">Nama File</th>
                      <th style="min-width: 250px">Guru</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_pembelajaran as $index => $pembelajaran)
                    <tr>
                      <td>{{ $data_pembelajaran->firstItem() + $index }}</td>
                      <td>{{$pembelajaran->nama_file}}</td>
                      <td>{{$pembelajaran->guru->nama_guru}}</td>
                      <td style="min-width: 105px">
                          <a href="{{$pembelajaran->link}}" class="genric-btn info circle arrow small">Kunjungi</a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="container ml-3">
                  {{$data_pembelajaran->links()}}
                </div>
              </div>
  </div>
</div>
@endsection