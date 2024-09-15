<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Sistem Informasi Penjaminan Mutu</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/bmti.png">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">

     <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script> -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- maps -->
    <link href="<?= base_url(); ?>assets/dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css">
    <!-- end of maps -->

    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   

    <!-- sweetalert 2 -->
    <script src="<?= base_url() ?>assets/plugins/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <link href="<?= base_url() ?>assets/plugins/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet"
        type="text/css">

        <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    

</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                    <!--Annex-->
                    <!--</a>-->
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" height="22" class="logo-small">
                        <img src="<?= base_url() ?>assets/images/logo-mutu.png" alt="" width="600" height="80" class="logo-large">
                        <!--  -->
                    </a>
                </div>

                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-inline float-right mb-0">


                        
                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <!-- a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a -->
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="<?= site_url('Home/index') ?>"><i class="mdi mdi-airplay"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="<?= site_url('Rp_all/index') ?>"><i class="mdi mdi-file-find"></i>Cari Data</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="mdi mdi-layers"></i>Rapor Pendidikan</a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Provinsi Jawa Barat</a>
                                    <ul class="submenu">
                                        <li><a href="<?= site_url('Rp2023_jabar/index') ?>">Tahun 2023</a></li>
                                        <li><a href="<?= site_url('Rp2024_jabar/index') ?>">Tahun 2024</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Provinsi Lampung</a>
                                    <ul class="submenu">
                                        <li><a href="<?= site_url('Rp2023_lampung/index') ?>">Tahun 2023</a></li>
                                        <li><a href="<?= site_url('Rp2024_lampung/index') ?>">Tahun 2024</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Provinsi Bengkulu</a>
                                    <ul class="submenu">
                                        <li><a href="<?= site_url('Rp2023_bengkulu/index') ?>">Tahun 2023</a></li>
                                        <li><a href="<?= site_url('Rp2024_bengkulu/index') ?>">Tahun 2024</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a ><i class=""></i></a>
                        </li>

                        <!-- <li class="has-submenu">
                            <a href="<?= site_url('mahasiswa/index') ?>"><i class="fa fa-users"></i>Mahasiswa</a>
                        </li> -->


                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <!-- <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div> -->
                        <h4 class="page-title">{judul}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                {isi}
            </div>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    Sistem Informasi Penjaminan Mutu BBPPMPV Bidang Mesin dan Teknik Industri
                    <p>Develop by Data & Information Unit</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->

    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/modernizr.min.js"></script>
    <script src="<?= base_url() ?>assets/js/waves.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.scrollTo.min.js"></script>

    

    <!-- Chart JS -->
        <script src="<?= base_url() ?>assets/plugins/chart.js/chart.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.bundle.js"></script>
        <script src="<?= base_url() ?>assets/pages/chartjs.init.js"></script>
        <script src="<?= base_url() ?>assets/pages/datatables.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0/dist/chartjs-plugin-datalabels.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    </script>

    

    <!-- Indo Map -->
    <script src="<?= base_url(); ?>assets/js/js-aplikasi/vmap.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/dist/jquery.vmap.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/dist/maps/jquery.vmap.world.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/dist/maps/jquery.vmap.indonesia.js" charset="utf-8"></script>
</body>

</html>