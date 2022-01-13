<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">


        <?php if ($_SESSION["us_usuario"] <> '') { ?>














            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Tu lista de promotores</h4>

                            <div class="arbol">

                                <?php include("includes/arbol.php") ?>


                            </div>
                            <hr>



                            <?php
                            $sel_directos = "select * 
					from 
						usuarios_preregistro,
				sistema_ganancia 
										where 
				us_patrocinador='" . $_SESSION["us_usuario"] . "'
				and sg_id=us_rango
				  
				order by us_id";
                            $qry_directos = $mysqli->query($sel_directos) or die($mysqli->error);
                            $total_directos = $qry_directos->num_rows;
                            ?>
                            <div class="table-responsive">
                                <div id="default_order_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"> <div class=""><div class="col-sm-12">



                                            <table id="default_order" class="table table-striped table-bordered display no-wrap   dataTable"  role="grid" aria-describedby="default_order_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  >Estado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" >Nombre</th>

                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Usuario</th>

                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Email</th>

                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Contacto</th>

                                                        <th class="sorting_desc" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-sort="descending" aria-label="Age: activate to sort column ascending" >Fecha Activo</th>

                                                        <th class="sorting_desc" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-sort="descending" aria-label="Age: activate to sort column ascending" >Fecha Vencimiento</th>


                                                        <th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"  >Rango</th>
                                                    </tr>
                                                </thead>
                                                <tbody>







    <?php while ($res_directos = $qry_directos->fetch_object()) { ?>
                                                        <tr role="row" class="odd">
                                                            <td>
        <?php if ($res_directos->us_estado == 1) {
            echo "Activo";
        } else {
            echo "Inactivo";
        } ?>
                                                            </td>
                                                            <td>
                                                                     <?php if ($res_directos->us_foto == '') { ?>
                                                                    <img src="images/user.jpg" alt="user" class="rounded-circle"
                                                                         width="40">
        <?php } else { ?>

                                                                    <img src="<?php echo $res_directos->us_foto ?>" alt="user" class="rounded-circle"
                                                                         width="40" style="width: 40px;   height: 40px;">

                                                                <?php } ?>

        <?php echo $res_directos->us_nombre ?>  
        <?php echo $res_directos->us_apellido ?>
                                                                (<?php echo "<b>" . substr($res_directos->us_nombre, 0, 1) . substr($res_directos->us_apellido, 0, 1) . "</b>" ?>)</td>
                                                            <td><strong><?php echo $res_directos->us_usuario ?></strong></td>
                                                            <td><?php echo $res_directos->us_email ?></td>
                                                            <td><a href="https://wa.me/593<?php echo $res_directos->us_telefono ?>" target="_blank"><?php echo $res_directos->us_telefono ?></a></td>
                                                            <td class="sorting_1">

                                                                <?php
                                                                $sel_plan = "select * from  usuarios_plan where up_usuario='" . $res_directos->us_usuario . "'";
                                                                $qry_plan = $mysqli->query($sel_plan);
                                                                $res_plan = $qry_plan->fetch_object();
                                                                echo substr($res_plan->up_fecha_inicio, 0, 10)
                                                                ?></td>
                                                            <td><?php echo substr($res_plan->up_fecha_fin, 0, 10) ?></td> <td><i class="fa fa-star" style="color: <?php echo $res_directos->sg_color; ?>" aria-hidden="true"></i></td>

                                                        </tr>
    <?php } ?>


                                                </tbody>

                                            </table></div></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            } else {
                echo "En Desarrollo, pronto estaremos con ustedes...";
            }
            ?>

        </div></div>

a