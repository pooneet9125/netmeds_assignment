<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      <div class="row align-items-center">
        
          <?php if($this->session->userdata('id')){ ?>
           
        <?php }else{ ?>
            <div class="col-lg-5 col-xl-5">
            <div class="banner_text">
            <div class="banner_text_iner">
            <h5>We are here for your care</h5>
            <h1>Best Care &
            Better Doctor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
            elit sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra </p>
            <a href="<?= base_url() ?>login" class="btn_2">Book Lab Test/Package</a>
            </div>
            </div>
            </div>
            <div class="col-lg-7">
            <div class="banner_img">
            <img src="<?php echo asset_url();?>images/index.png" alt="">
            </div>
            </div>
        <?php } ?>
      
    </div>
  </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<?php $this->load->view('layout/footer'); ?>
