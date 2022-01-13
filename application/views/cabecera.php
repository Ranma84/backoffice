<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Kyrios">
        <meta name="author" content="Proyecto Web">
        <link rel="shortcut icon" type="image/png" href="logo-PRUF.png" />
        <title>PRUF</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <link rel="stylesheet" href="<?= base_url('asset/css/animate.css') ?>">
        <link rel="stylesheet" href="<?= base_url('asset/css/main.css') ?>">
        <link href="<?= base_url('asset/css/animate.min.css') ?>" rel="stylesheet">
    </head>
    <body>
        <div class="top-container"  style="background-color:black;">
            <div class="container">
                <div class="main-nav"  style="text-align:right;">
                    <i  class="fa fa-whatsapp" aria-hidden="true" data-animate-hover="shake" style="color:yellow;" > (+593) 0984266295</i>
                    <i>-----</i>
                    <i class="fa fa-envelope-o" aria-hidden="true" data-animate-hover="shake" style="color:yellow;"> provisionesunafuerza@pruf-ec.com</i>
                </div>
            </div>
        </div>
        <nav id="myHeader" class="header navbar navbar-expand-lg navbar-dark">
            <div class="container" style="text-align:center">
                <a class="navbar-brand" href="index.php"><img src="<?= base_url('asset/images/logo.png') ?>" alt="logo" ></a>
                <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">            
                        <?php if (isset($pagina) && !empty($pagina) && $pagina == 'principal') { ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>">Inicio
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>">Inicio</a>
                            </li>        
                            <?php
                        }
                        if (isset($pagina) && !empty($pagina) && $pagina == 'productos') {
                            ?>
                            <li class="nav-item  active">
                                <a class="nav-link" href="<?= base_url('productos') ?>">Kit</a>
                                <span class="sr-only">(current)</span>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('productos') ?>">Kit</a>
                            </li>
                        <?php }
                        if (isset($pagina) && !empty($pagina) && $pagina == 'contacto') {
                            ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="contacto">Cont&aacute;ctanos</a>
                                <span class="sr-only">(current)</span>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto">Cont&aacute;ctanos</a>
                            </li>
                            <?php
                        }
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('programa') ?>" >Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>