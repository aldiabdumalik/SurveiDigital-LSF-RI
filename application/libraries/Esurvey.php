<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Esurvey {

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function front_end()
	{
		$data = [
			'css' => 'front-end/css',
			'navbar' => 'front-end/navbar',
			'footer' => 'front-end/footer',
			'javascript' => 'front-end/javascript',
		];
		return $data;
	}

	function back_end()
	{
		$data = [
			'css' => 'back-end/css',
			'navbar' => 'back-end/navbar',
			'sidebar' => 'back-end/sidebar',
			'footer' => 'back-end/footer',
			'javascript' => 'back-end/javascript',
		];
		return $data;
	}

	function member()
	{
		$data = [
			'salam' => 'member/salam',
			'soal1' => 'member/soal1',
			'soal2' => 'member/soal2',
			'soal3' => 'member/soal3',
			'soal4' => 'member/soal4',
			'soal5' => 'member/soal5',
			'soal6' => 'member/soal6',
			'soal7' => 'member/soal7',
			'soal8' => 'member/soal8',
			'soal9' => 'member/soal9',
			'soal10' => 'member/soal10',
			'soal11' => 'member/soal11',
			'soal12' => 'member/soal12',
			'soal13' => 'member/soal13',
			'soal14' => 'member/soal14',
			'soal15' => 'member/soal15',
			'soal16' => 'member/soal16',
			'soal17' => 'member/soal17',
			'soal18' => 'member/soal18',
			'soal19' => 'member/soal19',
		];
		return $data;
	}

	function kreator()
	{
		$data = [
			'soal1' => 'kreator/soal/soal1',
			'soal2' => 'kreator/soal/soal2',
			'soal3' => 'kreator/soal/soal3',
			'soal4' => 'kreator/soal/soal4',
			'soal5' => 'kreator/soal/soal5',
			'soal6' => 'kreator/soal/soal6',
			'soal7' => 'kreator/soal/soal7',
			'soal8' => 'kreator/soal/soal8',
			'soal9' => 'kreator/soal/soal9',
			'soal10' => 'kreator/soal/soal10',
			'soal11' => 'kreator/soal/soal11',
			'soal12' => 'kreator/soal/soal12',
			'soal13' => 'kreator/soal/soal13',
			'soal14' => 'kreator/soal/soal14',
			'soal15' => 'kreator/soal/soal15',
			'soal16' => 'kreator/soal/soal16',
			'soal17' => 'kreator/soal/soal17',
			'soal18' => 'kreator/soal/soal18',
			'soal19' => 'kreator/soal/soal19',
			'soal20' => 'kreator/soal/soal20',
			'kds' => 'kreator/soal/kds',
		];
		return $data;
	}

	function not_ajax()
	{
		if (!$this->CI->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}
	}

	function code($length = 6) 
	{
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ01235ABCDEFGHIJKLMNOPQRSTU6789VWSYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}