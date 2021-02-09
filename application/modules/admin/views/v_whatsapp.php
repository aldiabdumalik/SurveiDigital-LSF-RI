	<div class="row">
	<div class="col-lg-4 col-12">
		<div class="card">
			<div class="card-body">
				<form id="form-whatsapp">
					<div class="form-group">
						<label for="tanggal">Masukan Tanggal</label>
						<input type="text" name="tanggal" id="tanggal" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="Masukan Tanggal" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label for="tipe">Tipe</label>
						<select name="tipe" id="tipe" class="form-control" required>
							<option value="">Pilih Tipe</option>
							<option value="personalize">Personalize</option>
							<option value="umum">Umum</option>
						</select>
					</div>
					<div class="form-group">
						<label for="ke">Pengiriman Ke</label>
						<select name="ke" id="ke" class="form-control" required>
							<option value="">Pilih Pengiriman</option>
							<option value="0">1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
							<option value="5">6</option>
						</select>
					</div>
					<div class="form-group">
						<button type="button" id="btn-cari" class="btn btn-primary btn-block">Cari</button>
						<button type="button" id="btn-kirim" class="btn btn-success btn-block">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="tbl_data" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama</th>
								<th>Nomor</th>
								<th>File</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-loading">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<p class="text-center">Sedang menload data. Silahkan tunggu beberapa saat ...</p>
			</div>
		</div>
	</div>
</div>