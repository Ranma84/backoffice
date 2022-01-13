<div class="page-wrapper">
    <div class="page-breadcrumb">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tu Balance de Ganancias</h4>
                    <hr>
                    <?php
                    $sel_directos = "select *, sum(u_valor_gana) as totalganado, month(u_fecha_gana) as mes 
													from
														usuarios_ganancias 
													where 
													u_idusuario='" . $_SESSION["us_usuario"] . "'
													and u_estado=1
													and u_valor_tipo=0
													group by ug_generacion, month(u_fecha_gana) 
													order by u_id";
                    $qry_directos = $mysqli->query($sel_directos) or die($mysqli->error);
                    $total_directos = $qry_directos->num_rows;
                    ?>
                    <div class="table-responsive">
                        <div id="tablaganacias_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"> <div class="">
                                <div class="col-sm-12">
                                    <table id="tablaganacias" class="table table-striped table-bordered display no-wrap   dataTable"  role="grid" aria-describedby="tablaganacias_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="tablaganacias" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" >Concepto</th>
                                                <th class="sorting" tabindex="0" aria-controls="tablaganacias" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Generación</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="tablaganacias" rowspan="1" colspan="1" aria-sort="descending" aria-label="Age: activate to sort column ascending" >Periodo</th>
                                                <th class="sorting text-right" tabindex="0" aria-controls="tablaganacias" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    >Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($res_directos = $qry_directos->fetch_object()) { ?>
                                                <tr role="row" class="odd">
                                                    <td>Pago de comisión </td>
                                                    <td><?php echo $res_directos->ug_generacion ?> <a href="#" data-toggle="modal" data-target="#exampleModal" onClick="contenido_modal('balance_detalle', 'Detalle de comisiones', '<?php echo $res_directos->ug_generacion ?>*<?php echo $res_directos->mes ?>', 'modal-lg')">(Detalle)</a></td>
                                                    <td class="sorting_1"><?php echo $meses[ceros($res_directos->mes, 2)] ?></td>
                                                    <td class="text-right">
                                                        $<?php echo $res_directos->totalganado;
        $totgan = $res_directos->totalganado + $totgan; ?>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <tfoot>	
                                            <tr role="row" class="odd">
                                                <td>&nbsp;</td> 
                                                <td>&nbsp;</td>
                                                <td class="text-right"><b>Total Ganado:</b></td>
                                                <td class="text-right">$<?php echo number_format($totgan, 2); ?></td>
                                            </tr>
                                        </tfoot>
                                        </tbody>
                                    </table></div></div> 
                        </div>
                    </div>					
                </div>				