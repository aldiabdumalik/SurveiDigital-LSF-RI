<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="table-responsive">
					<table id="tbl_data" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Instansi</th>
								<th>Nohp</th>
								<th>Alamat</th>
								<?php
								for ($i=1; $i <= 15; $i++):
								?>
								<td><?= $i; ?></td>
								<?php endfor; ?>
								<td>Harapan</td>
								<td>Pendapat</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($survei as $key => $s): ?>
								<tr>
									<td><?= $s['id'] ?></td>
									<td><?= $s['nama'] ?></td>
									<td><?= $s['instansi'] ?></td>
									<td><?= $s['nohp'] ?></td>
									<td><?= $s['alamat'] ?></td>
									<td><?= $s['jawaban_1'] ?></td>
									<td><?= $s['jawaban_2'] ?></td>
									<td><?= $s['jawaban_3'] ?></td>
									<td><?= $s['jawaban_4'] ?></td>
									<td><?= $s['jawaban_5'] ?></td>
									<td><?= $s['jawaban_6'] ?></td>
									<td><?= $s['jawaban_7'] ?></td>
									<td><?= $s['jawaban_8'] ?></td>
									<td><?= $s['jawaban_9'] ?></td>
									<td><?= $s['jawaban_10'] ?></td>
									<td><?= $s['jawaban_11'] ?></td>
									<td><?= $s['jawaban_12'] ?></td>
									<td><?= $s['jawaban_13'] ?></td>
									<td><?= $s['jawaban_14'] ?></td>
									<td><?= $s['jawaban_15'] ?></td>
									<td><?= $s['harapan'] ?></td>
									<td><?= $s['pendapat'] ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>