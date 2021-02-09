<?php $this->load->view('header'); ?>
  <div class="container">
    <div class="soal-1" style="margin-top: 1.9rem" >
      <p>1. Seberapa Besar Kamu Akan Merekomendasi Produk/Jasa ke Teman, Rekan, atau Keluarga Kamu?</p>
      <form style="">
      <ul style="list-style: none; padding: 0;">
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio">Custom radio 1</label>
        </div>
       </li>  
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio2">Custom radio 2</label>
        </div>
       </li>  
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio3">Custom radio 2</label>
        </div>
       </li>
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio4" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio4">Custom radio 2</label>
        </div>
       </li>
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio5" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio5">Custom radio 2</label>
        </div>
       </li>
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio6" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio6">Custom radio 2</label>
        </div>
       </li>
       <li>
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio7" name="example" value="customEx">
          <label class="custom-control-label" for="customRadio7">Custom radio 2</label>
        </div>
       </li>  
      </ul>
      <div class="next text-center">
      <a href="<?= base_url('survey/selesai') ?>" class="btn btn-primary">Berikutnya</a>
      </div>
      </form>
    </div>
  </div>
<?php $this->load->view('footer'); ?>