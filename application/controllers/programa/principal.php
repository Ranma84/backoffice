<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('clave', 'clave', 'required');
        if ($this->form_validation->run() == FALSE) {
            $usuario = $this->input->post('usuario');
            $clave = $this->input->post('password');
            $datos=$this->general_model->usuarios_contrasenia($usuario);
            if (isset($datos['us_clave']) && !empty($datos['us_clave']) && password_verify(trim($clave),trim($datos['us_clave']))) {
                unset($datos['us_clave']);
                $this->session->set_userdata($datos);
                redirect('Dashboard', 'refresh');
            } else {
                $data['mensaje'] = 'La contraseña no es válida.';
                $this->load->view('programa', $data);
            }
            
        } else {
            $this->load->view('programa');
        }
    }

    public function generador() {
        echo 'Ingresando al Sistema'.date('d-m-Y H:i:s').'<br/>';
        $this->general_model->actualizar_claves();
        echo 'terminando al Sistema'.date('d-m-Y H:i:s').'<br/>';
    }

    public function prueba() {
        $this->load->view('programa/principal');
    }

}
