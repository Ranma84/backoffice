<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	
	public function index()
	{  
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nom', 'Nombre', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                     
                 /*   $this->load->library('email');
                    $cliente=$this->input->post('nom');
                    $correo=$this->input->post('mail');
                    $telefono=$this->input->post('tel');
                    $consulta=$this->input->post('msj');

                    $this->email->from('ordenes@pruf-ec.com', 'Sistemas');
                    $this->email->to('someone@example.com');
                    $mensaje = "\nCONTÁCTANOS\n\nEstimado(a) tiene un nuevo mensaje del Sr.(a) ".$cliente.".\n\n'' " .$consulta . " ''\n\nDatos del contacto\n1. Correo: ".$correo."\n2. Teléfono: ".$telefono."\n\n"  ."---------------------------------------------------------------------------------" . "\n¡RECUERDE!" ."\n" ."Este correo electrónico es generado por el formulario de contáctanos. " . "\n" ."---------------------------------------------------------------------------------" . "\n";
  
                    $this->email->subject('SERVICIO CONTACTANOS - PRUF');
                    $this->email->message($mensaje);

                    $this->email->send();
                    */
                    
                    $data['cabecera']=$this->load->view('cabecera',array('pagina'=>'contacto'),TRUE);
                    $data['footer']=$this->load->view('footer','',TRUE);               
                    $this->load->view('contacto',$data);
                }
                else
                {
                        $data['cabecera']=$this->load->view('cabecera',array('pagina'=>'contacto'),TRUE);
                        $data['footer']=$this->load->view('footer','',TRUE);               
                        $this->load->view('contacto',$data);
                }
	}
}
