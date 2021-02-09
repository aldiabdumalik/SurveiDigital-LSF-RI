<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Survey</title>
	<?php $this->load->view($css); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<?php $this->load->view($navbar); ?>
		<?php $this->load->view($sidebar); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1><?= $title ?></h1>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="container-fluid">
					<?php $this->load->view($content); ?>
				</div>
			</section>
		</div>
		<?php $this->load->view($footer); ?>
	</div>
	<?php $this->load->view($javascript); ?>
	<?php
	if (!empty($js)) {
		$this->load->view($js);
	}
	?>
</body>
</html>