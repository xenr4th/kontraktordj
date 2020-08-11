<?php 

    session_start();
    
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $koneksi = new mysqli("localhost","root","","kontraktordj");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blank Page | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <script src="js/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="images/logo.png">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">POS PERUSAHAAN</a>
                
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="" style="margin-top: 10px;"><?php echo date('d-m-Y'); ?></a>
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <div class="email">admin@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="logout.php"><i class="material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>Data Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?page=customer">
                                    <span>Master Customer</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=mbahan">
                                    <span>Master Bahan</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=mworker">
                                    <span>Master Worker</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=supplier">
                                    <span>Master Supplier</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?page=sales_order">
                            <i class="material-icons">assignment</i>
                            <span>Sales Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=purchase_order">
                            <i class="material-icons">assignment</i>
                            <span>Purchase Order</span>
                        </a>
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?page=lapSo">
                                    <span>Laporan SO</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=nota">
                                    <span>Nota Bahan</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=nota_supplier">
                                    <span>Nota Supplier</span>
                                </a>
                            </li>

                            <li>
                                <a href="?page=lstok">
                                    <span>Laporan Purchase Order</span>
                                </a>
                            </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    <a href="">Admin - PERUSAHAAN</a>.
                    <br>
                    &copy; 2019 - 2020                
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <?php 
                $page = $_GET['page'];
                $aksi = $_GET['aksi'];

                if($page == "customer"){

                    if($aksi == ""){
                        include "page/customer/customer.php";
                    }

                    if($aksi == "tambah"){
                        include "page/customer/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/customer/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/customer/hapus.php";
                    }

                }

                if($page == "sales_order"){

                    if($aksi == ""){
                        include "page/sales_order/sales_order.php";
                    }

                    if($aksi == "tambah"){
                        include "page/sales_order/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/sales_order/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/sales_order/hapus.php";
                    }

                    if($aksi == "hapall"){
                        include "page/sales_order/hapall.php";
                    }
                }

                if($page == "bahan"){
                    
                    if($aksi == ""){
                        include "page/bahan/bahan1.php";
                    }

                    if($aksi == "tambah"){
                        include "page/bahan/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/bahan/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/bahan/hapus.php";
                    }

                    if($aksi == "cetak"){
                        include "page/bahan/cetak.php";
                    }
                }

                if($page == "worker"){
                    
                    if($aksi == ""){
                        include "page/worker/worker.php";
                    }

                    if($aksi == "tambah"){
                        include "page/worker/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/worker/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/worker/hapus.php";
                    }
                }

                if($page == "stok"){
                    
                    if($aksi == ""){
                        include "page/stok/stok.php";
                    }

                    if($aksi == "tambah"){
                        include "page/stok/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/stok/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/stok/hapus.php";
                    }
                }

                if($page == "supplier"){
                    
                    if($aksi == ""){
                        include "page/supplier/supplier.php";
                    }

                    if($aksi == "tambah"){
                        include "page/supplier/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/supplier/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/supplier/hapus.php";
                    }
                }

                if($page == "mbahan"){
                    
                    if($aksi == ""){
                        include "page/mbahan/bahan.php";
                    }

                    if($aksi == "tambah"){
                        include "page/mbahan/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/mbahan/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/mbahan/hapus.php";
                    }
                }

                if($page == "mworker"){
                    
                    if($aksi == ""){
                        include "page/mworker/worker.php";
                    }

                    if($aksi == "tambah"){
                        include "page/mworker/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/mworker/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/mworker/hapus.php";
                    }
                }

                if($page == "purchase_order"){
                    
                    if($aksi == ""){
                        include "page/purchase_order/purchase_order.php";
                    }

                    if($aksi == "tambah"){
                        include "page/purchase_order/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/purchase_order/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/purchase_order/hapus.php";
                    }
                }

                if($page == "nota"){
                
                    if($aksi == ""){
                        include "page/laporan/nota/nota.php";
                    }
                    if($aksi == "tambah"){
                        include "page/laporan/nota/tambah.php";
                    }

                     if($aksi == "ubah"){
                        include "page/laporan/nota/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/laporan/nota/hapus.php";
                    }

                    if($aksi == "cetak"){
                        include "page/laporan/nota/cetak.php";
                    }
                }

                if($page == "nota_supplier"){
                
                    if($aksi == ""){
                        include "page/laporan/nota supplier/dsup.php";
                    }
                    if($aksi == "sp"){
                        include "page/laporan/nota supplier/supplier.php";
                    }

                     if($aksi == "ubah"){
                        include "page/laporan/nota_supplier/ubah.php";
                    }

                     if($aksi == "hapus"){
                        include "page/laporan/nota_supplier/hapus.php";
                    }

                    if($aksi == "cetak"){
                        include "page/laporan/nota_supplier/cetak.php";
                    }
                }

                if($page == "lapSo"){
        
                    if($aksi == ""){
                        include "page/laporan/lapSo/lapSo.php";
                    }

                    if($aksi == "cetak"){
                        include "page/laporan/lapSo/cetak.php";
                    }

                    if($aksi == "lnote"){
                        include "page/laporan/lapSo/lnote.php";
                    }

                    if($aksi == "cnote"){
                        include "page/laporan/lapSo/cnote.php";
                    }
                }

                if($page == "lstok"){
                
                    if($aksi == ""){
                        include "page/laporan/lstok/laporanstok.php";
                    }    
                }

                ?>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>