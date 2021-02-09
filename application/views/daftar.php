<?php $this->load->view('header'); ?>
  <div class="container">
    <div class="daftar">
    	<form>
		  <div class="form-group">
		    <label for="namalengkap">Nama Lengkap</label>
		    <input type="text" class="form-control" autocomplete="off" id="namalengkap" placeholder="Masukkan Nama Lengkap Kamu Disini">
		  </div>
		  <div class="form-group">
		    <label for="nohp">No. Handphone</label>
		    <input type="text" class="form-control" autocomplete="off" id="nohp" placeholder="Masukkan Nomor Handphone Kamu Disini">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" autocomplete="off" id="email" placeholder="Masukkan Alamat Email Kamu Disini">
		  </div>
		  <div class="form-group">
		    <label for="alamat">Alamat</label>
		    <input type="text" class="form-control" autocomplete="off" id="alamat" placeholder="Masukkan Alamat Lengkap Kamu Disini">
		  </div>
		  <div class="text-center">
		  <button type="submit" class="btn btn-primary" style="padding: 5px 55px;">Daftar</button>
		  </div>
		</form>

    </div>
  </div>
<?php $this->load->view('footer'); ?>