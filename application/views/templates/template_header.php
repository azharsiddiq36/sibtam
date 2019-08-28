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
    <link rel="stylesheet" href="<?= base_url()?>assets/css/app.css">
    <!-- Modernizr JS Script-->
    <script src="<?= base_url()?>assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="<?= base_url()?>assets/vendor/fastclick/fastclick.js" type="application/javascript"></script>
    <script src="ga.js" type="application/javascript"></script>
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
                <li class="dropdown dropdown-list">
                    <a href="dashboard.html#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                        <em class="fa fa-envelope-o"></em>
                        <div class="label label-danger">21</div>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">You have 5 new messages</li>
                        <li>
                            <div class="scroll-viewport">
                                <!-- START list group-->
                                <div class="list-group scroll-content">
                                    <!-- START list group item-->
                                    <a href="dashboard.html#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?= base_url()?>assets/img/user/01.jpg" alt="Image" class="media-object img-circle thumb48">
                                            </div>
                                            <div class="media-body clearfix">
                                                <small class="pull-right">2h</small>
                                                <strong class="media-heading text-primary">
                                                    <span class="point point-success point-md"></span>Rina Carter</strong>
                                                <p class="mb-sm">
                                                    <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                    <!-- START list group item-->
                                    <a href="dashboard.html#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?= base_url()?>assets/img/user/04.jpg" alt="Image" class="media-object img-circle thumb48">
                                            </div>
                                            <div class="media-body clearfix">
                                                <small class="pull-right">3h</small>
                                                <strong class="media-heading text-primary">
                                                    <span class="point point-success point-md"></span>Michael Reynolds</strong>
                                                <p class="mb-sm">
                                                    <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                    <!-- START list group item-->
                                    <a href="dashboard.html#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?= base_url()?>assets/img/user/03.jpg" alt="Image" class="media-object img-circle thumb48">
                                            </div>
                                            <div class="media-body clearfix">
                                                <small class="pull-right">4h</small>
                                                <strong class="media-heading text-primary">
                                                    <span class="point point-danger point-md"></span>Britanny Pierce</strong>
                                                <p class="mb-sm">
                                                    <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                    <!-- START list group item-->
                                    <a href="dashboard.html#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?= base_url()?>assets/img/user/05.jpg" alt="Image" class="media-object img-circle thumb48">
                                            </div>
                                            <div class="media-body clearfix">
                                                <small class="pull-right">4h</small>
                                                <strong class="media-heading text-primary">
                                                    <span class="point point-danger point-md"></span>Laura Cole</strong>
                                                <p class="mb-sm">
                                                    <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                    <!-- START list group item-->
                                    <a href="dashboard.html#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?= base_url()?>assets/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                                            </div>
                                            <div class="media-body clearfix">
                                                <small class="pull-right">4h</small>
                                                <strong class="media-heading text-primary">
                                                    <span class="point point-danger point-md"></span>Carolyn Pretty</strong>
                                                <p class="mb-sm">
                                                    <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                </div>
                                <!-- END list group-->
                            </div>
                        </li>
                        <!-- START dropdown footer-->
                        <li class="p">
                            <a href="dashboard.html#" class="text-center">
                                <small class="text-primary">READ ALL</small>
                            </a>
                        </li>
                        <!-- END dropdown footer-->
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
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
                <li class="dropdown dropdown-list">
                    <a href="dashboard.html#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                        <em class="fa fa-bell-o"></em>
                        <div class="label label-info">35</div>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu">
                        <li>
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <a href="dashboard.html#" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-envelope-o fa-2x text-success"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Unread messages</div>
                                            <p class="m0">
                                                <small>You have 10 unread messages</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="dashboard.html#" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-cog fa-2x"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">New settings</div>
                                            <p class="m0">
                                                <small>There are new settings available</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="dashboard.html#" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-fire fa-2x"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Updates</div>
                                            <p class="m0">
                                                <small>There are
                                                    <span class="text-primary">2</span>new updates available</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href="dashboard.html#" class="list-group-item">
                                    <small>Unread notifications</small>
                                    <span class="badge">14</span>
                                </a>
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
                <!-- START User menu-->
                <li class="dropdown">
                    <a href="dashboard.html#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                        <em class="fa fa-tencent-weibo"></em>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu">
                        <li>
                            <div class="p">
                                <p>Overall progress</p>
                                <div class="progress progress-striped progress-xs m0">
                                    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-70">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li><a href="dashboard.html#">Profile</a>
                        </li>
                        <li><a href="dashboard.html#">Settings</a>
                        </li>
                        <li><a href="dashboard.html#">Notifications<div class="label label-info pull-right">5</div></a>
                        </li>
                        <li><a href="dashboard.html#">Messages<div class="label label-danger pull-right">10</div></a>
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
                <li class="active">
                    <a href="dashboard.html" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                        <em class="fa fa-dot-circle-o"></em>
                        <div class="label label-primary pull-right">10</div>
                        <span class="item-text">Dashboard</span>
                    </a>
                    <!-- START SubMenu item-->
                    <ul class="nav collapse in">
                        <li class="active">
                            <a href="dashboard.html" title="Default" data-toggle="" class="no-submenu">
                                <span class="item-text">Default</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/dashboard-profile.html" title="User Profile" data-toggle="" class="no-submenu">
                                <span class="item-text">User Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/dashboard-sidebar2.html" title="Two Sidebar" data-toggle="" class="no-submenu">
                                <span class="item-text">Two Sidebar</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SubMenu item-->
                </li>
                <li>
                    <a href="dashboard.html#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                        <em class="fa fa-flask"></em>
                        <span class="item-text">Elements</span>
                    </a>
                    <!-- START SubMenu item-->
                    <ul class="nav collapse ">
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/panels.html" title="Panels" data-toggle="" class="no-submenu">
                                <span class="item-text">Panels</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/portlets.html" title="Portlets" data-toggle="" class="no-submenu">
                                <span class="item-text">Portlets</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/button.html" title="Buttons" data-toggle="" class="no-submenu">
                                <span class="item-text">Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/icons.html" title="Icons" data-toggle="" class="no-submenu">
                                <div class="label label-primary pull-right">+400</div>
                                <span class="item-text">Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/notifications.html" title="Notifications" data-toggle="" class="no-submenu">
                                <span class="item-text">Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/typo.html" title="Typography" data-toggle="" class="no-submenu">
                                <span class="item-text">Typography</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/grid.html" title="Grid" data-toggle="" class="no-submenu">
                                <span class="item-text">Grid</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/grid-masonry.html" title="Grid Masonry" data-toggle="" class="no-submenu">
                                <span class="item-text">Grid Masonry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/animations.html" title="Animations" data-toggle="" class="no-submenu">
                                <span class="item-text">Animations</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/dropdown-animations.html" title="Dropdown" data-toggle="" class="no-submenu">
                                <span class="item-text">Dropdown</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/widgets.html" title="Widgets" data-toggle="" class="no-submenu">
                                <span class="item-text">Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/spinners.html" title="Spinners" data-toggle="" class="no-submenu">
                                <span class="item-text">Spinners</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SubMenu item-->
                </li>
                <li>
                    <a href="dashboard.html#" title="Pages" data-toggle="collapse-next" class="has-submenu">
                        <em class="fa fa-file-text-o"></em>
                        <span class="item-text">Pages</span>
                    </a>
                    <!-- START SubMenu item-->
                    <ul class="nav collapse ">
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/landing.html" title="Landing" data-toggle="" class="no-submenu">
                                <span class="item-text">Landing</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/login.html" title="Login" data-toggle="" class="no-submenu">
                                <span class="item-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/login-multi.html" title="Login Multi" data-toggle="" class="no-submenu">
                                <span class="item-text">Login Multi</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/signup.html" title="Sign up" data-toggle="" class="no-submenu">
                                <span class="item-text">Sign up</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/lock.html" title="Lock" data-toggle="" class="no-submenu">
                                <span class="item-text">Lock</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/pages/recover.html" title="Recover Password" data-toggle="" class="no-submenu">
                                <span class="item-text">Recover Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://geedmo.com/envato/products/wintermin/template.html" title="Empty Template" data-toggle="" class="no-submenu">
                                <span class="item-text">Empty Template</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SubMenu item-->
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
            <button type="button" class="btn btn-primary pull-right">
                <em class="fa fa-plus-circle fa-fw mr-sm"></em>Add Item</button>
            <h3>Dashboard
                <br>
                <small>Welcome user</small>
            </h3>
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;Welcome Visitor!&lt;/b&gt; Dismiss this message with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
                 class="hidden-xs"></div>
            <div class="row">
                <!-- START dashboard main content-->
                <section class="col-md-9">
                    <!-- START Secondary Widgets-->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- START widget-->
                            <div class="panel widget">
                                <div class="panel-body">
                                    <div class="text-right text-muted">
                                        <em class="fa fa-users fa-2x"></em>
                                    </div>
                                    <h3 class="mt0">20</h3>
                                    <p class="text-muted">New followers added this month</p>
                                    <div class="progress progress-striped progress-xs">
                                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END widget-->
                        </div>
                        <div class="col-md-4">
                            <!-- START widget-->
                            <div class="panel widget">
                                <div class="panel-body">
                                    <div class="text-right text-muted">
                                        <em class="fa fa-bar-chart-o fa-2x"></em>
                                    </div>
                                    <h3 class="mt0">$ 1250</h3>
                                    <p class="text-muted">Average Monthly Income</p>
                                    <div class="progress progress-striped progress-xs">
                                        <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-40">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END widget-->
                        </div>
                        <div class="col-md-4">
                            <!-- START widget-->
                            <div class="panel widget">
                                <div class="panel-body">
                                    <div class="text-right text-muted">
                                        <em class="fa fa-trophy fa-2x"></em>
                                    </div>
                                    <h3 class="mt0">$ 13865</h3>
                                    <p class="text-muted">Yearly Income Goal</p>
                                    <div class="progress progress-striped progress-xs">
                                        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-60">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END widget-->
                        </div>
                    </div>
                    <!-- END Secondary Widgets-->
                    <!-- START chart-->

                    <!-- END chart-->
                    <!-- START messages and activity-->

                    <!-- END messages and activity-->
                </section>
                <!-- END dashboard main content-->
                <!-- START dashboard sidebar-->
                <aside class="col-md-3">
                    <!-- START widget-->
                     <!-- END widget-->
                    <!-- START widget-->
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                        <div class="panel-body bg-primary">
                            <div class="row row-table row-flush">
                                <div class="col-xs-8">
                                    <p class="mb0">New visitors</p>
                                    <h3 class="m0">1.5k</h3>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                    </em>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!-- Bar chart-->
                            <div class="text-center">
                                <div data-bar-color="primary" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">5,3,4,6,5,9,4,4,10,5,9,6,4</div>
                            </div>
                        </div>
                    </div>
                    <!-- START widget-->
                </aside>
                <!-- END dashboard sidebar-->
