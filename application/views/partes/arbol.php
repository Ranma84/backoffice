<?php
 
if($_GET["u"]==''){
	$usuario1 = $_SESSION["us_usuario"];
	 $colorrango1 = $res_usr->sg_color;
}else{
	session_start();
	include("../connect/mysql_db.php");
	$usuario1 = $_GET["u"];
	
	$sel_patron = "select * from 
	usuarios_preregistro, sistema_ganancia 
					where 
					us_usuario='".$usuario1."'
					 
					and sg_id=us_rango
					order by us_id";
	$qry_patron = $mysqli->query($sel_patron) or die ($mysqli->error);
	$res_patron = $qry_patron->fetch_object();
	$promotor = $res_patron->us_patrocinador;
	
	 $colorrango1 = $res_patron->sg_color;
	
}
$sel_directos = "select * from 
usuarios_preregistro ,
sistema_ganancia
					where 
					us_patrocinador='".$usuario1."'
					 
					and sg_id=us_rango
					order by us_id";
$qry_directos = $mysqli->query($sel_directos) or die ($mysqli->error);
$total_directos = $qry_directos->num_rows;
while($res_directos = $qry_directos->fetch_object()){ 
	
	   $referidos[] = substr($res_directos->us_nombre,0,1).substr($res_directos->us_apellido,0,1);
	$referidosusr[] = $res_directos->us_usuario;
	$colorrango[] = $res_directos->sg_color;
	$estado1g[] = $res_directos->us_estado;
	  
}


?> 

<style>
	.usractivo{
    height: 50px;
    width: 50px;
    line-height: 35px; 
	}
	.usertot{
	position: absolute;
    margin-left: -21px;
    height: 40px;
    /* background: red; */
    width: 40px;
    margin-top: 28px;
    line-height: 28px;
		font-size: 10px;
	}
	.hijos{
		width: 33px;
    height: 33px;
    font-size: 12px;
    border-radius: 50%;
    line-height: 33px;
    padding: 0;
	}
</style>

 
				
				<div class="table-responsive">	
					<table width="100%">
					<tr>
						<td height="18" colspan="37" align="center">
							<?php if($usuario1==$_SESSION["us_usuario"]){}else{ ?>
							<div class="btn btn-warning btn-rounded" onClick="filtrarusr('<?php echo  $promotor ?>')" ><i class="fa fa-undo"></i></div>
							<?php } ?>
							
							<div class="btn btn-rounded " style="background-color: <?php echo $colorrango1  ?>; color:#FFF" title="<?php echo $referidosusr[$p] ?>"><?php echo $usuario1 ?></div>
						</td>
					</tr>
					<tr>
						<td height="18" colspan="37" align="center">|<hr style="width: 92%; margin-top: -5px;"></td>
					</tr>
					<tr>
					<?php 
	$c1="#f9f9f9";
								 for($p=0;$p<=11;$p++){
						if($color==$c1){
							$color=$c2;
						}else{
							$color=$c1;
						}
						?>
					<td height="19" bgcolor="<?php echo $color ?>" colspan="3" align="center">
						<?php 
							   if($referidosusr[$p]==''){
									$color_btn = "#e8eaec";
								}else{
								   
								   if($estado1g[$p]==0){
									   $color_btn ="#e2e2e2";
								   }else{
									$color_btn = $colorrango[$p];
								   }
								} 
						?>
						<div class="btn  btn-rounded usractivo" style="background-color: <?php echo $color_btn ?>; color: #fff; font-size: 15px;" id="btnfusr" rel='tooltip' data-toggle="tooltip" data-placement="top"  title="<?php echo $referidosusr[$p] ?>" <?php if($referidosusr[$p]<>''){ ?>onClick="filtrarusr('<?php echo $referidosusr[$p]?>')"<?php } ?>><?php echo $referidos[$p] ?></div>

						</td> 
					<?php

					$sel_indirectos = "select * from 
						usuarios_preregistro,
							sistema_ganancia 
					where 
					us_patrocinador='".$referidosusr[$p]."'
					and us_estado=1 
					and sg_id=us_rango
					order by us_id ";
					$qry_indirectos = $mysqli->query($sel_indirectos) or die ($mysqli->error);
					  $total_indirectos[] = $qry_indirectos->num_rows;
									 
					while($res_indirectos = $qry_indirectos->fetch_object()){ 
						
						$referidos2[$p][] = substr($res_indirectos->us_nombre,0,1).substr($res_indirectos->us_apellido,0,1);
						$referidosusr2[$p][] = $res_indirectos->us_usuario;
						$colorrango2[$p][] = $res_indirectos->sg_color;	
					}


									   }  ?>
					</tr>
					<tr>
						<?php for($d=0;$d<=11;$d++){
						if($color==$c1){
							$color=$c2;
						}else{
							$color=$c1;
						}
						?>
					  <td height="20" colspan="3" bgcolor="<?php echo $color ?>" align="center"><img src="images/divisor.fw.png"></td>
						<?php  }  ?>
					  </tr>
				<tr>
				<?php for($h=0;$h<=11;$h++){
	if($color==$c1){
							$color=$c2;
						}else{
							$color=$c1;
						}
					if($referidosusr2[$h][0]==''){
								$color_btn0 = "#e8eaec";
							}else{
								$color_btn0 = $colorrango2[$h][0];
							} 
					if($referidosusr2[$h][1]==''){
								$color_btn1 = "#e8eaec";
							}else{
								$color_btn1 = $colorrango2[$h][1];
							} 

					?> 
				<td  align="center" bgcolor="<?php echo $color ?>" style="text-align: center;    padding: 0px;">
				
					<div class="btn   btn-rounded hijos"  style="background-color: <?php echo $color_btn0 ?>; color: #fff" data-toggle="tooltip" rel='tooltip' data-placement="top"  title="<?php echo $referidosusr2[$h][0] ?>" <?php if($referidosusr2[$h][0]<>''){ ?>onClick="filtrarusr('<?php echo $referidosusr2[$h][0]?>')<?php } ?> "><?php echo $referidos2[$h][0] ?></div>
					
				</td>
				 <td  bgcolor="<?php echo $color ?>" style="text-align: center;    padding: 0px;"> 
						
					<div  class="btn  btn-<?php if($total_indirectos[$h]>2){ ?>info<?php }else{ echo "light"; } ?>  btn-rounded hijos"
						 <?php if($total_indirectos[$h]>2){ ?>onClick="filtrarusr('<?php echo $referidosusr[$h]?>')" <?php } ?>
						 ><?php if($total_indirectos[$h]>2){ echo ($total_indirectos[$h]-2)."+"; } ?></div>
					 </td>
				<td  bgcolor="<?php echo $color ?>" align="center" style="text-align: center;    padding: 0px;">
					
				<div class="btn  btn-rounded hijos"  style="background-color: <?php echo $color_btn1 ?>; color: #fff"  rel='tooltip' data-toggle="tooltip" data-placement="top"  title="<?php echo $referidosusr2[$h][1] ?>" <?php if($referidosusr2[$h][1]<>''){ ?> onClick="filtrarusr('<?php echo $referidosusr2[$h][1]?>')"<?php } ?>><?php echo $referidos2[$h][1] ?></div>
				</td> 
				<?php } ?>


				</tr>
				<tr>
				<td colspan="25">&nbsp;</td>
				</tr>

				</table>
				</div>	 
