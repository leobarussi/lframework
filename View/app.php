<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <?php ob_start(); ?>
    <title>%TITLE%</title>
    <?php $buffer = ob_get_contents();
    ob_end_clean(); ?>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="<?php echo $base; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="index.html" class="logo"><span><img src="<?php echo $base; ?>/assets/images/logo-light.png" alt="" height="18"> </span><i><img src="<?php echo $base; ?>/assets/images/logo-sm.png" alt="" height="22"></i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a></li>
                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell-outline noti-icon"></i> <span class="badge badge-pill badge-danger noti-icon-badge">3</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">Notifications (258)</h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>
                            </div>
                            <!-- All--><a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a></div>
                    </li>
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="<?php echo $base; ?>/assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--><a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a> <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a> <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a></div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                    </li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a></div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="ti-home"></i>
                                <span class="badge badge-primary badge-pill float-right">2</span> 
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="ti-email"></i>
                                <span> Cadastros 
                                    <span class="float-right menu-arrow">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </span>
                            </a>
                            <ul class="submenu">
                                <li><a href="<?php echo route('view.cadastroAluno');?>">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Components</li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?php include_once '../View/' . $view . '.php';
                    $buffer = str_replace("%TITLE%", '', $buffer);
                    echo $buffer;
                ?>
            </div>
            <footer class="footer">© 2019 Veltrix <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</footer>
        </div>
    </div>
    <script src="<?php echo $base; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo $base; ?>/assets/js/waves.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/app.js"></script>
    <script>
        $(document).ready(function () {
            Inside.init();
        });
    </script>
</body>

</html>


