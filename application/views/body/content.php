<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl">
    <div class="row" style="background-color: black;">
      <div class="col-md-12 col-lg-12">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="1" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="5"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="6"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="7"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="8"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="9"></li>
          </ol>
          <div class="carousel-inner">
            <?php
            $xx = $this->db->get('tb_banner')->result();
              foreach ($xx as $x) {  ?>
            <div class="carousel-item <?= $x->id == 1 ?'active' : '' ?>">
              <img style="height: 300px;" class=" d-block w-100" src="<?= base_url() ?>upload/banner/<?= $x->nama ?>"
                alt="First slide" />
              <!-- <div class="carousel-caption d-none d-md-block">
              <h3>First slide</h3>
              <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
            </div> -->
            </div>
            <?php } ?>
            <!-- <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/img/elements/2.jpg" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Second slide</h3>
              <p>In numquam omittam sea.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/img/elements/18.jpg" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Third slide</h3>
              <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
            </div>
          </div> -->
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
        <!-- <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-12">
              <div class="card-header">
                <h5 class="card-title mb-0">Report</h5>
                <small class="card-subtitle">Yearly report</small>
              </div>
              <div class="card-body">
                awdwa
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col-md-12 col-lg-12">
        <div class="row text-center mt-3">
          <div class="col">
            <a href="<?= base_url('dashboard/hotline') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class="bx bx-phone bx-sm"></i>
            </a><br>
            <span style="color: white;"> Hotline</span>
          </div>
          <div class="col">
            <a href="<?= base_url('dashboard/informasi') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class='bx bxs-bell-ring'></i>
            </a><br>
            <span style="color: white;"> Informasi</span>
          </div>
          <div class="col">
            <a href="<?= base_url('dashboard/filter/2') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class='bx bx-coffee'></i>
            </a><br>
            <span style="color: white;"> THM & Warung Miras</span>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col">
            <a href="<?= base_url('dashboard/ada_polisi') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class="bx bx-user bx-sm"></i>
            </a><br>
            <span style="color: white;"> Ada Polisi</span>
          </div>
          <div class="col">
            <a href="<?= base_url('dashboard/filter/5') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class='bx bxs-bell-ring'></i>
            </a><br>
            <span style="color: white;"> Kejahatan Jalanan & kenakalan Remaja</span>
          </div>
          <div class="col">
            <a href="<?= base_url('dashboard/filter/4') ?>" class="btn rounded-pill btn-icon btn-warning">
              <i class='bx bx-coffee'></i>
            </a><br>
            <span style="color: white;"> 3C</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12 col-lg-12">
          <h4>Youtube</h4>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Lz_J1oeY_vo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12 col-lg-12">
          <h4>Instagram</h4>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Lz_J1oeY_vo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
  </div>

  <!-- Content wrapper -->
</div>



<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->