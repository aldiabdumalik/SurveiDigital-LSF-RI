<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin_action extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model/M_global', 'global');
		$this->load->library('Esurvey');
	}
	function get_soal()
	{
		$result = $this->global->get_soal_all();
		$response = [
			'status' => true,
			'data' => $result
		];
		echo json_encode($response);
	}
	function insert_soal()
	{
		$data = [
			'soal_code' => $this->input->post('soal'),
			'soal_deskripsi' => $this->input->post('deskripsi')
		];
		$cek = $this->global->get_where_row('m_soal', ['soal_code' => $data['soal_code']]);
		if (empty($cek)) {
			$insert = $this->global->insert('m_soal', $data);
			if ($insert) {
				$response = [
					'status' => true,
					'title' => 'Berhasil',
					'message' => 'Berhasil menambahkan soal'
				];
			}else{
				$response = [
					'status' => false,
					'title' => 'Gagal',
					'message' => 'Gagal menambahkan soal. Silahkan ulangi beberapa saat lagi'
				];
			}
		}else{
			$update = $this->global->update('m_soal', $data, ['soal_code' => $data['soal_code']]);
			if ($update) {
				$response = [
					'status' => true,
					'title' => 'Berhasil',
					'message' => 'Berhasil mengubah soal'
				];
			}else{
				$response = [
					'status' => false,
					'title' => 'Gagal',
					'message' => 'Gagal mengubaj soal. Silahkan ulangi beberapa saat lagi'
				];
			}
		}
		echo json_encode($response);
	}

	function insert_responden_excel()
	{
		$this->load->library('excel');
		if(isset($_FILES["file"]["name"])){
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet){
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++){
					$data[] = [
						'import_id' => $this->esurvey->code(),
						'import_nama' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
						'import_instansi' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
						'import_hp' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
						'import_hp_sensor' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
						'import_email' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
						'import_kategori' => $this->input->post('kategori'),
						'import_tgl' => date('Y-m-d H:i:s')
					];
				}
			}
			$insert = $this->db->insert_batch('m_responden_import', $data);
			if ($insert) {
				$response = [
					'status' => true,
					'title' => 'Berhasil',
					'message' => 'Berhasil mengimport data'
				];
			}else{
				$response = [
					'status' => false,
					'title' => 'Gagal',
					'message' => 'Gagal mengimport data. Silahkan ulangi beberapa saat lagi'
				];
			}
		}
		echo json_encode($response);
	}

	function get_responden_import()
	{
		$this->esurvey->not_ajax();
		$offset = $this->input->post('ke');
		$tgl = $this->input->post('tanggal');
		$kategori = $this->input->post('tipe');
		$where = 'DATE_FORMAT(import_tgl, "%Y-%m-%d") = "'. date('Y-m-d', strtotime($tgl)) .'" AND import_kategori = "'. $kategori .'" ';
		$result = $this->global->get_responden_all_limit($offset, $where);
		if (! empty($result)) {
			$response = [
				'status' => true,
				'data' => $result
			];
		}else{
			$response = [
				'status' => false,
				'message' => 'Data tidak ditemukan'
			];
		}
		echo json_encode($response);
	}

	public function kirim_video()
	{
		$result = $this->db->get('m_responden_import')->result_array();
		for ($i=0; $i < 1; $i++) { 
			$message = 'Halo '.$result[$i]['import_nama'].', '."\n".'Anda terpilih menjadi responden untuk survei digital resmi dari Lembaga Sensor Film Republik Indonesia, Tonton video personal Anda, dan raih kesempatan untuk mendapatkan satu buah smartphone serta voucher belanja dari LSF RI.'."\n\n".'
				Ketik "YA" agar Anda dapat me-klik tautan survei digital dari LSF RI dibawah ini.';
			$video = 'umum.mp4';
			$nomor = '081519440925'; //$result[$i]['import_hp'];
			if (file_exists('./uploads/video/' . $video)) {
				$this->api_wa($message, $nomor, $video);
			}
		}
	}

	public function api_wa($message, $no, $video)
	{
		$url = "https://surveidigital.lsf.go.id/uploads/video/".$video;
		$message = $message;
		$phone_no = $no;

		$phone_no = preg_replace( "/(\n)/", ",", $phone_no );
		$phone_no = preg_replace( "/(\r)/", "", $phone_no );

		$data = array(
			"phone_no" => $phone_no, 
			"key" => "75023d564c5e0141d47f238f3f0306852dae5a9f5b82c61d", 
			"url" => $url, 
			"message" => $message
		);
		$data_string = json_encode($data);
		$ch = curl_init('http://144.91.78.129/api/send_video_url');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($data_string))
		);
		$result = curl_exec($ch);
	}
}

/* End of file C_admin_action.php */
/* Location: ./application/modules/admin/controllers/C_admin_action.php */