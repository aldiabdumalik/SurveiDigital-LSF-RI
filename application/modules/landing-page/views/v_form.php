<div class="container">
	<!-- <div class="daftar"> -->
		<form id="form-daftar">
			<input type="hidden" name="id" class="form-control" value="<?= $this->input->get('member'); ?>">
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukkan Nama Lengkap Kamu Disini" required>
			</div>
			<div class="form-group">
				<label for="nohp">No. Handphone</label>
				<input type="text" name="nohp" class="form-control" autocomplete="off" id="nohp" placeholder="Masukkan Nomor Handphone Kamu Disini" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" autocomplete="off" id="email" placeholder="Masukkan Alamat Email Kamu Disini" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" placeholder="Masukkan Alamat Lengkap Kamu Disini" required>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary" style="padding: 5px 55px;">Daftar</button>
			</div>
		</form>
	<!-- </div> -->
</div>