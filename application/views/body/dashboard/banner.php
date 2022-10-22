<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Update Banner</h5>
                    <?= $this->session->flashdata('msg') ?>
                    <form action="<?= base_url('dashboard/save_banner') ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php for ($i=1; $i <=10 ; $i++) {  ?>
                            <div class="row">
                                <div class="col-md-2 mt-4">
                                    <label>Banner <?= $i ?></label>
                                    <input type="file"
                                        class="form-control" required name="file_banner<?= $i ?>" onchange="form.submit()">
                                </div>
                            </div>
                        <?php } ?>

                        <br>
                        <!-- <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Simpan</button>
                        </div> -->
                        <br><br><br><br>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.getElementById('defaultRadioInput').addEventListener('change', function (e) {
        $('#in_pekerjaan').attr('disabled', false)
    });
    $('#in_pekerjaan').attr('disabled', true)

    document.getElementById('defaultRadioInputx').addEventListener('change', function (e) {
        $('#iin_pekerjaan').attr('disabled', false)
    });
    $('#iin_pekerjaan').attr('disabled', true)

    document.getElementById('defaultRadioInputxx').addEventListener('change', function (e) {
        $('#iin_pekerjaan').attr('disabled', false)
    });
    $('#iiin_pekerjaan').attr('disabled', true)
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script> -->
