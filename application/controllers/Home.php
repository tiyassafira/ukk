<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	function __construct(){
		parent::__construct();
		$this->load->model('User_m');
	}

	public function index()
	{
		// $newdata = array(
		// 	'username'=>'admin'
		// 	);
		// $this->session->set_userdata($newdata);
		if (!isset($_SESSION['username'])) {
			$this->load->view('v_home');
		}else {
			redirect('admin');
		}
	}

	function action(){
		if ($this->input->post('submit')) {
			# code...
			$username=$this->input->post('uname');
			$password=md5($this->input->post('psw'));

			// var_dump($username, $password);
			$checkdata=array(
				'username'=>$username,
				'password'=>$password
				);
			$rsl=$this->User_m->check_login('user',$checkdata)->num_rows();
			if ($rsl>0) {
				$datasession=array(
					'username'=>$username,
					'status'=>'login'
					);
				$this->session->set_userdata($datasession);
				redirect('admin');
				# code...
			}else{
				echo "Not Registered";
			}
		}
	}

	function logout (){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
