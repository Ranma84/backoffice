<?php

class general_model extends CI_Model {

    public function lista_anuncios() {
        $data = $this->db->query("select * from anuncios where an_para='$_SESSION[us_usuario]' and an_visto=0 order by an_id desc")->result_array();
        return $data;
    }

    public function lista_usuarios_rangos() {
        $data = $this->db->query("select * from usuarios_rangos where ur_usuario='$_SESSION[us_usuario]' and ur_confetti_envio=0 ")->result_array();
        return $data;
    }
    
    public function planes($usuario) {
        $data = $this->db->query("select * from usuarios_plan INNER JOIN usuarios_preregistro where up_usuario='$usuario' and up_usuario=us_usuario")->row();
        return $data;
    }
    
    public function avisos($usuario) {
        $fecha_actual = date("Y-m-d");
        $antesdeayer = date("Y-m-d",strtotime($fecha_actual."+ 2 day"));   
        $query = "select * 
			from usuarios_preregistro inner join usuarios_plan
			on 
			us_patrocinador='$usuario'
			and us_usuario=up_usuario
			and up_fecha_fin='$antesdeayer'
			ORDER BY RAND()
			limit 1";
        $row = $this->db->query($query)->row_array();
        $data=null;
        if( isset($row) && !empty($row) && count($row)>0){
                $data['titulo'] = "Tu Promotor: <i>".$row['us_usuario']."</i> le quedan pocos días de estar activo."; 
                $data['datos'] = "Escribele para recordar su recompra <a href='https://wa.me/593".$row['us_telefono']."' target=_blank>".$row['us_telefono']."</a>";
                $data['fecha'] = "Fecha Vencimiento: ".$row['up_fecha_fin'];
        }else{
                $data['titulo'] = "Nuevo usuario activo";
                $data['datos'] = "Codigo 121 -  Kit 2 adquirido";
                $data['fecha'] = "15 Minutes";	
        }
        return $data;
    }
    
    
    
    public function sel_indirectos($usuario){
        $data=$this->db->query("SELECT DISTINCT usuarios_preregistro.us_id,usuarios_preregistro.us_nombre,usuarios_preregistro.us_apellido,"
                . "usuarios_preregistro.us_usuario,usuarios_preregistro.us_estado,COUNT(usuarios_preregistro.us_id) as cantidad FROM usuarios_preregistro "
                . "INNER JOIN sistema_ganancia ON us_patrocinador IN (SELECT DISTINCT us_usuario FROM usuarios_preregistro INNER JOIN sistema_ganancia "
                . "ON  us_patrocinador='$usuario' AND sg_id=us_rango) AND us_rango=sg_id AND us_estado=1 LEFT JOIN usuarios_preregistro AS directosindirectos "
                . "ON directosindirectos.us_patrocinador=usuarios_preregistro.us_usuario GROUP BY usuarios_preregistro.us_id,"
                . "usuarios_preregistro.us_nombre,usuarios_preregistro.us_apellido,usuarios_preregistro.us_usuario,usuarios_preregistro.us_estado "
                . "order by us_id;")->result_array();       
        return $data;
    }
    
    
    public function sel_directos($usuario,$estado='') {
        $query='';
        if(!empty($estado))
            $query="AND us_estado=$estado";
        $data = $this->db->query("SELECT 
usuarios_preregistro.us_id, 
usuarios_preregistro.us_patrocinador, 
usuarios_preregistro.us_nombre, 
usuarios_preregistro.us_apellido, 
usuarios_preregistro.us_usuario,
usuarios_preregistro.us_estado, 
usuarios_preregistro.us_kit, 
usuarios_preregistro.us_rango, 
usuarios_preregistro.us_genero, 
usuarios_preregistro.us_foto, 
usuarios_preregistro.us_direccion, 
usuarios_preregistro.us_pais, 
usuarios_preregistro.us_provincia, 
usuarios_preregistro.us_ciudad,
usuarios_preregistro.us_cedula,
usuarios_preregistro.us_telefono,
usuarios_preregistro.us_fechanaci,
usuarios_preregistro.us_email,
usuarios_preregistro.us_ctabanco,
usuarios_preregistro.us_bancoinstitucion,
usuarios_preregistro.us_tipoctabco, 
usuarios_preregistro.us_tipocta,
sistema_ganancia.sg_id, 
sistema_ganancia.sg_rango, 
sistema_ganancia.sg_color, 
sistema_ganancia.sg_gana_1gen, 
sistema_ganancia.sg_gana_2gen, 
sistema_ganancia.sg_gana_3gen, 
sistema_ganancia.sg_gana_4gen, 
sistema_ganancia.sg_gana_5gen, 
sistema_ganancia.sg_gana_6gen, 
sistema_ganancia.sg_valorxpromotor, 
sistema_ganancia.sg_estado  
FROM usuarios_preregistro INNER JOIN sistema_ganancia
ON us_patrocinador='$usuario'
AND sg_id=us_rango $query")->result_array();
        return $data;
    }
    
    public function usuarios_contrasenia($usuario) {
        return  $this->db->query("SELECT usuarios_preregistro.us_id,usuarios_preregistro.us_usuario,usuarios_preregistro.us_nombre,usuarios_preregistro.us_apellido,
usuarios_preregistro.us_clave,usuarios_preregistro.us_foto,usuarios_preregistro.us_tipocta,sistema_ganancia.*
FROM usuarios_preregistro INNER JOIN sistema_ganancia ON usuarios_preregistro.us_usuario='$usuario' and 
sistema_ganancia.sg_id=usuarios_preregistro.us_rango")->row_array();
    }

    public function actualizar_claves() {
        $data = $this->db->query("SELECT us_usuario,us_clave FROM usuarios_preregistro;")->result_array();
        foreach ($data as $clave => $valor) {
            $clave_nueva=$this->generar_aleatorio(8);
            $clave = password_hash($clave_nueva, PASSWORD_DEFAULT);
            $this->db->set('us_clave',$clave);
            $this->db->where('us_usuario', $valor['us_usuario']);
            $this->db->update('usuarios_preregistro');
            echo $valor['us_usuario'].'--'.$clave_nueva.'===='.$clave.'   <br/>';
        }
    }

    public function generar_aleatorio($tamanio) {
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#%^&*()_,./<>?;:[]{}\|=+';
        $tamanio_len=strlen($str)-1;
        $password = '';
        for ($i = 0; $i < $tamanio; $i++) {
            $password .= substr($str,rand(0,$tamanio_len), 1);
        }
        return $password;
    }
}
