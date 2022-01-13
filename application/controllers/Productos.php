<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	
	public function index()
	{
    //  $this->output->cache(6000);
        $data['cabecera']=$this->load->view('cabecera',array('pagina'=>'productos'),TRUE);
    	$data['footer']=$this->load->view('footer','',TRUE);               
		$this->load->view('productos',$data);
	}
}
