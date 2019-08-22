<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Sangoma Bootstrap Admin Template</title>
    <meta name="description" content="">
    <meta name="author" content="Walking Pixels | www.walkingpixels.com">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/sangoma-purple.css">

    <!-- JS Libs -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url()?>assets/js/libs/jquery.js"><\/script>')</script>
    <script src="<?= base_url()?>assets/js/libs/modernizr.js"></script>

    <!-- IE8 support of media queries and CSS 2/3 selectors -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>assets/js/libs/respond.min.js"></script>
    <script src="<?= base_url() ?>assets/js/libs/selectivizr.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-22557155-10"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
    </script>
</head>
<body class="login">

<!-- Main page container -->
<section class="container" role="main">

    <!-- Login header -->
    <div class="login-logo">
        <a href="login.html">Sangoma</a>
        <h1>Welcome to Sangoma</h1>
    </div>
    <!-- /Login header -->

    <!-- Login form -->
    <form method="post" action="<?= base_url("dashboard")?>">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="elusive icon-user"></span></span>
                <input class="form-control" type="text" placeholder="Enter your name" name="login">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="elusive icon-key"></span></span>
                <input class="form-control" type="password" placeholder="Password" name="password">
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <a class="lost-password" href="lost-password.html">Lost your password?</a>
    </form>
    <!-- /Login form -->

</section>
<!-- /Main page container -->

<!-- Bootstrap scripts -->
<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.min.js"></script>

</body>
</html>
