<div class="row">
	<div class="col-lg-4 col-12">
		<div class="card">
			<div class="card-body">
				<form id="form-import">
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<select name="kategori" id="kategori" class="form-control" required>
							<option value="">Pilih Kategori</option>
							<option value="personalize">Personalize</option>
							<option value="umum">Umum</option>
						</select>
					</div>
					<div class="form-group">
						<label for="file">File input</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" name="file" class="custom-file-input" id="file" required>
								<label class="custom-file-label" for="file">Masukan File</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Import</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- <div class="col-lg-8 col-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="tbl_data" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>ID</th>
								<th>Nama</th>
								<th>Nomor</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div> -->
</div>