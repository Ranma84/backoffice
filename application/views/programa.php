<html dir="ltr"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/favicon.fw.png') ?>">
        <title>Ingreso - Backoffice PRUF</title>
        <link href="<?= base_url('asset/programa/vendor/css/style.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('asset/programa/vendor/alert/sweetalert2.css') ?>">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body style="background: url(<?= base_url('asset/programa/images/loginsignup-bg.jpg') ?>)no-repeat center center; background-size: cover;">
        <div class="main-wrapper">
            <div class="preloader" style="display: none;">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="">
                <div class="auth-box row">
                    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?= base_url('asset/programa/images/login.jpg') ?>); border-radius: 15px 0 0 15px;">
                    </div>
                    <div class="col-lg-5 col-md-7 bg-white">
                        <div class="p-3">
                            <div class="text-center">
                                <img src="<?= base_url('asset/programa/images/logo-icon.png') ?>" alt="wrapkit">
                                <img src="<?= base_url('asset/programa/images/logo-text.png') ?>" alt="LogoPruf">
                            </div>
                            <h2 class="mt-3 text-center">Iniciar sesión</h2>
                            <p class="text-center">Ingrese su usuario y contraseña para acceder al panel de administración.<br>
                                <b style="font-weight: bold">Jesús tu gracia me basta</b>
                            </p>		
                            <div class="nombre_formulario" ></div>
                            <form name="inicio_session" id="inicio_session" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="padding-right: 14px;"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input class="form-control" id="pwd" name="password" type="password" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-block btn-dark">Ingresar</button>
                                    </div>
                                    <div class="col-lg-12 text-center mt-3">
                                        Recuperar contraseña! <a href="recuperar_clave" class="text-danger">Click aqui</a>
                                    </div>
                                </div>
                            </form>			
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('asset/programa/vendor/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('asset/programa/vendor/js/popper/popper.min.js') ?>"></script>
        <script src="<?= base_url('asset/programa/vendor/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('asset/programa/vendor/alert/sweetalert2.min.js') ?>"></script>
        <script src="<?= base_url('asset/programa/js/mi_scripts.js') ?>"></script>
        <script>
            $(".preloader").fadeOut();
        </script>
    </body>
</html>