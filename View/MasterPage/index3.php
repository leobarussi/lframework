
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base; ?>assets/images/favicon.png">
    <title>@yield('title')</title>
    <!--c3 CSS -->
    <link href="<?php echo $base; ?>assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="<?php echo $base; ?>assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $base; ?>assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php echo $base; ?>assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <!-- needed css -->
    <link href="<?php echo $base; ?>dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link href="<?php echo $base; ?>assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>assets/libs/dropzone/dist/min/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
    <style>
        .spinner-border-sm{
            width: 1rem;
            height: 1rem;
            border-width: 0.1em;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header border-right">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src="<?php echo $base; ?>assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="<?php echo $base; ?>assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                             <img src="<?php echo $base; ?>assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                             <img src="<?php echo $base; ?>assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar" id="sidebar-option">
                                <i class="fas fa-bars" style="font-size: 20px; color: #91A0B1;"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell" style="font-size: 18px; color: #91A0B1;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 4 new messanges</div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?php echo $base; ?>assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?php echo $base; ?>assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?php echo $base; ?>assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?php echo $base; ?>assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all Notifications</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item search-box">
                            <form class="app-search d-none d-lg-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <a href="" class="active"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $base; ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="36">
                                <span class="ml-2 font-medium" style="color:black;">Steve</span><span class="fas fa-angle-down ml-2" style="color:black;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class=""><img src="<?php echo $base; ?>assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Steave Jobs</h4>
                                        <p class=" mb-0 text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="67110615120927000a060e0b4904080a">[email&#160;protected]</a></p>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-plus"></i>
                                <span class="hide-menu">Cadastros</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('clientes" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Clientes</span>
                                    </a>
                                    <a href="{{route('fornecedores" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Fornecedores</span>
                                    </a>
                                    <a href="{{route('unidades" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Unidades Produtos</span>
                                    </a>
                                    <a href="{{route('gruposProdutos" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Grupo de produtos</span>
                                    </a>
                                    <a href="{{route('fabricantes" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Fabricantes</span>
                                    </a>
                                    <a href="{{route('produtos" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> Produtos</span>
                                    </a>
                                    <a href="{{route('transportadoras" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> transportadoras</span>
                                    </a>
                                    <a href="{{route('departamentos" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> departamentos</span>
                                    </a>
                                    <a href="{{route('vendedores" class="sidebar-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="hide-menu"> vendedores</span>
                                    </a>
                                </li>

                                {{-- <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <span class="hide-menu">Cadastros</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-adjust text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-info"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-faq.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-success"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb border-bottom">
                @yield('bread')
            </div>
            <div class="page-content container-fluid">
                @if($errors->any() || session('error') || session('success'))
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h6 class="text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                Falha na solicitação
                            </h6>
                            <div class="row">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12">
                                        <li> <h5>{{ $error }}</h5> </li>
                                    </div>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h6 class="text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                Falha na solicitação
                            </h6>
                            {{session('error
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h6 class="text-success">
                                <i class="fas fa-exclamation-triangle"></i>
                                Solicitação realizada com sucesso!
                            </h6>
                            {{session('success
                        </div>
                    @endif
                @endif
                @yield('content')
            </div>
            <footer class="footer text-center">
                Todos os direitos reservados. Desenvolvido por <a href="https://wrappixel.com">BarussiDEV</a>.
            </footer>
        </div>
    </div>
    <div class="chat-windows"></div>
    <script src="<?php echo $base; ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $base; ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo $base; ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $base; ?>dist/js/app.min.js"></script>
    {{-- <script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script> --}}
    <script src="<?php echo $base; ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo $base; ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="<?php echo $base; ?>dist/js/waves.js"></script>
    <script src="<?php echo $base; ?>dist/js/sidebarmenu.js"></script>
    <script src="<?php echo $base; ?>dist/js/custom.min.js"></script>
    <script src="<?php echo $base; ?>assets/mask/inputmask.js"></script>
    <script src="<?php echo $base; ?>assets/mask/jquery.inputmask.js"></script>
    <script src="<?php echo $base; ?>assets/mask/autoNumeric.js"></script>
    <script src="<?php echo $base; ?>assets/mask/form-mask.js"></script>
    <script src="<?php echo $base; ?>assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="<?php echo $base; ?>assets/extra-libs/jquery.repeater/repeater-init.js"></script>
    <script src="<?php echo $base; ?>assets/extra-libs/jquery.repeater/dff.js"></script>
    <script src="<?php echo $base; ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo $base; ?>assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="<?php echo $base; ?>assets/libs/block-ui/jquery.blockUI.js"></script>
    <script src="<?php echo $base; ?>assets/extra-libs/block-ui/block-ui.js"></script>
    <script src="<?php echo $base; ?>assets/libs/moment/moment.js"></script>
    <script src="<?php echo $base; ?>assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Remover arquivo";
        $(document).ready(function () {
            Inside.init();
        });
    </script>
    <script>
        $(function() {
            if(localStorage.getItem('optionSidebar') === null){
                localStorage['optionSidebar'] = 'mini-sidebar';
            }

            "use strict";
            $("#main-wrapper").AdminSettings({
                Theme: false, // this can be true or false ( true means dark and false means light ),
                Layout: 'vertical',
                LogoBg: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                SidebarType: localStorage['optionSidebar'], // You can change it full / mini-sidebar / iconbar / overlay
                SidebarColor: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                SidebarPosition: false, // it can be true / false ( true means Fixed and false means absolute )
                HeaderPosition: false, // it can be true / false ( true means Fixed and false means absolute )
                BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
            });

            $("#sidebar-option").click(function(){
                if(localStorage['optionSidebar'] == 'mini-sidebar'){
                    localStorage['optionSidebar'] = 'full';
                } else {
                    localStorage['optionSidebar'] = 'mini-sidebar';
                }
            });
        });
    </script>
</body>

</html>
