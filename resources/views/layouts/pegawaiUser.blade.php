<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">

    <title>@yield('title')</title>

    <link href="path/to/select2.min.css" rel="stylesheet"/>
    <script src="path/to/select2.min.js"></script>

    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{URL::asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}"
          rel="stylesheet"/>
    <!-- Datatables -->
    <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{URL::asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/pegawai/halamanUtama" class="site_title"> <img src="{{ asset('images/logo-pku.png') }}"
                                                                             alt="" style="width:30px; height:30px">
                        <span>HEMODIALISIS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ asset('images/admin-icon.png') }}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Perawat</span>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu</h3>
                        <ul class="nav side-menu">

                            <li><a href="/pegawai/halamanUtama"><i class="fa fa-dashboard"></i>
                                    Halaman Utama
                                </a>
                            </li>

                            <li><a href="/pegawai/dataPasien"><i class="fa fa-user"></i>
                                    Data Pasien
                                </a>
                            </li>

                            <li><a><i class="fa fa-calendar"></i>
                                    Jadwal
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                    <!-- <li><a href="/admin/jadwalAdmin">Admin</a></li> -->
                                    <li><a href="/pegawai/jadwalDokter">Dokter</a></li>
                                    <li><a href="/pegawai/jadwalPasien">Pasien</a></li>
                                    <li><a href="{{ route('pegawai.jadwalPasienHarian.index') }}">Pasien Harian</a></li>
                                    <li><a href="/pegawai/jadwalPerawat">Perawat</a></li>
                                </ul>
                            </li>

                            <li><a href="/pegawai/dataPerkembanganPasien"><i class="fa fa-edit"></i>
                                    Kondisi Pasien Bulanan
                                </a>
                            </li>

                            <li><a href="/pegawai/dataPerpindahJadwal"><i class="fa fa-calendar"></i>
                                    Perpindahan Jadwal
                                </a>
                            </li>

                            <li><a href="/pegawai/dataPasienMeninggal"><i class="fa fa-user"></i>
                                    Data Pasien Meninggal
                                </a>
                            </li>

                            <li><a href="/pegawai/dataPasienTraveling"><i class="fa fa-user"></i>
                                    Data Pasien Traveling
                                </a>
                            </li>

                            <li><a href="/pegawai/dataPasienRawatinap"><i class="fa fa-user"></i>
                                    Data Pasien Rawat Inap
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="">
                          <a href="login.html"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </li> -->
                        <li class="">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                {{ __('Keluar') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                @yield('chart')
                @yield('content')
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{URL::asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- ECharts -->
<script src="{{URL::asset('vendors/echarts/dist/echarts.min.js')}}"></script>
<script src="{{URL::asset('vendors/echarts/map/js/world.js')}}"></script>
<!-- validator -->
<script src="{{URL::asset('vendors/validator/validator.js')}}"></script>
<!-- Select2 -->
<script src="{{URL::asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- jQuery custom content scroller -->
<script src="{{URL::asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- jQuery Smart Wizard -->
<script src="{{URL::asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<!-- Datatables -->
<script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{URL::asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{URL::asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{URL::asset('build/js/custom.min.js')}}"></script>
</body>
</html>
