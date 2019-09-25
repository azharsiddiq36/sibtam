<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Informasi Bibit Tanaman</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/frontend/assets/images/icons/icon_logo.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/css-plugins-call.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/bundle.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/assets/css/colors.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper home-one">
    <!-- HEADER AREA START -->
    <header class="header-area">
        <!-- Header top area start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-bar-left">
                            <!-- welcome -->
                            <div class="welcome">
                                <p>Selamat Datang pada Sistem Informasi Bibit Tanaman</p>
                                <?php if(count($this->session->userdata())<=1){
                                    ?>
                                    <h5 style="float: right"><a style="color: white" href="<?= base_url('login')?>">Login</a></h5>
                                <?php
                                }
                                else{
                                    ?>

                                    <h5 style="float: right"><a style="color: white" href="<?= base_url('administrator/logout')?>">(<?= $this->session->userdata['pengguna_nama']?>) Logout</a></h5>
                                <?php
                                }?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top bar area end -->
        <!-- Header middle area start -->

        <!-- Header middle area end -->
        <!-- Header bottom area start -->
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-9">
                        <!-- main-menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="<?= base_url()?>">Home</a></li>
<!--                                    <li><a href="--><?//= base_url('pemesanan')?><!--">Pemesanan</a></li>-->
                                    <li><a href="<?= base_url('pembayaran')?>">Pembayaran</a></li>

                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>




