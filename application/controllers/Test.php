<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		ini_set('memory_limit', '1024M');
		$soal1 = [
			'7 - 12 tahun',
			'13 - 16 tahun',
			'17 - 20 tahun',
			'21 tahun ke atas'
		];
		$soal2 = [
			'Kreator Konten',
			'Siswa',
			'Mahasiswa',
			'Guru / Dosen',
			'PNS / ASN',
			'TNI / POLRI',
			'Wiraswasta',
			'Pekerja Lepas',
			'Ibu Rumah Tangga',
			'Lainnya'
		];
		$soal4 = [
			'< 1 tahun',
			'> 1 tahun',
			'> 3 tahun',
			'> 4 tahun',
			'> 5 tahun'
		];
		$soal5 = [
			'Hobi',
			'Gaya Hidup',
			'Rutinitas Kehidupan',
			'Humor',
			'Informasi',
			'Prank',
			'Lainnya: Game'
		];
		$soal6 = [
			'Ekonomi',
			'Popularitas',
			'Narsistis',
			'Berbagi informasi',
			'Meningkat taraf sosial pergaulan'
		];
		$soal7 = [
			'abcdef',
		];
		$soal8 = [
			'Ya',
			'Tidak',
			'Ragu-ragu'
		];
		$soal9 = [
			'Ya',
			'Tidak',
			'Ragu-ragu'
		];
		$soal10 = [
			'SU, R, D, NC-13',
			'SU, R, 17+, 21+',
			'SU, R13, D17, D21',
			'G, PG, PG-13, R'
		];
		$soal11 = [
			'Ya',
			'Tidak',
			'Ragu-ragu'
		];
		$soal12 = [
			'Ya',
			'Tidak',
			'Ragu-ragu'
		];
		$soal13 = [
			'Informasi film terbaru',
			'Prosedur menyensorkan film',
			'Cara melaporkan film yang dinilai tidak layak tonton',
			'Kriteria film yang tidak lolos sensor beserta contoh kasus'
		];
		$soal14 = [
			'Ya',
			'Tidak',
			'Ragu-ragu'
		];
		$soal15 = [
			'Menginformasikan kepada petugas / manajemen',
			'Langsung menegur yang bersangkutan dan/atau orangtuanya',
			'Menginformasikan melalui media sosial',
			'Tidak peduli'
		];
		$soal16 = [
			'1= tidak paham;',
			'2= kurang paham;',
			'3= cukup paham;',
			'4= paham namun tidak mengaplikasikan;',
			'5= sangat paham serta dijalankan sehari-hari;'
		];
		$soal17 = [
			'1= tidak paham;',
			'2= kurang paham;',
			'3= cukup paham;',
			'4= paham namun tidak mengaplikasikan;',
			'5= sangat paham serta dijalankan sehari-hari;'
		];
		$soal18 = [
			'Perkembangan teknologi dan ruang media yang terbuka luas',
			'Perubahan perilaku masyarakat',
			'Film dan media audio visual sebagai media pertahanan bangsa',
			'Melindungi jati diri dan budaya bangsa serta generasi penerus Indonesia'
		];
		$soal19 = [
			'Pendampingan Anak saat Menonton',
			'Pilihkan film atau tontonan yang sesuai dengan usianya',
			'Ingatkan anak pada hal-hal baik yang patut ditiru dan penanaman nilai-nilai positif',
			'Mengatur waktu menonton'
		];
		for ($i=0; $i < 2000; $i++) { 
			$data[] = [
				'survey_id' => $this->code(),
				'survey_jawaban1' => $soal1[array_rand($soal1)],
				'survey_jawaban2' => $soal2[array_rand($soal2)],
				'survey_jawaban4' => $soal4[array_rand($soal4)],
				'survey_jawaban5' => $soal5[array_rand($soal5)],
				'survey_jawaban6' => $soal6[array_rand($soal6)],
				'survey_jawaban7' => $soal7[array_rand($soal7)],
				'survey_jawaban8' => $soal8[array_rand($soal8)],
				'survey_jawaban9' => $soal9[array_rand($soal9)],
				'survey_jawaban10' => $soal10[array_rand($soal10)],
				'survey_jawaban11' => $soal11[array_rand($soal11)],
				'survey_jawaban12' => $soal12[array_rand($soal12)],
				'survey_jawaban13' => $soal13[array_rand($soal13)],
				'survey_jawaban14' => $soal14[array_rand($soal14)],
				'survey_jawaban15' => $soal15[array_rand($soal15)],
				'survey_jawaban16' => $soal16[array_rand($soal16)],
				'survey_jawaban17' => $soal17[array_rand($soal17)],
				'survey_jawaban18' => $soal18[array_rand($soal18)],
				'survey_jawaban19' => $soal19[array_rand($soal19)]
			];
		}
		$this->db->insert_batch('tbl_survey_kreator', $data);
	}

	public function survey_1()
	{
		ini_set('memory_limit', '1024M');
		$soal1 = [
			'7 - 12 tahun',
			'13 - 16 tahun',
			'17 - 20 tahun',
			'21 tahun ke atas'
		];
		$soal2 = [
			'Siswa',
			'Mahasiswa',
			'Guru / Dosen',
			'PNS / ASN',
			'TNI / POLRI',
			'Wiraswasta',
			'Pekerja Lepas',
			'Ibu Rumah Tangga',
			'Lainnya'
		];
		$soal4 = [
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli'
		];
		$soal5 = [
			'Undangan Instansi',
			'Undangan Komunitas',
			'Via WA Group',
			'Via Email',
			'Via MEDSOS',
			'Teman'
		];
		$soal6 = [
			'Banyak Informasi baru yang Saya peroleh dari kegiatan ini',
			'Senang dengan cara penyajian materi Sosialisasi',
			'Biasa saja',
			'Perlu didukung dengan materi audio visual yang terkini',
			'Materi yang disajikan sudah pernah didapatkan dari kegiatan sebelumnya',
			'Terbuka luas ruang tanya-jawab'
		];
		$soal7 = [
			'Dapat diajak berperan aktif untuk ikut mensosialisasikan LSF RI di lingkungan kota domisili',
			'Dapat berinteraksi langsung di dunia maya dengan pemateri LSF RI sebagai rujukan bila ada peristiwa terkait Lembaga Sensor Film RI',
			'Peran aktif LSF RI dalam berinteraksi dengan komunitas film dan content creator di daerah',
			'Adanya Tindak Lanjut dari Kegiatan Sosialisasi ini secara rutin per tiga bulan'
		];
		$soal8 = [
			'Mengikuti kembali kegiatan ini, untuk mengetahui informasi terbaru dari LSF RI',
			'Membantu menyebarkan informasi kegiatan kepada teman-teman yang belum pernah ikut',
			'Mereferensikan kegiatan ini kepada Orang tua via grup WA'
		];
		$soal9 = [
			'Informasi film terbaru',
			'Prosedur menyensorkan film',
			'Cara melaporkan film yang dinilai tidak layak tonton',
			'Kriteria film yang tidak lolos sensor beserta contoh kasus'
		];
		$soal10 = [
			'Memiliki surat tanda lulus sensor (STLS)',
			'Ada penggolongan usia penonton SU, R13, D17 dan D21',
			'Memiliki poin A dan B',
			'Tidak Tahu'
		];
		$soal11 = [
			'Menginformasikan kepada petugas / managemen',
			'Langsung menegur yang bersangkutan dan/atau orang tuanya',
			'Menginformasikan melalui media sosial',
			'Tidak peduli'
		];
		$soal12 = [
			'1= tidak paham;',
			'2= kurang paham;',
			'3= cukup paham;',
			'4= paham namun tidak mengaplikasikan;',
			'5= sangat paham serta dijalankan sehari-hari;'
		];
		$soal13 = [
			'1= tidak paham;',
			'2= kurang paham;',
			'3= cukup paham;',
			'4= paham namun tidak mengaplikasikan;',
			'5= sangat paham serta dijalankan sehari-hari;'
		];
		$soal14 = [
			'Perkembangan teknologi dan ruang media yang terbuka luas',
			'Perubahan perilaku masyarakat',
			'Film dan media audio visual sebagai media pertahanan bangsa',
			'Melindungi jati diri dan budaya bangsa serta generasi penerus Indonesia'
		];
		$soal15 = [
			'Pendampingan Anak saat Menonton',
			'Pilihkan film atau tontonan yang sesuai dengan usianya',
			'Ingatkan anak pada hal-hal baik yang patut ditiru dan penanaman nilai-nilai positif',
			'Mengatur waktu menonton'
		];
		for ($i=0; $i < 3000; $i++) { 
			$data[] = [
				'survey_id' => $this->code(),
				'survey_jawaban1' => $soal1[array_rand($soal1)],
				'survey_jawaban2' => $soal2[array_rand($soal2)],
				'survey_jawaban4' => $soal4[array_rand($soal4)],
				'survey_jawaban5' => $soal5[array_rand($soal5)],
				'survey_jawaban6' => $soal6[array_rand($soal6)],
				'survey_jawaban7' => $soal7[array_rand($soal7)],
				'survey_jawaban8' => $soal8[array_rand($soal8)],
				'survey_jawaban9' => $soal9[array_rand($soal9)],
				'survey_jawaban10' => $soal10[array_rand($soal10)],
				'survey_jawaban11' => $soal11[array_rand($soal11)],
				'survey_jawaban12' => $soal12[array_rand($soal12)],
				'survey_jawaban13' => $soal13[array_rand($soal13)],
				'survey_jawaban14' => $soal14[array_rand($soal14)],
				'survey_jawaban15' => $soal15[array_rand($soal15)]
			];
		}
		$this->db->insert_batch('tbl_survey', $data);
		// print_r($data);
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

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */