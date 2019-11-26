<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/admin/img/skiba.png" rel="shortcut icon">
  <title>SKIBA | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/css/adminlte.min.css">
  <link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="/admin/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">
  <!-- Theme style -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/admin/year/yearpicker.css">



</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/logout">
          Logout
        </a>
      </li>
    </ul>
    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/index3.html" class="brand-link">
      <img src="/admin/img/skiba.png"
          alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">SKIBA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/img/avatarr.png" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
        <a class="d-block " style="color: #ffa41c">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/pembelajaran" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pembelajaran
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/backend/profil/kepala" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kepala Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/profil/tentang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tentang Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/profil/misi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/profil/identitas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitas Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/profil/struktur" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/profil/sarana" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sarana Prasarana</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/backend/pengumuman" class="nav-link">
              <i class="nav-icon far fa-bookmark"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/kegiatan" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/galeri" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/saran" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Kritik Dan Saran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/studi" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Bidang Studi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/guru" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Guru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/jurusan" class="nav-link">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          @if (auth()->user()->role->role_user == 'admin')
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="far fa-user nav-icon" aria-hidden="true"></i>
              <p>
                User
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2019 <a href="">SMKN 1 BADEGAN</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/js/demo.js"></script>
<!-- jQuery -->
<script src="/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/admin/plugins/toastr/toastr.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/lates
t/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
@yield('script')
<script>
  $(function() { 
    $('#range-waktu').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 1,
            timePickerSeconds: true,
            locale: {
                format: 'HH:mm:ss'
            }
        }).on('show.daterangepicker', function (ev, picker) {
            picker.container.find(".calendar-table").hide();
        });
    $('#tahun').datepicker( {
    yearRange: "c-100:c",
    changeMonth: false,
    changeYear: true,
    showButtonPanel: true,
    closeText:'Select',
    currentText: 'This year',
    onClose: function(dateText, inst) {
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).val($.datepicker.formatDate('yy', new Date(year, 1, 1)));
    }
  }).focus(function () {
    $(".ui-datepicker-month").hide();
    $(".ui-datepicker-calendar").hide();
    $(".ui-datepicker-current").hide();
    $(".ui-datepicker-prev").hide();
    $(".ui-datepicker-next").hide();
    $("#ui-datepicker-div").position({
      my: "left top",
      at: "left bottom",
      of: $(this)
    });
  }).attr("readonly", false);
  });
  
$(function() {
  $('input[name="tgl_sk_pendirian"]').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY',
    },
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
  });
});
</script>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

</body>
</html>
