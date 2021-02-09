<script>
$(document).ready(function () {
	const base_url = '<?= base_url() ?>';
	const tbl_data = $('#tbl_data').DataTable();
	$('.datepicker').datepicker();
	// $(document).ajaxStart(function(){
	// 	$('#modal-loading').modal('show');
	// });
	// $(document).ajaxComplete(function(){
	// 	alert('Ho');
	// });
	$('#btn-cari').click(function () {
		// submit('cari');
		$.when(submit('cari')).then(function () {
			console.log('done');
		});
	});
	function submit(btn) {
		if (btn == 'cari') {
			$.ajax({
				type: 'POST',
				url: base_url + 'admin-import-get.json',
				data: $('#form-whatsapp').serialize(),
				beforeSend: function () {
					$('#modal-loading').modal('show');
					tbl_data.clear().draw();
				},
				success: function (response) {
					response = $.parseJSON(response);
					$.each(response['data'], function (i, data) {
						data = {
							0: data['import_id'],
							1: data['import_nama'],
							2: data['import_hp'],
							3: data['import_id'] + '.mp4'
						};
						tbl_data.row.add(data).draw();
					});
				}
			});
		}else{
			alert(btn);
		}
	}
	$('#form-whatsapp1').submit(function (btn) {
		if (btn == 'cari') {
			$.ajax({
				type: 'POST',
				url: base_url + 'admin-import-get.json',
				data: $(this).serialize(),
				beforeSend: function () {
					$('#modal-loading').modal('show');
					tbl_data.clear().draw();
				},
				success: function (response) {
					response = $.parseJSON(response);
					$.each(response['data'], function (i, data) {
						data = {
							0: data['import_id'],
							1: data['import_nama'],
							2: data['import_hp'],
							3: data['import_id'] + '.mp4'
						};
						tbl_data.row.add(data).draw();
					});
				}
			}).done(function (data) {
				setTimeout(function(){ $('#modal-loading').modal('hide'); }, 3000);
			});
		}else{
			alert(btn);
		}
		// $.ajax({
		// 	type: 'POST',
		// 	url: base_url + 'admin-import-responden.json',
		// 	data: new FormData(this),
		// 	processData:false,
		// 	contentType:false,
		// 	cache:false,
		// 	success: function (response) {
		// 		response = $.parseJSON(response);
		// 		if (response['status'] == true) {
		// 			Swal.fire(response['title'], response['message'], 'success').then(function () {
		// 				window.location.reload();
		// 			});
		// 		}else{
		// 			Swal.fire(response['title'], response['message'], 'error').then(function () {
		// 				window.location.reload();
		// 			});
		// 		}
		// 	}
		// });
		return false;
	});
	function get_responden() {
		$.ajax({
			'type': 'POST',
			'url': base_url + 'admin-import-get.json',
			data: new FormData(this),
			success: function (response) {
				response = $.parseJSON(response);
				let no = 1;
				$.each(response['data'], function (i, data) {
					data = {
						0: no,
						1: data['import_id'],
						2: data['import_nama'],
						3: data['import_hp_sensor']
					};
					tbl_data.row.add(data).draw();
					no++;
				});
			}
		});
		return false;
	}
});
</script>