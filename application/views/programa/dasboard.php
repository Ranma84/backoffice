<?php
$counter = 0;
$counter7 = 0;
$counter8 = 0;
$counter9 = 0;
?>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hola, <b><?= $_SESSION["us_usuario"] ?></b>  	
                <i class="fa fa-star <?php if ($qry_aviso_rango == 1) { ?> fa-spin <?php } ?> " aria-hidden="true" style="color:<?= $colorestrella ?> "></i> 
            </h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected><?= date('M d') ?></option>

                </select>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $total_directosactivos ?></h2>
                            <span
                                class="badge bg-success font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"></span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Directos Activos</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">

                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $total_directosactivos_inactivos ?></h2>
                            <span
                                class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"></span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Directos Inactivos</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                class="set-doller"></sup><?= $counter - $total_directos ?></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Indirectos
                        </h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $counter ?></h2>

                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Volumen</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End First Cards -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body text-center pb-0" >
                    <div class="profile-pic mb-3 mt-3">
                        <div class="product_label <?php if ($res_planes->us_estado == 2 or $res_planes->us_estado == 0) { ?>blink_me<?php } ?>">
                            <?php
                            if ($res_planes->us_estado == 2 or $res_planes->us_estado == 0) {
                                $marcastd = "bg-dark";
                                $text_std = "Inactivo";
                            }
                            if ($res_planes->us_estado == 1) {
                                $marcastd = "bg-success";
                                $text_std = "Activo";
                            }
                            ?>
                            <blockquote class="<?= $marcastd ?>  pl-2 pr-2">
                                <p><?= $text_std ?></p>
                            </blockquote>
                        </div>
                        <?php if ($res_planes->us_estado == '') { ?>
                            <img src="images/user.jpg" width="150" class="rounded-circle" alt="user" style="border: 3px solid  <?= $colorestrella ?>;  padding: 4px;">
                        <?php } else { ?>
                            <img src="<?= $res_planes->us_estado; ?>"  width="150" class="rounded-circle" alt="user" style="height: 150px; border: 3px solid  <?= $colorestrella ?>;  padding: 4px;">
                        <?php } ?>
                        <h4 class="mt-3 mb-0"><?= $res_planes->us_nombre ?> <?= $res_planes->us_apellido ?></h4>
                        <a href="<?= base_url('programa') ?>/registro?p=<?= $res_planes->us_usuario ?>" target="_blank"><?= $res_planes->us_usuario ?></a>
                    </div>
                    <div class="badge  font-13" style="color: #000000;"><strong>Fecha Inicio:</strong></div>
                    <div class="badge badge-pill badge-light font-13"><?= $res_planes->up_fecha_inicio ?></div> 

                    <div class="badge  font-13" style="color: #000000;"><strong>Fecha Fin:</strong></div>
                    <div class="badge badge-pill badge-light font-13" <?php if ($res_planes->up_fecha_fin == date("Y-m-d") or $res_planes->us_estado == 0) { ?>style="background: #f97676;color: #FFF;<?php } ?>"><?= $res_planes->up_fecha_fin ?></div> 
                    <table class="table mt-3">
                        <th class="text-cyan">
                            Valores Ganados: &nbsp; &nbsp;
                        </th>
                        <th class="text-cyan border-righ" style="border-left: 1px solid #e8eef3;">
                            Valores Disponibles:
                        </th>
                        <tr>
                            <td class="border-right">
                                <a href="#fireworks" id="fireworks" class="anchor"> 
                                    $<?= number_format($total_ganado, 2) ?></a>
                            </td> 
                            <td>$<?= number_format($total_disponi, 2) ?></td>
                        </tr>
                    </table>
                </div>
                <div class="border-top">
                    <div class="text-center">
                        <a href="https://api.whatsapp.com/send?phone=&text=https://backoffice.pruf-ec.com/registro.php?p=<?= $res_planes->us_usuario ?>" class="link d-flex align-items-center justify-content-center font-weight-medium" target="_blank" style="    background: #22ca80;
                           color: #FFF;   padding: 12px;     width: 50%; border-radius: 0px 0px 0px 7px;
                           float: left;"><i class="fab  fa-whatsapp font-20 mr-1"></i>Compartir Link</a>

                        <a href="https://backoffice.pruf-ec.com/registro.php?p=<?= $res_planes->us_usuario ?>" target="_blank" class="link d-flex align-items-center justify-content-center font-weight-medium" style="background: #5f76e8;
                           color: #FFF;  padding: 12px; width: 50%; border-radius: 0px 0px 7px 0px;"><i class="fas fa-link font-20 mr-1"></i>Copiar Link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-4">		
            <!-- *************************************************************** -->
            <!-- Start Sales Charts Section -->
            <!-- *************************************************************** -->
            <?php
            $us_rango = 0;
            foreach ($res_usr as $clave => $valor) {
                $us_rango = $valor['us_rango'];
            }
            if ($us_rango == 0) {
                $cant_star = "Minimo 6  Promotores Activos";
                $rangonecesario = 0;
                $colorestrellas = "";
                $cantnecesaria = 6;
            }

            if ($us_rango == 1) {
                $cant_star = "Minimo 8 Promotores Activos ";
                $rangonecesario = 1;
                $colorestrellas = "";
                $cantnecesaria = 8;
            }

            if ($us_rango == 2) {
                $cant_star = "Minimo 10 Promotores Activos ";
                $rangonecesario = 2;
                $colorestrellas = "";
                $cantnecesaria = 10;
            }

            if ($us_rango == 3) {
                $cant_star = "Minimo 12 Promotores Activos ";
                $rangonecesario = 3;
                $colorestrellas = "";
                $cantnecesaria = 12;
            }

            if ($us_rango == 4) {
                $cant_star = "12 Promotores Activos";
                $rangonecesario = 4;
                $colorestrellas = "";
            }
            $porcentaje = (($res_totrangos->totalrango * 100) / $cantnecesaria);
            ?>
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mi proximo rango</h4>
                        <h6 class="card-subtitle"><?= $cant_star ?></h6>
                        <div class="mt-3">
                            <strong>Promotor</strong>
                            <?php if ($us_rango == 0) { ?>
                                <i class="fa fa-star  " aria-hidden="true" style="color:#F1BE0A  "></i> 
                                <span  style="color:#F1BE0A ">Estrella Amarilla</span>
                            <?php } ?>

                            <?php if ($us_rango == 1) { ?>
                                <i class="fa fa-star  " aria-hidden="true" style="color:#dc2043 "></i> 
                                <span  style="color:#dc2043 ">Estrella Roja</span>
                            <?php } ?>


                            <?php if ($us_rango == 2) { ?>
                                <i class="fa fa-star  " aria-hidden="true" style="color:#374db9 "></i> 
                                <span  style="color:#374db9 ">Estrella Azul</span>
                            <?php } ?>
                            <?php if ($us_rango == 3) { ?>
                                <i class="fa fa-star  " aria-hidden="true" style="color:#BF8F00  "></i> 
                                <span  style="color:#BF8F00  ">Estrella Dorada</span>
                            <?php } ?>

                            <?php
                            if ($us_rango == 4) {
                                
                            } else {
                                ?>
                                <div class="progress ">
                                    <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" style="width: <?= number_format($porcentaje, 0) ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?= number_format($porcentaje, 0) ?>%</div>
                                </div>
                                <div class="float-left"><?= $res_totrangos->totalrango ?></div>
                                <div class="float-right"><?= $cantnecesaria ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Actividades recientes</h4>
                        <div class="mt-4 activity">
                            <div class="d-flex align-items-start border-left-line pb-3">
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    </a>
                                </div>
                                <div class="ml-3 mt-2">
                                    <div class="avisos_locos">

                                        <h5 class="text-dark font-weight-medium mb-2"><?= $titulo ?></h5>
                                        <p class="font-14 mb-2 text-muted"><?= $datos ?> </p>
                                        <span class="font-weight-light font-14 text-danger"><?= $fecha ?> </span>                                            
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Totales por mes</h4>
                    <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                    <ul class="list-inline text-center mt-5 mb-2">
                        <li class="list-inline-item text-muted font-italic">Afiliador por mes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End Sales Charts Section -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    <!-- Start Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Mis referidos directos</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="promotores">Ver Mis Promotores </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">Promotores directos <small>(1 Gen.)</small></th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Rango
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Equipo <small>(2 Gen.)</small></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $color = '';
                                if (isset($res_usr) && !empty($res_usr))
                                    foreach ($res_usr as $clave => $valor) { ?>
                                        <tr>
                                            <td class="border-top-0 px-2 " >
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="mr-3">
                                                        <?php if ($valor['us_usuario'] == '') { ?>
                                                            <img src="images/user.jpg" alt="user" class="rounded-circle" width="40">
                                                        <?php } else { ?>
                                                            <img src="<?= $res_directos->us_foto ?>" alt="user" class="rounded-circle" width="40" style="width: 40px;   height: 40px;">
                                                        <?php } ?>
                                                    </div>
                                                    <div class="" >
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium" <?php if ($valor['us_estado'] == 0) { ?> style="color: #B3B3B3 !important"<?php } ?>>
                                                            <?= $valor['us_nombre'] ?>  <?= $valor['us_apellido'] ?>
                                                            ( <?php
                                                            if ($valor['us_estado'] == 1) {
                                                                $colorstd = "#1ce41c";
                                                            } else {
                                                                $colorstd = "red";
                                                            }
                                                            ?><span style="font-size: 19px;    margin-left: -2px; margin-right: -2px;color: <?= $colorstd ?>">&bull; </span><small ><?= $valor['us_usuario'] ?></small>)
                                                        </h5>
                                                        <span class="text-muted font-14">
                                                            <a target="_blank" href='https://wa.me/593<?= $valor['us_telefono'] ?>' <?php if ($valor['us_estado'] == 0) { ?> style="color: #B3B3B3 !important"<?php } ?>><?= $valor['us_telefono'] ?></a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted px-2 font-14">
                                                <i class="fa fa-star" style="color: <?= $res_directos->sg_color; ?>" aria-hidden="true"></i>
                                            </td>
                                            <td class="border-top-0 px-2  ">
                                                <div class="popover-icon">
                                                    <?php
                                                    foreach ($qry_indirectos as $clave => $valor){
                                                        ?>
                                                        <a class="btn btn- <?php if ($valor['us_estado']  == 1) { ?>primary<?php } else { ?>light<?php } ?> rounded-circle btn-circle font-12"
                                                           data-toggle="tooltip" data-placement="top" title="<?= $res_indirectos->us_usuario ?>" target="_blank"  href="https://wa.me/?text=https://backoffice.pruf-ec.com/registro.php?p=<?= $valor['us_usuario'] ?>"><?= substr($valor['us_nombre'], 0, 1) ?><?= substr($valor['us_apellido'], 0, 1) ?>
                                                            
                                                           <?php if ($valor['us_rango'] >= 1) { ?>
                                                                <div class="num_totnivel" style="background: <?= $valor['sg_color'] ?>">
                                                                    <?= $valor['cantidad'] ?>
                                                                </div>
                                                            <?php } ?>
                                                        </a>
                                                    <?php } ?>
                                                    <a data-toggle="tooltip" data-placement="top" title="Ayudar Equipo" class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                       target="_blank"  href="https://wa.me/?text=https://backoffice.pruf-ec.com/registro.php?p=<?= $res_directos->us_usuario ?>">+</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>