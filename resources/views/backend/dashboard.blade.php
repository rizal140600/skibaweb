@extends('backend.layout.master')

@section('title', 'Dashboard')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Blank Page</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_pembelajaran}}</h3>

                <p>Pembelajaran</p>
              </div>
              <div class="icon">
                <i class="fas fa-copy"></i>
              </div>
              <a href="/backend/pembelajaran" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_pengumuman}}</h3>

                <p>Pengumuman</p>
              </div>
              <div class="icon">
                <i class="nav-icon far fa-bookmark"></i>
              </div>
              <a href="/backend/pengumuman" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="color: white!important">
              <div class="inner">
                <h3>{{$jumlah_kegiatan}}</h3>

                <p>Kegiatan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-chart-line"></i>
              </div>
              <a href="/backend/kegiatan" style="color: white!important" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$jumlah_galeri}}</h3>

                <p>Gambar</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-images"></i>
              </div>
              <a href="/backend/galeri" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_saran}}</h3>

                <p>Kritik dan Saran</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-address-book"></i>
              </div>
              <a href="/backend/saran" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_studi}}</h3>

                <p>Bidang Studi</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-graduation-cap"></i>
              </div>
              <a href="/backend/studi" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="color: white!important">
              <div class="inner">
                <h3>{{$jumlah_guru}}</h3>

                <p>Guru</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
              </div>
              <a href="/backend/guru" style="color: white!important" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$jumlah_jurusan}}</h3>

                <p>Jurusan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-code-branch"></i>
              </div>
              <a href="/backend/jurusan" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Statistik Pembelajaran</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="pembelajaran" style="height:250px; min-height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Statistik Pengumuman</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="pengumuman" style="height:250px; min-height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col (LEFT) -->
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
@endsection
@section('script')
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
    <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#pembelajaran').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [
        {
          label               : 'Pembuatan',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
                                  {{$pembelajaran_c1}}, 
                                  {{$pembelajaran_c2}}, 
                                  {{$pembelajaran_c3}}, 
                                  {{$pembelajaran_c4}}, 
                                  {{$pembelajaran_c5}}, 
                                  {{$pembelajaran_c6}}, 
                                  {{$pembelajaran_c7}}, 
                                  {{$pembelajaran_c8}}, 
                                  {{$pembelajaran_c9}}, 
                                  {{$pembelajaran_c10}}, 
                                  {{$pembelajaran_c11}}, 
                                  {{$pembelajaran_c12}}, 
                                ]
        },
        {
          label               : 'Pembaruan',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : true,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
                                  {{$pembelajaran_u1}}, 
                                  {{$pembelajaran_u2}}, 
                                  {{$pembelajaran_u3}}, 
                                  {{$pembelajaran_u4}}, 
                                  {{$pembelajaran_u5}}, 
                                  {{$pembelajaran_u6}}, 
                                  {{$pembelajaran_u7}}, 
                                  {{$pembelajaran_u8}}, 
                                  {{$pembelajaran_u9}}, 
                                  {{$pembelajaran_u10}}, 
                                  {{$pembelajaran_u11}}, 
                                  {{$pembelajaran_u12}}, 
                                ]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })
  })
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#pengumuman').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [
        {
          label               : 'Pembuatan',
          backgroundColor     : 'rgba(0,189,35,0.9)',
          borderColor         : 'rgba(0,189,35,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(0,189,35,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(0,189,35,1)',
          data                : [
                                  {{$pengumuman_c1}}, 
                                  {{$pengumuman_c2}}, 
                                  {{$pengumuman_c3}}, 
                                  {{$pengumuman_c4}}, 
                                  {{$pengumuman_c5}}, 
                                  {{$pengumuman_c6}}, 
                                  {{$pengumuman_c7}}, 
                                  {{$pengumuman_c8}}, 
                                  {{$pengumuman_c9}}, 
                                  {{$pengumuman_c10}}, 
                                  {{$pengumuman_c11}}, 
                                  {{$pengumuman_c12}}, 
                                ]
        },
        {
          label               : 'Pembaruan',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : true,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
                                  {{$pengumuman_u1}}, 
                                  {{$pengumuman_u2}}, 
                                  {{$pengumuman_u3}}, 
                                  {{$pengumuman_u4}}, 
                                  {{$pengumuman_u5}}, 
                                  {{$pengumuman_u6}}, 
                                  {{$pengumuman_u7}}, 
                                  {{$pengumuman_u8}}, 
                                  {{$pengumuman_u9}}, 
                                  {{$pengumuman_u10}}, 
                                  {{$pengumuman_u11}}, 
                                  {{$pengumuman_u12}}, 
                                ]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })
  })
</script>
@endsection