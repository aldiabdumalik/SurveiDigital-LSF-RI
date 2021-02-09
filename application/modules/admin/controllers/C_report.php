<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model/M_global', 'global');
		$this->load->library('Esurvey');
	}

	public function index_personalize()
	{
		$data = $this->esurvey->back_end();
		$data['title'] = 'Personalize';
		$data['content'] = 'report/v_personalize_data';
		$data['js'] = 'report/js_personalize_data';
		$data['survei'] = $this->db->get('r_personalize')->result_array();
		$this->load->view('back-end/page', $data);
	}

	public function index_kreator()
	{
		$data = $this->esurvey->back_end();
		$data['title'] = 'Konten Kreator';
		$data['content'] = 'report/v_kreator_data';
		$data['js'] = 'report/js_kreator_data';
		$data['survei'] = $this->db->get('r_kreator')->result_array();
		$this->load->view('back-end/page', $data);
	}

}

/* End of file C_report.php */
/* Location: ./application/modules/admin/controllers/C_report.php */