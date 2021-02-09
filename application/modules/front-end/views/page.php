<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survei Digital LSF RI</title>
	<?php $this->load->view($css); ?>
</head>
<body>
	<?php $this->load->view($navbar); ?>

	<?php $this->load->view($content); ?>

	<?php $this->load->view($footer); ?>

	<?= $this->load->view($javascript); ?>
	
	<?php if (! empty($js)){
		$this->load->view($js);
	}
	?>
</body>
</html>