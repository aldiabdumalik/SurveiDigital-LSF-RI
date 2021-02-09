<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Esurvey');
		$this->load->model('model/M_global', 'global');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	function auth()
	{
		$this->esurvey->not_ajax();
		$where = [
			'admin_email' => $this->input->post('email'),
			'admin_password' => $this->input->post('password')
		];
		$auth = $this->global->login($where);
		if ($auth) {
			$data = [
				'id' => $auth['admin_id'],
				'nama' => $auth['admin_nama'],
				'email' => $auth['admin_email'],
				'foto' => $auth['admin_foto'],
				'logged_in' => true
			];
			$this->session->set_userdata($data);
			$response = [
				'status' => true,
				'message' => 'Email & Password anda bentar. Tunggu beberapa saat...',
			];
		}else{
			$response = [
				'status' => false,
				'message' => 'Email & Password anda salah. Silahkan ulangi',
			];
		}
		echo json_encode($response);
	}
}

/* End of file C_login.php */
/* Location: ./application/modules/login/controllers/C_login.php */