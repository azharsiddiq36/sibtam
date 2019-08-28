<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Sibtam</title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/animo/animate+animo.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/csspinner/csspinner.min.css">
    <!-- START Page Custom CSS-->
    <!-- END Page Custom CSS-->
    <!-- App CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/app.css">
    <!-- Modernizr JS Script-->
    <script src="<?= base_url()?>assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="<?= base_url()?>assets/vendor/fastclick/fastclick.js" type="application/javascript"></script>
    <script src="<?= base_url()?>assets/js/ga.js" type="application/javascript"></script>
</head>

<body>
<!-- START Main wrapper-->
<div class="wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a href="dashboard.html" class="navbar-brand">
                <div class="brand-logo">
                    <img src="<?= base_url()?>assets/img/logo.png" alt="App Logo" class="img-responsive">
                </div>
                <div class="brand-logo-collapsed">
                    <img src="<?= base_url()?>assets/img/logo-single.png" alt="App Logo" class="img-responsive">
                </div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a href="dashboard.html#" data-toggle-state="aside-collapsed" data-persists="true" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a href="dashboard.html#" data-toggle-state="aside-toggled" class="visible-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>
                <!-- START Messages menu (dropdown-list)-->

                <!-- END Messages menu (dropdown-list)-->
                <li>
                    <!-- Button to clear all site options stored option from browser storage-->
                    <a href="dashboard.html#" data-toggle="reset">
                        <em class="fa fa-refresh"></em>
                    </a>
                </li>
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search icon-->
                <li>
                    <a href="dashboard.html#" data-toggle="navbar-search">
                        <em class="fa fa-search"></em>
                    </a>
                </li>
                <!-- START Alert menu-->

                <!-- END Alert menu-->
                <!-- START User menu-->
                <li class="dropdown">
                    <a href="dashboard.html#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                        <em class="fa fa-tencent-weibo"></em>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu">

                        <li class="divider"></li>

                        <li><a href="dashboard.html#">Settings</a>
                        </li>
                        <li><a href="dashboard.html#">Logout</a>
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END User menu-->
                <!-- START Contacts button-->
                <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
        </div>
        <!-- END Nav wrapper-->
        <!-- START Search form-->
        <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
                <input type="text" placeholder="Type and hit Enter.." class="form-control">
                <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
        <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
    <!-- START aside-->
    <aside class="aside">
        <!-- START Sidebar (left)-->
        <nav class="sidebar">
            <ul class="nav">
                <!-- START Menu-->
                <li class="nav-heading">Main</li>
                <li class="<?php if ($this->uri->segment(2) == 'dashboard'){ echo 'active';}?>">
                    <a href="<?= base_url('administrator/dashboard')?>" title="Dashboard" class="has-submenu">
                        <em class="fa fa-dot-circle-o"></em>
                        <span class="item-text">Dashboard</span>
                    </a>
                    <!-- START SubMenu item-->

                    <!-- END SubMenu item-->
                </li>
                <li>
                    <a href="dashboard.html#" title="Data Master" data-toggle="collapse-next" class="has-submenu">
                        <em class="fa fa-flask"></em>
                        <span class="item-text">Data Master</span>
                    </a>
                    <!-- START SubMenu item-->
                    <ul class="nav collapse ">
                        <li>
                            <a href="<?= base_url('administrator/pengguna')?>" title="Panels" data-toggle="" class="no-submenu">
                                <span class="item-text">Pengguna</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('administrator/tanaman')?>" title="Panels" data-toggle="" class="no-submenu">
                                <span class="item-text">Tanaman</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('administrator/ukuran')?>" title="Panels" data-toggle="" class="no-submenu">
                                <span class="item-text">Ukuran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('administrator/kategori')?>" title="Panels" data-toggle="" class="no-submenu">
                                <span class="item-text">Kategori</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SubMenu item-->
                </li>
                <li>
                    <a href="dashboard.html#" title="Transaksi" data-toggle="collapse-next" class="has-submenu">
                        <em class="fa fa-file-text-o"></em>
                        <span class="item-text">Transaksi</span>
                    </a>
                    <ul class="nav collapse ">
                        <li>
                            <a href="<?= base_url('administrator/pemesanan')?>" title="Landing" data-toggle="" class="no-submenu">
                                <span class="item-text">Pemesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('administrator/pembayaran')?>" title="Landing" data-toggle="" class="no-submenu">
                                <span class="item-text">Pembayaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('administrator/cetak')?>" title="Landing" data-toggle="" class="no-submenu">
                                <span class="item-text">Cetak</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- START Theme color options-->

                <!-- END Theme color options-->

                <!-- END Menu-->
            </ul>
        </nav>
        <!-- END Sidebar (left)-->
    </aside>
    <!-- End aside-->
    <!-- START aside-->

    <!-- END aside-->
    <!-- START Main section-->
    <section>
        <!-- START Page content-->
        <div class="main-content">

                <!-- START dashboard main content-->


                    <!-- START Secondary Widgets-->

                    <!-- END Secondary Widgets-->
                    <!-- START chart-->

                    <!-- END chart-->
                    <!-- START messages and activity-->

                    <!-- END messages and activity-->

                <!-- END dashboard sidebar-->
