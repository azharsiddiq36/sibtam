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
    <title>Login</title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/animo/animate+animo.css">
    <!-- App CSS-->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/common.css">
    <!-- Modernizr JS Script-->
    <script src="<?= base_url()?>assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="<?= base_url()?>assets/vendor/fastclick/fastclick.js" type="application/javascript"></script>
</head>

<body>
<!-- START wrapper-->
<div class="row row-table page-wrapper">
    <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
        <?php if ($this->session->flashdata('msg')) {
            ?>
            <div class="auto-hide alert alert-danger" role="alert">
                <strong>Maaf, </strong> <?= $this->session->flashdata('msg') ?>
            </div>
            <?php
        } ?>
        <!-- START panel-->
        <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
                <p class="text-center mt-lg">
                    <strong>Selamat Datang di Sibtam</strong>
                </p>
            </div>
            <div class="panel-body">
                <form role="form" class="mb-lg" action="<?= base_url('login')?>" method="post">
                    <div class="form-group has-feedback">
                        <input id="exampleInputEmail1" type="email" name="email" placeholder="Enter email" class="form-control">
                        <span class="fa fa-envelope form-control-feedback text-muted"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="exampleInputPassword1" type="password" placeholder="Password" name="password" class="form-control">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                    </div>
                    <button name="submit" type="submit" class="btn btn-block btn-success">Login</button>
                </form>
            </div>
        </div>
        <!-- END panel-->
    </div>
</div>
<!-- END wrapper-->
<!-- START Scripts-->
<!-- Main vendor Scripts-->
<script src="<?= base_url()?>assets/js/custome.js"></script>
<script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Animo-->
<script src="<?= base_url()?>assets/vendor/animo/animo.min.js"></script>
<!-- Custom script for pages-->
<script src="<?= base_url()?>assets/js/pages.js"></script>
<!-- END Scripts-->
</body>

</html>