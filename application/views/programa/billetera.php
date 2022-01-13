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
                                <input name="valorsolicitud" class="form-control" id="valorsolicitud" placeholder="Monto maximo: $<?php echo number_format($total_disponi, 2) ?>" <?php
                                if (date("d") <= 5 and date("d") >= 1) {
                                    
                                } else {
                                    ?>readonly<?php } ?>>
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-danger" <?php
                                if (date("d") <= 5 and date("d") >= 1) {
                                    
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
                                1. Debe tener registrado su numero de <a href="perfil">cuenta bancaria</a> donde cargaremos sus ganancias.<br/>
                                3. Todos los correos electrónicos del sistema se envían a su correo electrónico registrado.<br/>
                                4. La Compañía no se hace responsable de la pérdida o retraso de las bonificaciones debido a direcciones de correo electrónico o numero de cuenta incorrectas.<br/>
                                5. Monto minimo para retirar $15<br/>
                                6. Podra solicitar retiros los 	<strong>días del 1 al 5</strong> de cada mes. 
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_SESSION["us_usuario"] <> '') { ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tu lista de retiros</h4>
                            <hr>
                            <div class="table-responsive">
                                <div id="default_order_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"> <div class=""><div class="col-sm-12">
                                            <table id="default_order" class="table table-striped table-bordered display no-wrap   dataTable"  role="grid" aria-describedby="default_order_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" >Descripcion</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Fecha</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Valor</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($res_directos = $qry_directos->fetch_object()) { ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $res_directos->r_descripcion ?></td>
                                                            <td><strong><?php echo substr($res_directos->r_fecha, 0, 10) ?></strong></td>
                                                            <td><?php echo $res_directos->r_valor ?></td>
                                                            <td> <?php
                                                                if ($res_directos->r_estado == 1) {
                                                                    echo "Procesado";
                                                                } if ($res_directos->r_estado == 0) {
                                                                    echo "Pendiente";
                                                                }
                                                                ?> </td>
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
            </div>
        </div>
    </div>



