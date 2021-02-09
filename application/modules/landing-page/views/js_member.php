<script>
$(document).ready(function () {
	const base_url = '<?= base_url() ?>';

	get_provinsi();
	$('#soal1-domisili-provinsi').change(function (e) {
		e.preventDefault();
		let id = $('#soal1-domisili-provinsi').val();
		get_kota(id);
	});
	$('#soal1-domisili-kota').change(function (e) {
		e.preventDefault();
		let id = $('#soal1-domisili-kota').val();
		get_kecamatan(id);
	});


	$('#btn-salam').click(function () {
		$('#salam').addClass('collapse');
		$('#soal-1').removeClass('collapse');
	});

	$('#btn-soal1').click(function () {

		let nama = $('#soal1-nama').val();
		let email = $('#soal1-email').val();
		let nohp = $('#soal1-nohp').val();
		let jenkel = $('input[type=radio][name=jawaban1-jenkel]:checked').val();
		let usia = $('input[type=radio][name=jawaban1-usia]:checked').val();
		let pendidikan = $('input[type=radio][name=jawaban1-pendidikan]:checked').val();
		let pekerjaan = $('input[type=radio][name=jawaban1-pekerjaan]:checked').val();
		let provinsi = $('#soal1-domisili-provinsi').val();
		let kota = $('#soal1-domisili-kota').val();
		let kecamatan = $('#soal1-domisili-kecamatan').val();
		let pengeluaran = $('input[type=radio][name=jawaban1-pengeluaran]:checked').val()

		if (

			$('#soal1-nama').val() != "" &&
			$('#soal1-email').val() != "" &&
			$('#soal1-nohp').val() != "" &&
			$('input[type=radio][name=jawaban1-jenkel]:checked').val() != undefined &&
			$('input[type=radio][name=jawaban1-usia]:checked').val() != undefined &&
			$('input[type=radio][name=jawaban1-pendidikan]:checked').val() != undefined &&
			$('input[type=radio][name=jawaban1-pekerjaan]:checked').val() != undefined &&
			$('#soal1-domisili-provinsi').val() != "" &&
			$('#soal1-domisili-kota').val() != "" &&
			$('#soal1-domisili-kecamatan').val() != "" &&
			$('input[type=radio][name=jawaban1-pengeluaran]:checked').val() != undefined 

		) {
			if (pekerjaan == 'Lainnya' && $('#jawaban1-pekerjaan-lainnya').val() == "") {
				alert('Mohon sebutkan pekerjaan');
				return false;
			}else{
				let pekerjaan_fix = (pekerjaan != "Lainnya" ? pekerjaan : pekerjaan + ": " + $('#jawaban1-pekerjaan-lainnya').val())
				let sekarang = {
					nama : $('#soal1-nama').val(),
					email : $('#soal1-email').val(),
					nohp : $('#soal1-nohp').val(),
					jenkel : $('input[type=radio][name=jawaban1-jenkel]:checked').val(),
					usia : $('input[type=radio][name=jawaban1-usia]:checked').val(),
					pendidikan : $('input[type=radio][name=jawaban1-pendidikan]:checked').val(),
					pekerjaan : pekerjaan_fix,
					provinsi : $('#soal1-domisili-provinsi option:selected').text(),
					kota : $('#soal1-domisili-kota option:selected').text(),
					kecamatan : $('#soal1-domisili-kecamatan option:selected').text(),
					pengeluaran : $('input[type=radio][name=jawaban1-pengeluaran]:checked').val()
				}
				window.localStorage.setItem('jawaban', JSON.stringify(sekarang));
				$('#soal-1').addClass('collapse');
				$('#soal-2').removeClass('collapse');
			}
		}else{
			alert('Mohon untuk melengkapi data terlebih dahulu');
			return false;
		}
	});
	$('#btn-soal2').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban2]:checked').val() != undefined) {
			let no2 = {
				jawaban_2 : $('input[type=radio][name=jawaban2]:checked').val()
			}
			let jawaban_2 = Object.assign(sebelumnya, no2);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_2));

			$('#soal-2').addClass('collapse');
			$('#soal-3').removeClass('collapse');
		}
		
	});
	$('#btn-soal3').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban3]:checked').val() != undefined) {
			let sekarang = {
				jawaban_3 : $('input[type=radio][name=jawaban3]:checked').val()
			}
			let jawaban_3 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_3));

			$('#soal-3').addClass('collapse');
			$('#soal-4').removeClass('collapse');
		}
	});
	$('#btn-soal4').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban4]:checked').val() != undefined) {
			let sekarang = {
				jawaban_4 : $('input[type=radio][name=jawaban4]:checked').val()
			}
			let jawaban_4 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_4));

			$('#soal-4').addClass('collapse');
			$('#soal-5').removeClass('collapse');
		}
	});
	$('#btn-soal5').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban5]:checked').val() != undefined) {
			let sekarang = {
				jawaban_5 : $('input[type=radio][name=jawaban5]:checked').val()
			}
			let jawaban_5 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_5));

			$('#soal-5').addClass('collapse');
			$('#soal-6').removeClass('collapse');
		}
	});
	$('#btn-soal6').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban6]:checked').val() != undefined) {
			let sekarang = {
				jawaban_6 : $('input[type=radio][name=jawaban6]:checked').val()
			}
			let jawaban_6 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_6));

			$('#soal-6').addClass('collapse');
			$('#soal-7').removeClass('collapse');
		}
	});
	$('#btn-soal7').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban7]:checked').val() != undefined) {
			let sekarang = {
				jawaban_7 : $('input[type=radio][name=jawaban7]:checked').val()
			}
			let jawaban_7 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_7));

			$('#soal-7').addClass('collapse');
			$('#soal-8').removeClass('collapse');
		}
	});
	$('#btn-soal8').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban8]:checked').val() != undefined) {
			let sekarang = {
				jawaban_8 : $('input[type=radio][name=jawaban8]:checked').val()
			}
			let jawaban_8 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_8));

			$('#soal-8').addClass('collapse');
			$('#soal-9').removeClass('collapse');
		}
	});
	$('#btn-soal9').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban9]:checked').val() != undefined) {
			let sekarang = {
				jawaban_9 : $('input[type=radio][name=jawaban9]:checked').val()
			}
			let jawaban_9 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_9));

			$('#soal-9').addClass('collapse');
			$('#soal-10').removeClass('collapse');
		}
	});
	$('#btn-soal10').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban10]:checked').val() != undefined) {
			let sekarang = {
				jawaban_10 : $('input[type=radio][name=jawaban10]:checked').val()
			}
			let jawaban_10 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_10));

			$('#soal-10').addClass('collapse');
			$('#soal-11').removeClass('collapse');
		}
	});
	$('#btn-soal11').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban11]:checked').val() != undefined) {
			let sekarang = {
				jawaban_11 : $('input[type=radio][name=jawaban11]:checked').val()
			}
			let jawaban_11 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_11));

			$('#soal-11').addClass('collapse');
			$('#soal-12').removeClass('collapse');
		}
	});
	$('#btn-soal12').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban12]:checked').val() != undefined) {
			let sekarang = {
				jawaban_12 : $('input[type=radio][name=jawaban12]:checked').val()
			}
			let jawaban_12 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_12));

			$('#soal-12').addClass('collapse');
			$('#soal-13').removeClass('collapse');
		}
	});
	$('#btn-soal13').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban13]:checked').val() != undefined) {
			let sekarang = {
				jawaban_13 : $('input[type=radio][name=jawaban13]:checked').val()
			}
			let jawaban_13 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_13));

			$('#soal-13').addClass('collapse');
			$('#soal-14').removeClass('collapse');
		}
	});
	$('#btn-soal14').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban14]:checked').val() != undefined) {
			let sekarang = {
				jawaban_14 : $('input[type=radio][name=jawaban14]:checked').val()
			}
			let jawaban_14 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_14));

			$('#soal-14').addClass('collapse');
			$('#soal-15').removeClass('collapse');
		}
	});
	$('#btn-soal15').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban15]:checked').val() != undefined) {
			let sekarang = {
				jawaban_15 : $('input[type=radio][name=jawaban15]:checked').val()
			}
			let jawaban_15 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_15));

			$('#soal-15').addClass('collapse');
			$('#soal-16').removeClass('collapse');
		}
	});
	$('#btn-soal16').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban16]:checked').val() != undefined) {
			let sekarang = {
				jawaban_16 : $('input[type=radio][name=jawaban16]:checked').val()
			}
			let jawaban_16 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_16));

			$('#soal-16').addClass('collapse');
			$('#soal-17').removeClass('collapse');
		}
	});
	$('#btn-soal17').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban17]:checked').val() != undefined) {
			let sekarang = {
				jawaban_17 : $('input[type=radio][name=jawaban17]:checked').val()
			}
			let jawaban_17 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_17));

			$('#soal-17').addClass('collapse');
			$('#soal-18').removeClass('collapse');
		}
	});
	$('#btn-soal18').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban18]:checked').val() != undefined) {
			let sekarang = {
				jawaban_18 : $('input[type=radio][name=jawaban18]:checked').val()
			}
			let jawaban_18 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_18));

			$('#soal-18').addClass('collapse');
			$('#soal-19').removeClass('collapse');
		}
	});
	$('#btn-soal19').click(function () {
		let sebelumnya = $.parseJSON(window.localStorage.getItem('jawaban'));
		
		if ($('input[type=radio][name=jawaban19]:checked').val() != undefined) {
			let sekarang = {
				jawaban_19 : $('input[type=radio][name=jawaban19]:checked').val()
			}
			let jawaban_19 = Object.assign(sebelumnya, sekarang);
			window.localStorage.setItem('jawaban', JSON.stringify(jawaban_19));

			$('#soal-19').addClass('collapse');
			$('#thanks').removeClass('collapse');

			console.log($.parseJSON(window.localStorage.getItem('jawaban')));

			const xhr = new XMLHttpRequest();
			xhr.onloadstart = function () {};
			xhr.onloadend = function () {
				const response = JSON.parse(this.responseText);
				if (response.status == true) {
					$('#code-survey').html(response.code);
					$('#responden-nama').html(response.nama);
				}
			}
			xhr.open("POST", base_url + 'api/submit/survei.json', true);
			xhr.send(window.localStorage.getItem('jawaban'));
			return false;
		}
	});
	function get_provinsi() {
		$.ajax({
			type: 'POST',
			url: base_url + 'api/lokasi/get-provinsi.json',
			success: function (response) {
				response = $.parseJSON(response);
				$.each(response['data'], function (d, data) {
					$('#soal1-domisili-provinsi').append('<option value="'+ data['id'] +'">'+ data['nama_provinsi'] +'</option>');
				});
			}
		});
		return false;
	}
	function get_kota(id) {
		$.ajax({
			type: 'POST',
			url: base_url + 'api/lokasi/get-kota.json',
			data: {"provinsi":id},
			success: function (response) {
				response = $.parseJSON(response);
				$('#soal1-domisili-kota').find('option').not(':first').remove();
				$.each(response['data'], function (d, data) {
					$('#soal1-domisili-kota').append('<option value="'+ data['id'] +'">'+ data['nama_kabupaten'] +'</option>');
				});
			}
		});
		return false;
	}
	function get_kecamatan(id) {
		$.ajax({
			type: 'POST',
			url: base_url + 'api/lokasi/get-kecamatan.json',
			data: {"kota":id},
			success: function (response) {
				response = $.parseJSON(response);
				$('#soal1-domisili-kecamatan').find('option').not(':first').remove();
				$.each(response['data'], function (d, data) {
					$('#soal1-domisili-kecamatan').append('<option value="'+ data['id'] +'">'+ data['nama_kecamatan'] +'</option>');
				});
			}
		});
		return false;
	}

	// $('#btn-share').click(function () {
	// 	var fullLink = document.createElement('input');
	// 	document.body.appendChild(fullLink);
	// 	fullLink.value = base_url;
	// 	fullLink.select();
	// 	document.execCommand("copy", false);
	// 	fullLink.remove();
	// 	alert("Link berhasil disalin!");
	// });
});
</script>