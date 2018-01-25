<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('datacrud');
    	$this->load->helper('url');
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$this->load->view('admin');
	}
	function edit_rute($ruteid){
  		$where = array('ruteid' => $ruteid);
  		$data['rute'] = $this->datacrud->edit_datarute($where,'rute')->result();
  		$this->load->view('v_ruteedit',$data);
 	}

	function rute(){
		$data['rute'] = $this->datacrud->tampil_datarute()->result();
		$this->load->view('v_rute',$data);
	}
	function proses_tambah(){
  		$depart = $this->input->post('depart');
  		$rute_from = $this->input->post('rutefrom');
  		$rute_to = $this->input->post('ruteto');
  		$price = $this->input->post('price');
 
  		$data = array(
   		'depart_at' => $depart,
   		'rute_from' => $rute_from,
   		'rute_to' => $rute_to,
   		'price' => $price
   		);
  		$this->datacrud->input_datarute($data,'rute');
  		redirect('admin/rute');
  	}
  		function hapus_rute($ruteid){
		$where = array('ruteid' => $ruteid);
  		$this->datacrud->hapus_datarute($where,'rute');
  		redirect('admin/rute');
	}
	function update_rute(){
 		$ruteid = $this->input->post('ruteid');
 		$depart = $this->input->post('depart');
 		$rute_from = $this->input->post('rutefrom');
 		$rute_to = $this->input->post('ruteto');
 		$price = $this->input->post('price');  
 		$data = array(
  			'depart_at' => $depart,
  			'rute_from' => $rute_from,
  			'rute_to' => $rute_to,
  			'price' => $price
 		);
 		$where = array(
  			'ruteid' => $ruteid
 		);
 		$this->datacrud->update_datarute($where,$data,'rute');
 		redirect('admin/rute');
	}
}

