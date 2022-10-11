      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <!-- Form controls -->
              <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Kelurahan</h5>
                  <div class="card-body">
                   
                    <div class="mb-3">
                      <div class="row">
                      <?php foreach ($data as $x) {?>
                        <div class="col-md-4 col-xl-4 mb-5">
                          <div class="card h-100">
                            <img class="card-img-top" src="<?= base_url() ?>/assets/img/ceger.png"
                              alt="Card image cap" />
                            <div class="card-body">
                              <h5 class="card-title"><?= $x->kelurahan ?></h5>
                              <p class="card-text">Penduduk <?= $x->jumlah_penduduk ?>
                              </p>
                              <a href="<?= base_url('kelurahan/kriminal/'.$x->id) ?>" class="btn btn-outline-primary">Detail</a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

                        
                        <!-- <div class="col-md-2 col-xl-2 mt-5">
                          <div class="card h-100">
                            <img class="card-img-top" src="<?= base_url() ?>/assets/img/ceger.png"
                              alt="Card image cap" />
                            <div class="card-body">
                              <h5 class="card-title">Ceger</h5>
                              <p class="card-text">Penduduk 231321
                              </p>
                              <a href="javascript:void(0)" class="btn btn-outline-primary">Detail</a>
                            </div>
                          </div>
                        </div> -->
                        
                      </div>
                    </div>
                    
                    <!-- <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                  </div>
                </div>
              </div>
          </div>


        </div>
        <!-- / Content -->




        <!-- Footer -->
        <!-- <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
              © <script>
                document.write(new Date().getFullYear())
              </script>
              , made with ❤️ by <a href="https://themeselection.com" target="_blank"
                class="footer-link fw-bolder">ThemeSelection</a>
            </div>
            <div>

              <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
              <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

              <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="footer-link me-4">Documentation</a>


              <a href="https://themeselection.com/support/" target="_blank"
                class="footer-link d-none d-sm-inline-block">Support</a>

            </div>
          </div>
        </footer> -->
        <!-- / Footer -->


        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
      </div>



      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>


      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>

      </div>

      <div id="permohonanModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <form method="post" id="sampel_form" class="form-horizontal form-label-left">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Detil Contoh Uji</h4>
              </div>
              <div class="modal-body mdl-permohonanModal" style="overflow:hidden;">

              </div>
              <div class="modal-footer">
                <input type="hidden" name="permohonan_id" id="permohonan_id">
                <?php
                    //$level = $this->session->userdata('level');
                    if ($level != 2 && $level != 22 ) {
                        //if ($this->session->userdata('filterPermohonan') === 'Belum_Dibayar') {
                            ?>
                <input type="submit" name="action" value="Submit" class="btn btn-primary" id="submit_sampel_form">
                <?php
                        }
                    //}
                    ?>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- <div class="modal fade" id="permohonanModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Name</label>
                      <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Email</label>
                      <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">DOB</label>
                      <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div> -->