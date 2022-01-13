<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	
	public function index()
	{
	//  $this->output->cache(6000);
        $data['cabecera']=$this->load->view('cabecera',array('pagina'=>'principal'),TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);                
		$this->load->view('principal',$data);
	}
}
