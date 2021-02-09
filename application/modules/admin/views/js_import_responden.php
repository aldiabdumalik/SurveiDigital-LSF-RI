<script>
$(document).ready(function () {
	const base_url = '<?= base_url() ?>';
	const tbl_data = $('#tbl_data').DataTable();
	// get_responden();

	$('#form-import').submit(function () {
		$.ajax({
			type: 'POST',
			url: base_url + 'admin-import-responden.json',
			data: new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			success: function (response) {
				response = $.parseJSON(response);
				if (response['status'] == true) {
					Swal.fire(response['title'], response['message'], 'success').then(function () {
						window.location.reload();
					});
				}else{
					Swal.fire(response['title'], response['message'], 'error').then(function () {
						window.location.reload();
					});
				}
			}
		});
		return false;
	});
	// function get_responden() {
	// 	$.ajax({
	// 		'type': 'GET',
	// 		'url': base_url + 'admin-import-get.json',
	// 		success: function (response) {
	// 			response = $.parseJSON(response);
	// 			let no = 1;
	// 			$.each(response['data'], function (i, data) {
	// 				data = {
	// 					0: no,
	// 					1: data['import_id'],
	// 					2: data['import_nama'],
	// 					3: data['import_hp_sensor']
	// 				};
	// 				tbl_data.row.add(data).draw();
	// 				no++;
	// 			});
	// 		}
	// 	});
	// }
});
</script>