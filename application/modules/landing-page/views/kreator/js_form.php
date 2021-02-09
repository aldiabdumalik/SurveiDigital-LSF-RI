<script>
$(document).ready(function () {
	const base_url = '<?= base_url() ?>';
	$('#form-daftar').submit(function () {
		$.ajax({
			type: 'POST',
			url: base_url + 'survei-konten-kreator-form.json',
			data: $(this).serialize(),
			success: function (response) {
				response = $.parseJSON(response);
				console.log(response);
				window.location.href = base_url + 'survei-konten-kreator.html?member=' + response['data']['kreator_id'];
			}
		});
		return false;
	});
});
</script>