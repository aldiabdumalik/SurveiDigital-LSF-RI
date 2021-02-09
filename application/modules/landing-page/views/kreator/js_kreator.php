<script>
$(document).ready(function () {
	const base_url = '<?= base_url() ?>';
	get_provinsi();
	$('#provinsi').change(function (e) {
		e.preventDefault();
		let id = $('#provinsi').val();
		get_kota(id);
	});
	$('#btn-salam').click(function () {
		$('#salam').addClass('collapse');
		$('#soal-1').removeClass('collapse');
	});
	$('#btn-soal1').click(function () {
		if ($('input[type=radio][name=jawaban1]').is(':checked')) {
			$('#soal-1').addClass('collapse');
			$('#soal-2').removeClass('collapse');
		}
	});
	$('#btn-soal2').click(function () {
		if ($('input[type=radio][name=jawaban2]').is(':checked')) {
			$('#soal-2').addClass('collapse');
			$('#soal-3').removeClass('collapse');
		}
	});
	$('#btn-soal3').click(function () {
		$('#soal-3').addClass('collapse');
		$('#soal-4').removeClass('collapse');
	});
	$('#btn-soal4').click(function () {
		if ($('input[type=radio][name=jawaban4]').is(':checked')) {
			$('#soal-4').addClass('collapse');
			$('#soal-5').removeClass('collapse');
		}
	});
	$('#btn-soal5').click(function () {
		if ($('input[type=radio][name=jawaban5]').is(':checked')) {
			$('#soal-5').addClass('collapse');
			$('#soal-6').removeClass('collapse');
		}
	});
	$('#btn-soal6').click(function () {
		if ($('input[type=radio][name=jawaban6]').is(':checked')) {
			$('#soal-6').addClass('collapse');
			$('#soal-7').removeClass('collapse');
		}
	});
	$('#btn-soal7').click(function () {
		$('#soal-7').addClass('collapse');
		$('#soal-8').removeClass('collapse');
	});
	$('#btn-soal8').click(function () {
		if ($('input[type=radio][name=jawaban8]').is(':checked')) {
			$('#soal-8').addClass('collapse');
			$('#soal-9').removeClass('collapse');
		}
	});
	$('#btn-soal9').click(function () {
		if ($('input[type=radio][name=jawaban9]').is(':checked')) {
			$('#soal-9').addClass('collapse');
			$('#soal-10').removeClass('collapse');
		}
	});
	$('#btn-soal10').click(function () {
		if ($('input[type=radio][name=jawaban10]').is(':checked')) {
			$('#soal-10').addClass('collapse');
			$('#soal-11').removeClass('collapse');
		}
	});
	$('#btn-soal11').click(function () {
		if ($('input[type=radio][name=jawaban11]').is(':checked')) {
			$('#soal-11').addClass('collapse');
			$('#soal-12').removeClass('collapse');
		}
	});
	$('#btn-soal12').click(function () {
		if ($('input[type=radio][name=jawaban12]').is(':checked')) {
			$('#soal-12').addClass('collapse');
			$('#soal-13').removeClass('collapse');
		}
	});
	$('#btn-soal13').click(function () {
		if ($('input[type=radio][name=jawaban13]').is(':checked')) {
			$('#soal-13').addClass('collapse');
			$('#soal-14').removeClass('collapse');
		}
	});
	$('#btn-soal14').click(function () {
		if ($('input[type=radio][name=jawaban14]').is(':checked')) {
			$('#soal-14').addClass('collapse');
			$('#soal-15').removeClass('collapse');
		}
	});
	$('#btn-soal15').click(function () {
		if ($('input[type=radio][name=jawaban15]').is(':checked')) {
			$('#soal-15').addClass('collapse');
			$('#soal-16').removeClass('collapse');
		}
	});
	$('#btn-soal16').click(function () {
		if ($('input[type=radio][name=jawaban16]').is(':checked')) {
			$('#soal-16').addClass('collapse');
			$('#soal-17').removeClass('collapse');
		}
	});
	$('#btn-soal17').click(function () {
		if ($('input[type=radio][name=jawaban17]').is(':checked')) {
			$('#soal-17').addClass('collapse');
			$('#soal-18').removeClass('collapse');
		}
	});
	$('#btn-soal18').click(function () {
		if ($('input[type=radio][name=jawaban18]').is(':checked')) {
			$('#soal-18').addClass('collapse');
			$('#soal-19').removeClass('collapse');
		}
	});
	$('#btn-soal19').click(function () {
		if ($('input[type=radio][name=jawaban19]').is(':checked')) {
			$('#soal-19').addClass('collapse');
			$('#kds').removeClass('collapse');
		}
	});
	$('#form-member').submit(function () {
		$.ajax({
			type: 'POST',
			url: base_url + 'survei-konten-kreator.json',
			data: $(this).serialize(),
			success: function (response) {
				response = $.parseJSON(response);
				$('#thanks').removeClass('collapse');
				$('#kds').addClass('collapse');
				$('#responden-nama').html(response['data'][0]['kreator_nama']);
				$('#code-survey').html(response['data']['survey_id']);
				console.log(response);
			}
		});
		return false;
	});
	function get_provinsi() {
		$.ajax({
			type: 'POST',
			url: base_url + 'get-provinsi.json',
			success: function (response) {
				response = $.parseJSON(response);
				$.each(response['data'], function (d, data) {
					$('#provinsi').append('<option value="'+ data['provinsi_id'] +'">'+ data['provinsi_nama'] +'</option>');
				});
			}
		});
		return false;
	}
	function get_kota(id) {
		$.ajax({
			type: 'POST',
			url: base_url + 'get-kota.json',
			data: {"provinsi":id},
			success: function (response) {
				response = $.parseJSON(response);
				$('#kota').find('option').not(':first').remove();
				$.each(response['data'], function (d, data) {
					$('#kota').append('<option value="'+ data['kota_id'] +'">'+ data['kota_nama'] +'</option>');
				});
			}
		});
		return false;
	}
	$('#btn-share').click(function () {
		var fullLink = document.createElement('input');
		document.body.appendChild(fullLink);
		fullLink.value = base_url + 'form-data-diri.html';
		fullLink.select();
		document.execCommand("copy", false);
		fullLink.remove();
		alert("Link berhasil disalin!");
	});
});
</script>