<?php

/**
* 
*/
class Client extends CI_Controller
{
	
	function __construct()
	{ 
		parent::__construct();
		$this->load->model('datacrud');
	
	}
	function index(){
			$data['airport'] = $this->datacrud->tampil_data_bandara()->result();
			$this->load->view('v_home',$data);
	}
	function carirute(){
		$from = $this->input->post('from');
		$to = $this->input->post('to');

		$query = $this->datacrud->tampil_rute($from,$to);
		$data['rute'] = $query;
		$this->load->view('v_client_rutes',$data);
	}
}