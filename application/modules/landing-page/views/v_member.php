<div class="container">
  <div id="soal" class="soal">
  	<form method="POST" id="form-member">
      <div id="salam" class="">
        <?php $this->load->view($salam); ?>
      </div>
      <!-- <input type="hidden" name="member" id="member" value="<?= $this->input->get('member') ?>"> -->
  		<div id="soal-1" class="collapse">
  			<?php $this->load->view($soal1); ?>
  		</div>
  		<div id="soal-2" class="collapse">
  			<?php $this->load->view($soal2); ?>
  		</div>
      <div id="soal-3" class="collapse">
        <?php $this->load->view($soal3); ?>
      </div>
      <div id="soal-4" class="collapse">
        <?php $this->load->view($soal4); ?>
      </div>
      <div id="soal-5" class="collapse">
        <?php $this->load->view($soal5); ?>
      </div>
      <div id="soal-6" class="collapse">
        <?php $this->load->view($soal6); ?>
      </div>
      <div id="soal-7" class="collapse">
        <?php $this->load->view($soal7); ?>
      </div>
      <div id="soal-8" class="collapse">
        <?php $this->load->view($soal8); ?>
      </div>
      <div id="soal-9" class="collapse">
        <?php $this->load->view($soal9); ?>
      </div>
      <div id="soal-10" class="collapse">
        <?php $this->load->view($soal10); ?>
      </div>
      <div id="soal-11" class="collapse">
        <?php $this->load->view($soal11); ?>
      </div>
      <div id="soal-12" class="collapse">
        <?php $this->load->view($soal12); ?>
      </div>
      <div id="soal-13" class="collapse">
        <?php $this->load->view($soal13); ?>
      </div>
      <div id="soal-14" class="collapse">
        <?php $this->load->view($soal14); ?>
      </div>
      <div id="soal-15" class="collapse">
        <?php $this->load->view($soal15); ?>
      </div>
      <div id="soal-16" class="collapse">
        <?php $this->load->view($soal16); ?>
      </div>
      <div id="soal-17" class="collapse">
        <?php $this->load->view($soal17); ?>
      </div>
      <div id="soal-18" class="collapse">
        <?php $this->load->view($soal18); ?>
      </div>
      <div id="soal-19" class="collapse">
        <?php $this->load->view($soal19); ?>
      </div>
      <div id="thanks" class="collapse">
        <div>&nbsp;</div>
        <div class="container text-center">
          Terima kasih <span id="responden-nama">Nama</span>, <br/> Kamu telah berpartisipasi dalam survei digital. Simpan nomor dibawah ini, Jika kamu beruntung staff kami akan menghubungi kamu. 
          <br><br>
          <!-- <img src="./uploads/img/thanks.png" alt="" class="img-fluid"> -->
          <h3 id="code-survey">CODE</h3>
          <br>
          Ayo Ajak teman kamu untuk Ikut Berpartisipasi dalam survei digital dan share link dibawah ini:
          <br>
          <div class="mt-2">
            <a href="whatsapp://send?text=https://survei.lsf.go.id/" data-action="share/whatsapp/share" class="btn btn-outline-success rounded-circle" target="_blank"><i class="fa fa-whatsapp"></i></a>

            <a href="https://www.facebook.com/sharer/sharer.php?u=https://survei.lsf.go.id/" class="btn btn-outline-primary rounded-circle" target="_blank"><i class="fa fa-facebook"></i></a>

            <a href="https://twitter.com/intent/tweet?text=https://survei.lsf.go.id/" class="btn btn-outline-info rounded-circle" target="_blank"><i class="fa fa-twitter"></i></a>
          </div>
        </div>
      </div>
  	</form>
  </div>
</div>