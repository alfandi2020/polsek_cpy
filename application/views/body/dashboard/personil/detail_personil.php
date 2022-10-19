<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Riwayat Personil</h5>
                    <hr>
                    <h6>Nama : <b><?= $data['nama'] ?></b></h6>
                    <?= $this->session->flashdata('msg') ?>
                    <!--I. Pendidikan Kepolisian -->
                    <div class="row">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne1" aria-expanded="true" aria-controls="accordionOne">
                            Pendidikan <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="pendidikan_personil" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Tingkat</label>
                                            <input type="text" placeholder="AKPOL" class="form-control" required name="tingkat">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>Tahun</label>
                                            <select name="tahun" id="" class="form-control">
                                                <option value="">Pilih Tahun</option>
                                                <?php for ($i=0; $i <22 ; $i++) { ?>
                                                <option value="<?= date('Y')-22+$i ?>"><?= date('Y')-22+$i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--II. Pendidikan Umum -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne2" aria-expanded="true" aria-controls="accordionOne">
                            Pendidikan Umum <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="pendidikan_umum" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Tingkat</label>
                                            <input type="text" placeholder="S1" class="form-control" required name="tingkat">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>Nama Institusi</label>
                                            <input type="text" placeholder="Universitas Indonesia" class="form-control" required name="nama_institusi">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>Tahun</label>
                                            <select name="tahun" id="" class="form-control">
                                                <option value="">Pilih Tahun</option>
                                                <?php for ($i=0; $i <22 ; $i++) { ?>
                                                <option value="<?= date('Y')-22+$i ?>"><?= date('Y')-22+$i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--III. Riwayat Pangkat -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne3" aria-expanded="true" aria-controls="accordionOne">
                            Riwayat Pangkat <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="riwayat_pangkat" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Pangkat</label>
                                            <input type="text" placeholder="AKP" class="form-control" required name="pangkat">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>TMT</label>
                                            <input type="date" placeholder="01-04-2013" class="form-control" required name="tmt">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--IV. Riwayat Jabatan -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne9" aria-expanded="true" aria-controls="accordionOne">
                            Riwayat Jabatan <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="riwayat_jabatan" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Jabatan</label>
                                            <input type="text" placeholder="PAMA PADA SPRIPIM" class="form-control" required name="jabatan">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>TMT</label>
                                            <input type="date" placeholder="01-04-2013" class="form-control" required name="tmt">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--V. Pendidikan Pengembangan & Pelatihan -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne4" aria-expanded="true" aria-controls="accordionOne">
                            Pendidikan Pengembangan & Pelatihan <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="pendidikan_pengembang" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Dikbang</label>
                                            <input type="text" placeholder="DIKBANGSPES PA" class="form-control" required name="dikbang">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>TMT</label>
                                            <input type="date" placeholder="01-04-2013" class="form-control" required name="tmt">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--VI. Tanda Kehormatan -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne5" aria-expanded="true" aria-controls="accordionOne">
                            Tanda Kehormatan <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="tanda_kehormatan" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Tanda Kehormatan</label>
                                            <input type="text" placeholder="SATYALANCANA" class="form-control" required name="tanda_kehormatan">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>TMT</label>
                                            <input type="date" placeholder="01-04-2013" class="form-control" required name="tmt">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--VII. Kemampuan Bahasa -->
                    <div class="row mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne6" aria-expanded="true" aria-controls="accordionOne">
                            Kemampuan Bahasa <i class='bx bx-chevron-right'></i>
                        </button>
                        <div id="accordionOne6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="<?= base_url('dashboard/save_detail_personil') ?>" method="POST">
                                    <input type="hidden" value="kemampuan_bahasa" name="status">
                                    <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_personil">
                                    <div class="row">
                                        <div class="col-md-2 mt-4">
                                            <label>Bahasa</label>
                                            <input type="text" placeholder="inggris" class="form-control" required name="bahasa">
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <label>Status</label>
                                            <div class="form-check mt-3">
                                                <input name="default-radio-1" class="form-check-input" value="Aktif" type="radio" value="" id="defaultRadio1" />
                                                <label class="form-check-label" for="defaultRadio1">
                                                    Aktif
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" value="Passive" />
                                                <label class="form-check-label" for="defaultRadio2">
                                                    Passive
                                                </label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>
                                            Simpan</button>
                                    </div>
                                    <br><br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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