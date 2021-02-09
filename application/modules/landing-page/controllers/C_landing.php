<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('esurvey');
		$this->load->model('model/M_global', 'global');
	}

	public function index()
	{
		$this->load->view('v_landing');
	}

	public function index_form()
	{
		$data = $this->esurvey->front_end();
		$data['content'] = 'v_form';
		$data['js'] = 'js_form';
		$this->load->view('front-end/page', $data);
	}

	public function index_survey()
	{
		$data = array_merge($this->esurvey->front_end(), $this->esurvey->member());
		$data['content'] = 'v_member';
		$data['js'] = 'js_member';
		$this->load->view('front-end/page', $data);
	}

	public function insert_survey()
	{
		// $this->esurvey->not_ajax();
		$input = file_get_contents("php://input");
		$input = json_decode($input);

		$kode = $this->esurvey->code();

		$jawaban = [
			'id_responden' => $kode,
			'jawaban_1' => $kode,
			'jawaban_2' => strip_tags($input->jawaban_2),
			'jawaban_3' => strip_tags($input->jawaban_3),
			'jawaban_4' => strip_tags($input->jawaban_4),
			'jawaban_5' => strip_tags($input->jawaban_5),
			'jawaban_6' => strip_tags($input->jawaban_6),
			'jawaban_7' => strip_tags($input->jawaban_7),
			'jawaban_8' => strip_tags($input->jawaban_8),
			'jawaban_9' => strip_tags($input->jawaban_9),
			'jawaban_10' => strip_tags($input->jawaban_10),
			'jawaban_11' => strip_tags($input->jawaban_11),
			'jawaban_12' => strip_tags($input->jawaban_12),
			'jawaban_13' => strip_tags($input->jawaban_13),
			'jawaban_14' => strip_tags($input->jawaban_14),
			'jawaban_15' => strip_tags($input->jawaban_15),
			'jawaban_16' => strip_tags($input->jawaban_16),
			'jawaban_17' => strip_tags($input->jawaban_17),
			'jawaban_18' => strip_tags($input->jawaban_18),
			'jawaban_19' => strip_tags($input->jawaban_19)
		];
		$this->db->insert('tbl_jawaban', $jawaban);
		$biodata = [
			'code_responden' => $kode,
			'nama_responden' => strip_tags($input->nama),
			'email_responden' => strip_tags($input->email),
			'nohp_responden' => strip_tags($input->nohp),
			'jenkel_responden' => strip_tags($input->jenkel),
			'usia_responden' => strip_tags($input->usia),
			'pendidikan_responden' => strip_tags($input->pendidikan),
			'pekerjaan_responden' => strip_tags($input->pekerjaan),
			'provinsi_responden' => strip_tags($input->provinsi),
			'kota_responden' => strip_tags($input->kota),
			'kecamatan_responden' => strip_tags($input->kecamatan),
			'pengeluaran_responden' => strip_tags($input->pengeluaran)
		];
		$this->db->insert('tbl_responden_web', $biodata);
		$response = [
			'status' => true,
			'code' => $kode,
			'nama' => strip_tags($input->nama)
		];
		echo json_encode($response);
	}

	public function submit_survey_member()
	{
		$this->esurvey->not_ajax();
		switch ($this->input->post('jawaban6')) {
			case 'lainnya':
				$jawaban6 = 'Lainnya: '.$this->input->post('soal6-jawaban7-lainnya');
				break;
			default:
				$jawaban6 = $this->input->post('jawaban6');
				break;
		}
		$data = [
			'survey_id' => $this->esurvey->code(),
			'responden_id' => $this->input->post('member'),
			'survey_jawaban1' => $this->input->post('jawaban1'),
			'survey_jawaban2' => $this->input->post('jawaban2'),
			'survey_jawaban3' => $this->input->post('jawaban3-provinsi').', '.$this->input->post('jawaban3-kota'),
			'survey_jawaban4' => $this->input->post('jawaban4'),
			'survey_jawaban5' => $this->input->post('jawaban5'),
			'survey_jawaban6' => $jawaban6,
			'survey_jawaban7' => $this->input->post('jawaban7'),
			'survey_jawaban8' => $this->input->post('jawaban8'),
			'survey_jawaban9' => $this->input->post('jawaban9'),
			'survey_jawaban10' => $this->input->post('jawaban10'),
			'survey_jawaban11' => $this->input->post('jawaban11'),
			'survey_jawaban12' => $this->input->post('jawaban12'),
			'survey_jawaban13' => $this->input->post('jawaban13'),
			'survey_jawaban14' => $this->input->post('jawaban14'),
			'survey_jawaban15' => $this->input->post('jawaban15'),
			'survey_harapan' => $this->input->post('harapan'),
			'survey_pendapat' =>$this->input->post('pendapat'),
			'survey_tgl' => date('Y-m-d H:i:s')
		];
		$get_responden = $this->global->get_responden_where($this->input->post('member'));
		$insert = $this->db->insert('tbl_survey', $data);
		if ($insert) {
			$response = [
				'status' => true,
				'data' => array_merge($get_responden, $data)
			];
		}
		echo json_encode($response);
	}

	function daftar_member()
	{
		$this->esurvey->not_ajax();
		if ($this->input->post('id') == "") {
			$responden_id = $this->esurvey->code();
		}else{
			$responden_id = $this->input->post('id');
		}
		$data = [
			'responden_id' => $responden_id,
			'responden_nama' => $this->input->post('nama'),
			'responden_nohp' => $this->input->post('nohp'),
			'responden_email' => $this->input->post('email'),
			'responden_alamat' => $this->input->post('alamat'),
			'responden_tgl' => date('Y-m-d H:i:s')
		];
		$insert = $this->db->insert('m_responden', $data);
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

	function get_provinsi()
	{
		$this->esurvey->not_ajax();
		$result = $this->global->get_provinsi_all();
		if (! empty($result)) {
			$response = [
				'status' => true,
				'data' => $result
			];
		}
		echo json_encode($response);
	}

	function get_kota()
	{
		$this->esurvey->not_ajax();
		$result = $this->global->get_kota($this->input->post('provinsi'));
		if (! empty($result)) {
			$response = [
				'status' => true,
				'data' => $result
			];
		}
		echo json_encode($response);
	}

	function get_kecamatan()
	{
		$this->esurvey->not_ajax();
		$result = $this->global->get_kecamatan($this->input->post('kota'));
		if (! empty($result)) {
			$response = [
				'status' => true,
				'data' => $result
			];
		}
		echo json_encode($response);
	}

}

/* End of file C_landing.php */
/* Location: ./application/modules/landing-page/controllers/C_landing.php */