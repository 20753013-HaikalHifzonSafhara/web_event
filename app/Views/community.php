<?= $this->extend('layouts/home'); ?>

<?= $this->section('content'); ?>

<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
  <div class="container position-relative">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom">
          <div class="layer2">
                  <h1 class="title2">Organisasi</h1>
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Header -->

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12"> 
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <?php
                foreach($community as $communitys):
            ?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?= base_url(); ?>/img/<?= $communitys['thumbnail']; ?>" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head"><?= $communitys['name']; ?></h4>
                </a>
                <p>
                <?= $communitys['description']; ?>
              </p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->


<?= $this->endSection(); ?>