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
			$data['bandara'] = $this->datacrud->tampil_databandara()->result();
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