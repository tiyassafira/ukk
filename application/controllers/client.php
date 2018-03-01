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
		$data['from']= $this->datacrud->from()->result();
		$data['to']= $this->datacrud->to()->result();
		$this->load->view('v_home',$data);
	}
	function carirute(){
		$from = $this->input->get('from');
		$to = $this->input->get('to');
		$date = date('Y-m-d',strtotime($this->input->get('date')));
		$qty = $this->input->get('qty');

		$query = $this->datacrud->tampil_rute($from,$to,$date)->result();
		$data['rute'] = $query;
		$this->load->view('v_client_rutes',$data,$qty);
	}
	public function reservation($id){
 		$where =  $id;
 		$query = $this->datacrud->join_clientreserve($where);
 		$data['seat'] = $this->datacrud->seat($where)->result();
 		$data['filter'] = $this->datacrud->filterseat($where)->result();
  		$data['reserve'] = null;
  		if($query){
   			$data['reserve'] =  $query;
  		}
 		$this->load->view('v_reservation',$data);
	}
	public function pesan(){
		$ruteid = $this->input->post('ruteid');
		$namapemesan = $this->input->post('namapemesan');
		$alamatpemesan = $this->input->post('alamatpemesan');
		$emailpemesan = $this->input->post('emailpemesan');
		$notelpemesan = $this->input->post('notelpemesan');
		$jenkelpenumpang = $this->input->post('jenkelpenumpang');
		$namapenumpang = $this->input->post('namapenumpang');
		$qty = $this->input->post('qty');
		$length = 10;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$kd_resv = '';
		for ($i = 0; $i < $length; $i++) {
			$kd_resv .= $characters[rand(0, $charactersLength - 1)];
		}
		$value = $this->input->post('kursi');
		$no = 0;
		
		foreach ($value as $seat) {
			$namaseat[$no] = $seat;
			$no++;
		}
		for ($i=0; $i < $qty; $i++) { 
			$data= array(
				'jenkel' => $this->input->post('jenkelpenumpang['.$i.']'),
				'nama' => $this->input->post('namapenumpang['.$i.']'),
				'kd_resv' => $kd_resv,
				'seat' => $namaseat[$i]
			);
			$this->db->insert('customer',$data);
		}
		$data = array(
			'ruteid' => $ruteid,
			'kd_resv' => $kd_resv,
			'namapemesan' => $namapemesan,
			'alamatpemesan' => $alamatpemesan,
			'emailpemesan' => $emailpemesan,
			'notelpemesan' => $notelpemesan,
			'status' => 'Menunggu Pembayaran'
		);
		
		$this->db->insert('reservation', $data);
		
		redirect('client/confirmation/'.$kd_resv);
	}

}