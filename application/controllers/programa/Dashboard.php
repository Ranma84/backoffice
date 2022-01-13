<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
            $this->load->model('dasboard_model');
            $usuario=trim($_SESSION['us_usuario']);
            $sel_directos=$this->general_model->sel_directos($usuario);
            $data=null;
            $data['colorestrella']='';
            foreach ($sel_directos as $clave => $valor){
                $data['colorestrella']=$valor['sg_color'];
            }
            
            $sel_directos_activos=$this->general_model->sel_directos($usuario,1);
            $sel_directos_inactivos=$this->general_model->sel_directos($usuario,2);               
            $qry_aviso_rango=$this->general_model->lista_usuarios_rangos($usuario);
            $data['res_planes']=$this->general_model->planes($usuario);
            $data['res_totrangos']=$this->dasboard_model->res_totrangos($usuario);
            $datos=$this->general_model->avisos($usuario);
            $qry_indirectos=$this->general_model->sel_indirectos($usuario);
            
            $data['titulo']=$datos['titulo']; 
            $data['datos']=$datos['datos'];
            $data['fecha']=$datos['fecha'];
            
            $data['res_usr']=$sel_directos_activos;
            $data['total_directosactivos']=count($sel_directos);
            $data['total_directos']=$data['total_directosactivos'];
            $data['total_directosactivos_activos']=count($sel_directos_activos);
            $data['total_directosactivos_inactivos']=count($sel_directos_inactivos);
            $data['qry_aviso_rango']=count($qry_aviso_rango);
            $data['qry_indirectos']=$qry_indirectos;
            $data['view']='programa/dasboard';
            $this->load->view('partes/cuerpo',$data);
            unset($data,$sel_directos,$sel_directos_activos,$sel_directos_inactivos,$sel_directos_inactivos,$qry_aviso_rango);
            unset($clave,$valor);
	}
}
