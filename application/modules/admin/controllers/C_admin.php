<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model/M_global', 'global');
		$this->load->library('Esurvey');
	}

	public function index_dashboard()
	{
		$data = $this->esurvey->back_end();
		$data['title'] = 'Dashboard';
		$data['content'] = 'v_dashboard';
		$this->load->view('back-end/page', $data);
	}

	public function index_import_data()
	{
		$data = $this->esurvey->back_end();
		$data['title'] = 'Import Responden';
		$data['content'] = 'v_import_responden';
		$data['js'] = 'js_import_responden';
		$this->load->view('back-end/page', $data);
	}

	public function index_whatsapp()
	{
		$data = $this->esurvey->back_end();
		$data['title'] = 'Whatsapp';
		$data['content'] = 'v_whatsapp';
		$data['js'] = 'js_whatsapp';
		$this->load->view('back-end/page', $data);
	}

}

/* End of file C_admin.php */
/* Location: ./application/modules/admin/controllers/C_admin.php */