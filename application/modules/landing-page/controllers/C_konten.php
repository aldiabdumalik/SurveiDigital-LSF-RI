<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_konten extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Esurvey');
		$this->load->model('model/M_global', 'global');
	}

	public function index_form()
	{
		$data = $this->esurvey->front_end();
		$data['content'] = 'kreator/v_form';
		$data['js'] = 'kreator/js_form';
		$this->load->view('front-end/page', $data);
	}

	public function index_survei()
	{
		$data = array_merge($this->esurvey->front_end(), $this->esurvey->kreator());
		$data['content'] = 'kreator/v_kreator';
		$data['js'] = 'kreator/js_kreator';
		$this->load->view('front-end/page', $data);
	}

	function daftar_member()
	{
		$this->esurvey->not_ajax();
		if ($this->input->post('id') == "") {
			$kreator_id = $this->esurvey->code();
		}else{
			$kreator_id = $this->input->post('id');
		}
		$data = [
			'kreator_id' => $kreator_id,
			'kreator_nama' => $this->input->post('nama'),
			'kreator_nohp' => $this->input->post('nohp'),
			'kreator_email' => $this->input->post('email'),
			'kreator_yt' => $this->input->post('youtube'),
			'kreator_ig' => $this->input->post('ig'),
			'kreator_tw' => $this->input->post('twitter'),
			'kreator_blog' => $this->input->post('blog'),
			'kreator_fb' => $this->input->post('fb'),
			'kreator_tgl' => date('Y-m-d H:i:s')
		];
		$insert = $this->db->insert('m_kreator', $data);
		if ($insert) {
			$response = [
				'status' => true,
				'title' => 'Berhasil',
				'message' => 'Berhasil mengimport data',
				'data' => $data
			];
		}else{
			$response = [
				'status' => false,
				'title' => 'Gagal',
				'message' => 'Gagal mengimport data. Silahkan ulangi beberapa saat lagi'
			];
		}
		echo json_encode($response);
	}

	function submit_survey_member()
	{
		$this->esurvey->not_ajax();
		switch ($this->input->post('jawaban5')) {
			case 'lainnya':
				$jawaban5 = 'Lainnya: '.$this->input->post('soal5-jawaban7-lainnya');
				break;
			default:
				$jawaban5 = $this->input->post('jawaban5');
				break;
		}
		$data = [
			'survey_id' => $this->esurvey->code(),
			'kreator_id' => $this->input->post('member'),
			'survey_jawaban1' => $this->input->post('jawaban1'),
			'survey_jawaban2' => $this->input->post('jawaban2'),
			'survey_jawaban3' => $this->input->post('jawaban3-provinsi').', '.$this->input->post('jawaban3-kota'),
			'survey_jawaban4' => $this->input->post('jawaban4'),
			'survey_jawaban5' => $jawaban5,
			'survey_jawaban6' => $this->input->post('jawaban6'),
			'survey_jawaban7' => $this->input->post('jawaban7'),
			'survey_jawaban8' => $this->input->post('jawaban8'),
			'survey_jawaban9' => $this->input->post('jawaban9'),
			'survey_jawaban10' => $this->input->post('jawaban10'),
			'survey_jawaban11' => $this->input->post('jawaban11'),
			'survey_jawaban12' => $this->input->post('jawaban12'),
			'survey_jawaban13' => $this->input->post('jawaban13'),
			'survey_jawaban14' => $this->input->post('jawaban14'),
			'survey_jawaban15' => $this->input->post('jawaban15'),
			'survey_jawaban16' => $this->input->post('jawaban16'),
			'survey_jawaban17' => $this->input->post('jawaban17'),
			'survey_jawaban18' => $this->input->post('jawaban18'),
			'survey_jawaban19' => $this->input->post('jawaban19'),
			'survey_harapan' => $this->input->post('harapan'),
			'survey_pendapat' =>$this->input->post('pendapat'),
			'survey_tgl' => date('Y-m-d H:i:s')
		];
		$get_responden = $this->global->get_kreator_where($this->input->post('member'));
		$insert = $this->db->insert('tbl_survey_kreator', $data);
		if ($insert) {
			$response = [
				'status' => true,
				'data' => array_merge($get_responden, $data)
			];
		}
		echo json_encode($response);
	}

}

/* End of file C_konten.php */
/* Location: ./application/modules/landing-page/controllers/C_konten.php */