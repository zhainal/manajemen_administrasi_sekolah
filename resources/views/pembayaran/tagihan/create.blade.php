<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manajemen Administrasi Sekolah</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/adminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/adminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/adminLTE/plugins/summernote/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/adminLTE/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Tambahan -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <h3 class="font-weight-bold">SISTEM MANAJEMEN ADMINISTRASI SEKOLAH</h3>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user mr-2"></i> &nbsp;<span>{{auth()->user()->name}}</span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Profil</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="modal" data-target="#lihatprofile">
                            <i class="fas fa-user mr-2"></i> Lihat Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link bg-secondary">
                <img src="/seo.svg" alt="Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-white">Beranda</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Sidebar Menu -->
                    <a>
                        <span class="text-white">MANAJEMEN SURAT</span>
                    </a>
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Transaksi Surat
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/suratmasuk/index" class="nav-link text-white">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/suratkeluar/index" class="nav-link text-white">
                                    <i class="far fa-envelope-open nav-icon"></i>
                                    <p>Surat Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Buku Agenda
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/suratmasuk/agenda" class="nav-link text-white">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>Agenda Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/suratkeluar/agenda" class="nav-link text-white">
                                    <i class="far fa-envelope-open nav-icon"></i>
                                    <p>Agenda Surat Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Galeri File
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/suratmasuk/galeri" class="nav-link text-white">
                                    <i class="fas fa-sign-in-alt nav-icon"></i>
                                    <p>File Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="/suratkeluar/galeri" class="nav-link text-white">
                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                    <p>File Surat Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/klasifikasi/index" class="nav-link">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Klasifikasi
                            </p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Sidebar Menu -->
                    <a class="text-white">
                        <p>
                            MANAJEMEN KEUANGAN
                            <span class="right badge badge-danger">Not Yet</span>
                        </p>
                    </a>
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding-usd"></i>
                            <p>
                                Pembayaran
                                <i class="right fas fa-angle-left"></i>
                                <span class="right badge badge-warning">Progress</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/pembayaran/tagihan/index" class="nav-link">
                                    <i class="fas fa-money-check-alt nav-icon"></i>
                                    <p>Rincian Tagihan</p>
                                    <span class="right badge badge-primary">New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pembayaran/transaksipembayaran/index" class="nav-link">
                                    <i class="far fa-handshake nav-icon"></i>
                                    <p>Transaksi Pembayaran</p>
                                    <span class="right badge badge-warning">Progress</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-credit-card"></i>
                            <p>
                                Tabungan Siswa
                                <i class="fas fa-angle-left right"></i>
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/tabungan/setor/index" class="nav-link text-white">
                                    <i class="fas fa-credit-card nav-icon"></i>
                                    <p>Setor Tunai</p>
                                    <span class="right badge badge-primary">New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/tabungan/tarik/index" class="nav-link text-white">
                                    <i class="fas fa-credit-card nav-icon"></i>
                                    <p>Tarik Tunai</p>
                                    <span class="right badge badge-primary">New</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Keuangan Sekolah
                                <i class="fas fa-angle-left right"></i>
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/keuangan/pemasukan/index" class="nav-link text-white">
                                    <i class="fas fa-money-bill-alt nav-icon"></i>
                                    <p>Pemasukan</p>
                                    <span class="right badge badge-primary">New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/keuangan/pengeluaran/index" class="nav-link text-white">
                                    <i class="fas fa-money-bill nav-icon"></i>
                                    <p>Pengeluaran</p>
                                    <span class="right badge badge-primary">New</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>
                                Unduhan
                            </p>
                            <span class="right badge badge-danger">Not Yet</span>
                        </a>
                    </li>
                </ul>

                @if (auth()->user()->role == 'admin')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Sidebar Menu -->
                    <a class="text-white">
                        <p>
                            KELOLA DATA
                        </p>
                    </a>
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('instansi.index') }}" class="nav-link">
                            <i class="fas fa-warehouse nav-icon"></i>
                            <p>
                                Sekolah
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-graduation-cap nav-icon"></i>
                            <p>
                                GTK
                                <i class="fas fa-angle-left right"></i>
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item">
                                <a href="/guru/index" class="nav-link text-white">
                                    <i class="fas fa-graduation-cap nav-icon"></i>
                                    <p>Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/tendik/index" class="nav-link text-white">
                                    <i class="fas fa-graduation-cap nav-icon"></i>
                                    <p>Tendik</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/tapel/index" class="nav-link">
                            <i class="fas fa-calendar-alt nav-icon"></i>
                            <p>
                                Tahun Pelajaran
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/rombel/index" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>
                                Rombongan Belajar
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-child nav-icon"></i>
                            <p>
                                Peserta Didik
                                <i class="fas fa-angle-left right"></i>
                                <span class="right badge badge-primary">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-secondary">
                            <li class="nav-item bg-secondary">
                                <a href="/pesdik/index" class="nav-link text-white">
                                    <i class="fas fa-child nav-icon"></i>
                                    <p>Peserta Didik</p>
                                </a>
                            </li>
                            <li class="nav-item bg-secondary">
                                <a href="/pesdik/alumniindex" class="nav-link text-white">
                                    <i class="fas fa-user-graduate nav-icon"></i>
                                    <p>Alumni</p>
                                </a>
                            </li>
                            <li class="nav-item bg-warning">
                                <a href="/pesdik/keluarindex" class="nav-link text-dark">
                                    <i class="fas fa-child nav-icon"></i>
                                    <p>Peserta Didik Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endif
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Sidebar Menu -->
                    <a class="text-white">
                        <p>
                            PENGATURAN
                        </p>
                    </a>
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/pengumuman/index" class="nav-link">
                            <i class="fas fa-bullhorn nav-icon"></i>
                            <p>
                                Pengumuman
                            </p>
                            <span class="right badge badge-primary">New</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pengguna.index') }}" class="nav-link">
                            <i class="fas fa-user-cog nav-icon"></i>
                            <p>
                                Pengguna
                            </p>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-light" style="padding: 15px 15px 15px 15px ">

            <section class="content card" style="padding: 10px 10px 10px 10px ">
                <div class="box">
                    @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('sukses')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <h3><i class="nav-icon fas fa-money-bill-alt my-1 btn-sm-1"></i> Tambah Tagihan Pembayaran</h3>
                    <hr>
                    <section class="content">
                        <span id="result"></span>
                        <div>
                            <div class="col">
                                <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <form method="post" id="dynamic_form">
                                <table class="table table-hover table-head-fixed" id="user_table">
                                    <thead>
                                        <tr>
                                            <th width="18%">Rombel</th>
                                            <th width="12%">Jenis Kelamin</th>
                                            <th width="25%">Rincian</th>
                                            <th width="20%">Nominal</th>
                                            <th width="12%">Batas Pembayaran</th>
                                            <th width="13%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" align="right">&nbsp;</td>
                                            <td colspan="2" align="right">
                                                @csrf
                                                <button type="submit" name="save" id="save" class="btn btn-success btn-sm "><i class="fas fa-save"></i> SIMPAN</button>
                                                <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer bg-secondary">
            <div class="float-right d-none d-sm-block">
                <b>Teknik Informatika Unirow Tuban | </b>
                Version 1.1.0
            </div>
            Copyright &copy; 2020 | by : Qkoh St, Iqbal, Afif
        </footer>


        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/adminLTE/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminLTE/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="/adminLTE/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminLTE/js/adminlte.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="/adminLTE/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- Filterizr-->
    <script src="/adminLTE/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Data Table -->
    <script src="/adminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- overlayScrollbars -->
    <script src="/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/adminLTE/js/demo.js"></script>

    <!-- page script -->
    <script>
        $(function() {
            $("#user_table").DataTable({
                "paging": false,
                "lengthChange": true,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": true,
            });
        });

        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        });

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });


        $(document).ready(function() {

            var count = 1;

            dynamic_field(count);

            function dynamic_field(number) {
                html = '<tr>';
                html += '<td> <select name="rombel_id[]" id="rombel_id[]" class="form-control select2bs4" required><option value="">-- Pilih Rombel --</option>@foreach($data_rombel as $rombel)<option value="{{$rombel->id}}">{{$rombel->nama_rombel}} {{$rombel->tapel->tahun}} {{$rombel->tapel->semester}}</option>@endforeach</select></td>';
                html += '<td><select id="jenis_kelamin[]" name="jenis_kelamin[]"  class="form-control" required><option value="Semua" selected="selected">Semua</option><option value="Laki-Laki">Laki-Laki</option><option value="Perempuan">Perempuan</option></select></td>';
                html += '<td><textarea name="rincian[]" class="form-control bg-light" id="rincian[]" rows="2"placeholder="Rincian Deskripsi Pembayaran">{{old('
                rincian ')}}</textarea></td>';
                html += '<td><div class="input-group"><div class="input-group-prepend"><span class="input-group-text">Rp.</span></div><input value="{{old('
                nominal[]
                ')}}" name="nominal[]" type="text" class="form-control" id="nominal[]" required><div class="input-group-append"><span class="input-group-text">.00</span></div></div></td>';
                html += '<td><input value="{{old('
                batas_bayar[]
                ')}}" name="batas_bayar[]" type="date" class="form-control bg-light" id="batas_bayar[]" required></td>';
                if (number > 1) {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-sm btn-danger remove"><i class="fas fa-trash"></i> Hapus Baris</button></td></tr>';
                    $('tbody').append(html);
                } else {
                    html += '<td><button type="button" name="add" id="add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Baris</button></td></tr>';
                    $('tbody').html(html);
                }
            }

            $(document).on('click', '#add', function() {
                count++;
                dynamic_field(count);
            });

            $(document).on('click', '.remove', function() {
                count--;
                $(this).closest("tr").remove();
            });

            $('#dynamic_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: '{{ route("pembayaran.tagihan.tambah") }}',
                    method: 'post',
                    data: $(this).serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#save').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        if (data.error) {
                            var error_html = '';
                            for (var count = 0; count < data.error.length; count++) {
                                error_html += '<p>' + data.error[count] + '</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                        } else {
                            dynamic_field(1);
                            $('#result').html('<div class="alert alert-success">' + data.success + '</div>');
                        }
                        $('#save').attr('disabled', false);
                    }
                })
            });

        });
    </script>

    <!-- Modal Profile -->
    <div class="modal fade" id="lihatprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><i class="nav-icon fas fa-user my-1 btn-sm-1"></i>
                        &nbsp;Profil Pengguna</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <h5><label for="nama">Nama </label></h5>
                        </div>
                        <div class="col-9">
                            <h5><label for="nama"> : {{auth()->user()->name}}</label></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h5><label for="nama">Email </label></h5>
                        </div>
                        <div class="col-9">
                            <h5><label for="nama"> : {{auth()->user()->email}}</label></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h5><label for="nama">Level User </label></h5>
                        </div>
                        <div class="col-9">
                            <h5><label for="nama"> : {{auth()->user()->role}}</label></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>