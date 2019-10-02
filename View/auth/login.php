
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>ProAcademia | Login</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="<?php echo $base; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base; ?>/assets/css/custom.css" rel="stylesheet" type="text/css">
</head>
<!-- 2px solid #1a73e8 -->
<body>
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Welcome Back !</h4>
                <p class="text-white-50 mb-4">Sign in to continue to Veltrix.</p>
            </div>
            <div class="account-card-content">
                <form class="form-horizontal m-t-30" action="<?php echo route('post.auth'); ?>" method="POST">
                    
                    <div class="form-group">
                        <label class="form-group has-float-label">
                            <input class="form-control x" type="email" name="username" id="username" style="padding: 13px 15px; height: calc(2em + .75rem + 2px);" placeholder="email@example.com"/>
                            <span>Email ou usuário</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-group has-float-label">
                            <input class="form-control x" type="password" name="password" id="password" style="padding: 13px 15px; height: calc(2em + .75rem + 2px);" placeholder="email@example.com"/>
                            <span>Digite sua senha</span>
                        </label>
                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary btn-login w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo $base; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo $base; ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo $base; ?>/assets/js/waves.min.js"></script>    
    <script src="<?php echo $base; ?>/assets/js/app.js"></script>
    <script src="<?php echo $base; ?>/assets/js/custom.js"></script>
</body>

<script>
    $(document).ready(function(){
        $('#username').tooltip({
            title : 'Este campo é obrigatório!',
            trigger: 'manual',
            template: '<div class="tooltip" role="tooltip"><div class="arrow arrow-error"></div><div class="tooltip-inner tooltip-error"></div></div>'
        });

        $('#userpassword').tooltip({
            title : 'Este campo é obrigatório!',
            trigger: 'manual',
            template: '<div class="tooltip" role="tooltip"><div class="arrow arrow-error"></div><div class="tooltip-inner tooltip-error"></div></div>'
        });

        //$('#username').tooltip("show");
        //$('#userpassword').tooltip("show");
    });
</script>
</html>