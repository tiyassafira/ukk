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
		$data['maskapai'] = $this->datacrud->tampil_maskapai()->result();
		$this->load->view('v_ruteedit',$data);
	}

	function edit_maskapai($maskapaiid){
		$where = array('id' => $maskapaiid);
		$data['maskapaiedit'] = $this->datacrud->edit_datarute($where,'transportation')->result();
		$this->load->view('v_maskapai_edit', $data);
	}

	function rute(){
		$data['maskapai'] = $this->datacrud->tampil_maskapai()->result();
		$data['bandara'] = $this->datacrud->tampil_data_bandara()->result();
		$this->load->view('v_rute',$data);
	}
	function proses_tambah(){
		$depart = $this->input->post('depart');
		$rute_from = $this->input->post('rutefrom');
		$rute_to = $this->input->post('ruteto');
		$price = $this->input->post('price');
		$maskapai = $this->input->post('maskapai');

		$data = array(
			'depart_at' => $depart,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'transportid' => $maskapai,
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
		$maskapai = $this->input->post('maskapai');
		$price = $this->input->post('price');  
		$data = array(
			'depart_at' => $depart,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'transportid' =>$maskapai,
			'price' => $price
			);
		$where = array(
			'ruteid' => $ruteid
			);
		$this->datacrud->update_datarute($where,$data,'rute');
		redirect('admin/rute');
	}

	function update_maskapai(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty
			);
		$this->datacrud->update_maskapai($id,$data,'transportation');
		redirect('admin/maskapai_data');
	}
	function rute_data(){
		$data = new stdClass();
		$data->rute = $this->datacrud->join_rute_maskapai()->result();
		// var_dump($data);
		$this->load->view('v_rute_data', $data);
	}
	function maskapai(){
		$this->load->view('v_maskapai');

	}
	function maskapai_data(){
		$data['maskapai']=$this->datacrud->tampil_maskapai()->result();
		$this->load->view('v_maskapai_data',$data);
	}
	function hapus_maskapai($id){
		$where = array('id' => $id);
		$this->datacrud->hapus_maskapai('transportation', $where);
		redirect('admin/maskapai_data');
	}
	function proses_tambah_maskapai(){
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty
			);
		$this->datacrud->input_maskapai($data,'transportation');
		redirect('admin/maskapai_data');
	}
	function proses_tambahbandara(){
		$code = $this->input->post('kode');
		$name = $this->input->post('nama');
		$city = $this->input->post('kota');
		
		$data = array(
			'code' => $code,
			'name' => $name,
			'city' => $city
		);

		$this->datacrud->input_data_bandara($data, 'airport');
		redirect('admin/bandara');

	}
	function data_bandara(){
		$data['airport'] = $this->datacrud->tampil_data_bandara()->result();
		$this->load->view('v_data_bandara',$data);
	}
	function bandara(){
		$this->load->view('v_bandara');
	}
	function hapus_bandara($id){
		$where = array('id' => $id);
		$this->datacrud->hapus_datarute($where,'airport');
		redirect('admin/data_bandara');
	}

	function edit_bandara($id){
		$where = array('id' => $id);
		$data['bandara'] = $this->datacrud->edit_datarute($where,'airport')->result();
		$this->load->view('v_bandaraedit',$data);
	}
	function update_bandara(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$city = $this->input->post('city');  
		$data = array(
			'code' => $code,
			'name' => $name,
			'city' => $city,
			'id' =>$airport,
			);
		$where = array(
			'id' => $id
			);
		$this->datacrud->update_datarute($where,$data,'airport');
		redirect('admin/data_bandara');
	}

}