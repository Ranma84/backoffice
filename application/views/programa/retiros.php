<?php
//GANANCIAS
$sel_ganancias = "select sum(u_valor_gana) as totalganado 
				from
					usuarios_ganancias 
				where 
				u_idusuario='" . $_SESSION["us_usuario"] . "'
				and u_estado=1
				order by u_id";
$qry_ganancias = $mysqli->query($sel_ganancias) or die($mysqli->error);
$res_ganancias = $qry_ganancias->fetch_object();
$total_ganado = $res_ganancias->totalganado;

$sel_retiros = "select sum(r_valor) as totalretiro 
				from
					 usuarios_retiro 
				where 
				r_usuario='" . $_SESSION["us_usuario"] . "'
				and r_estado=1
				 ";
$qry_retiros = $mysqli->query($sel_retiros) or die($mysqli->error);
$res_retiros = $qry_retiros->fetch_object();

$total_disponi = ($res_ganancias->totalganado - $res_retiros->totalretiro);
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">

        <div class="row">
            <div class="col-md-6">
                <div class="card"> 

                    <div class="card-body">
                        <h4 class="card-title">Solicitud de pago</h4>
                        <h6 class="card-subtitle">Solicitar tus ganancias <code>montos fijos</code> .</h6>
                        <div class="nombre_formulario" id="solicitud_retiro"></div>
                        <form name="solicitud_retiro">
                            <div class="form-group mb-4 mt-5">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Valor solicitado:</label>
                                <input name="valorsolicitud" class="form-control" id="valorsolicitud" placeholder="Monto maximo: $<?php echo number_format($total_disponi, 2) ?>" <?php if (date("d") <= 5 and date("d") >= 1) {
    
} else {
    ?>readonly<?php } ?>>
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-danger" <?php if (date("d") <= 5 and date("d") >= 1) {
                                       
                                   } else {
                                       ?>disabled<?php } ?>>Enviar Solicitud</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>

            <div class="col-md-6">
                <div class="card "> 
                    <div class="card-header"> <h4 class="mb-0  "><i class="fas fa-i"></i> Indicaciones</h4> </div>
                    <div class="card-body">


                        <div class="form-group mb-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">
                                1. Debe tener registrado su numero de <a href="perfil">cuenta bancaria</a> donde cargaremos sus ganancias.<br>

                                3. Todos los correos electrónicos del sistema se envían a su correo electrónico registrado.<br>
                                4. La Compañía no se hace responsable de la pérdida o retraso de las bonificaciones debido a direcciones de correo electrónico o numero de cuenta incorrectas.<br>
                                5. Monto minimo para retirar $15
                                <br>
                                6. Podra solicitar retiros los 	<strong>días del 1 al 5</strong> de cada mes. </label>


                        </div>

                    </div>



                </div>
            </div>

        </div>


<?php include("includes/compras.php") ?>

    </div>

</div>



