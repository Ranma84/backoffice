<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balance extends CI_Controller {


	public function index()
	{
		  $this->load->library('form_validation');
                  $this->form_validation->set_rules('usuario', 'Usuario', 'required');
                  $this->form_validation->set_rules('clave', 'clave', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $usuario=$this->input->post('usuario');
                    $clave=$this->input->post('clave');
                    
                    if (password_verify($usuario, $hash)) {
                        redirect('/account/login', 'refresh');
                    } else {
                        $data['mensaje']='La contraseña no es válida.';
                        $this->load->view('principal',$data);
                    }
                }
                else
                {          
                     $this->load->view('principal');
                }
	}
}
