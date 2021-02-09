<div class="container">
	<form id="form-daftar">
		<input type="hidden" name="id" class="form-control" value="<?= $this->input->get('member'); ?>">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukkan Nama Lengkap Kamu Disini" required>
		</div>
		<div class="form-group">
			<label for="nohp">Nomor HP</label>
			<input type="text" name="nohp" class="form-control" autocomplete="off" id="nohp" placeholder="Masukkan Nomor HP Kamu Disini" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" autocomplete="off" id="email" placeholder="Masukkan Alamat Email Kamu Disini" required>
		</div>
		<input type="hidden" name="youtube" class="form-control" autocomplete="off" id="youtube" placeholder="Masukan URL Link Youtube Kamu Disini">
		<input type="hidden" name="ig" class="form-control" autocomplete="off" id="ig" placeholder="Masukkan URL Link Akun Instagram Kamu Disini">
		<input type="hidden" name="twitter" class="form-control" autocomplete="off" id="twitter" placeholder="Masukkan URL Link Twitter Kamu Disini">
		<input type="hidden" name="blog" class="form-control" autocomplete="off" id="blog" placeholder="Masukkan URL Link Blog Kamu Disini">
		<input type="hidden" name="fb" class="form-control" autocomplete="off" id="fb" placeholder="Masukkan URL Link Facebook Kamu Disini">
		<div class="text-center">
			<button type="submit" class="btn btn-primary" style="padding: 5px 55px;">Daftar</button>
		</div>
	</form>
</div>