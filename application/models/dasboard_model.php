<?php

class dasboard_model extends CI_Model {
    
    var $counter=0;
    var $counter8=0;
    var $counter7=0;
    var $counter9=0;
    
    public function qry_ganancias($us_usuario) {
        return $this->db->query("select sum(u_valor_gana) as totalganado from usuarios_ganancias where u_idusuario='$us_usuario' and u_estado=1 and u_valor_tipo=0 order by u_id")->result_array();
    }
    
    public function qry_retiros($us_usuario) {
        return $this->db->query("select sum(r_valor) as totalretiro from usuarios_retiro where r_usuario='$us_usuario' and r_estado=1")->result_array();
    }

    public function sel_arbol($us_usuario) {
        $arrs = $this->db->query("SELECT *, month(us_fecha_registro) as mes FROM usuarios_preregistro where  us_estado=1 ")->result_array();
        $this->build_tree($arrs,$us_usuario,0);        
    }

    public function res_totrangos($us_usuario) {
        $datos = $this->db->query("select count(us_rango) as totalrango from usuarios_preregistro where us_patrocinador='$us_usuario' and us_estado=1; ")->row();
        return $datos;
    }
    
            
    function build_tree($arrs, $parent_id = 0, $level = 0) {
        foreach ($arrs as $arr) {
            if ($arr['us_patrocinador'] == $parent_id) {
                $this->$counter++;
                if ($arr['mes'] == 8) {
                    "<br>" . str_repeat("&nbsp;-", $level) . " " . $arr['us_usuario'] . "   <i>" . $arr['us_usuario'] . " </i>";
                    $this->$counter8++;
                }
                if ($arr['mes'] == 7) {
                    $this->$counter7++;
                }
                if ($arr['mes'] == 9) {
                    $this->$counter9++;
                }
                build_tree($arrs, $arr['us_usuario'], $level + 1);
                $arr['us_patrocinador'] . " " . $arr['us_patrocinador'];
            }
        }
    }

}
