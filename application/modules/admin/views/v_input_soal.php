<div class="row">
	<div class="col-lg-4 col-12">
		<div class="card">
			<div class="card-body">
				<form id="form-soal">
					<div class="form-group">
						<label for="soal">Nomor</label>
						<select name="soal" id="soal" class="form-control" required>
							<option value="">Pilih Nomor Soal</option>
							<option value="soal1">Soal Ke-1</option>
							<option value="soal2">Soal Ke-2</option>
							<option value="soal3">Soal Ke-3</option>
							<option value="soal4">Soal Ke-4</option>
							<option value="soal5">Soal Ke-5</option>
							<option value="soal6">Soal Ke-6</option>
							<option value="soal7">Soal Ke-7</option>
							<option value="soal8">Soal Ke-8</option>
							<option value="soal9">Soal Ke-9</option>
							<option value="soal10">Soal Ke-10</option>
						</select>
					</div>
					<div class="form-group">
						<label for="deskripsi">Soal</label>
						<textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Tambah</button>
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
								<th>No</th>
								<th>Soal</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>