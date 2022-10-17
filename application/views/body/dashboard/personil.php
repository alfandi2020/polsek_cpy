<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="col-sm-4 mt-4">
                    <a href="javascript:history.back()" class="btn btn-warning"><i class='bx bx-left-arrow-alt'></i></a>

                </div>
                <!-- <div class="card-body"> -->
                    <br>
                    <br>
                    <h5 class="card-title mt-5">Data Ada Polisi</h5>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-datatable table-responsive">
                                <table id="tabel-data" class="datatables-basic table border-top">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Petugas</th>
                                            <th>Kelurahan</th>
                                            <th>Nama Pelaku</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $no =1;
                                    foreach ($data as $x) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $x->nama ?></td>
                                            <td><?= $x->alamat ?></td>
                                            <td><?= $x->nama_lengkap_target ?></td>
                                            <td>
                                                <a href="" class="btn btn-warning">View</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data</h5>
                    <form action="<?= base_url('dashboard/save_personil') ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-2 mt-4">
                                <label>Nama Lengkap</label>
                                <input type="text"
                                    class="form-control" required name="nama">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Pangkat</label>
                                <select name="pangkat" id="" class="form-control">
                                    <option value="">Pilih Pangkat</option>
                                    <?php $k = $this->db->get('mt_pangkat')->result();
                                    foreach ($k as $x) {
                                    ?>
                                        <option value="<?= $x->nama ?>"><?= $x->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>NRP</label>
                                <input type="text" class="form-control" required name="nrp">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Agama</label>
                                <input type="text" class="form-control" required name="nrp">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Suku</label>
                                <input type="text" class="form-control" required name="nrp">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Status Personil</label>
                                <input type="text" class="form-control" required name="nrp">
                            </div>
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="col-md-2 mt-4">
                                <label>Tempat Lahir</label>
                                <input type="text"
                                    class="form-control" required name="nama">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Tempat Tgl Lahir</label>
                                <input type="date"
                                    class="form-control" required name="nama">
                            </div>
                            <div class="col-md-2 mt-4">
                                <label>Mulai Menjabat</label>
                                <input type="date"
                                    class="form-control" required name="nama">
                            </div>
                        </div>
                         <!-- <div class="col-md-4">
                                <label>Tempat,Tgl Lahir</label>
                               <div class="row">
                               <div class="col-md-6">
                                    <input type="text" class="form-control" required name="nrp">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <input type="text" class="form-control" required name="nrp">
                                </div>
                               </div>
                            </div> -->
                            <!-- <div class="col-md-4">
                                <label>NRP </label>
                                <?php 
                                $kasus = ['TAWURAN','BALAP LIAR','PENGANIAYAAN','PENCURIAN'];
                                for ($i=0; $i <count($kasus) ; $i++) {  ?>
                                <div class="form-check mt-3">
                                    <input name="kasus_history" class="form-check-input" type="radio"
                                        value="<?= $kasus[$i] ?>" id="ddefaultRadio<?= $kasus[$i] ?>" />
                                    <label class="form-check-label" for="ddefaultRadio<?= $kasus[$i] ?>">
                                        <?= $kasus[$i] ?>
                                    </label>
                                </div>
                                <?php } ?>
                                <div class="form-check mt-3">
                                    <input name="pekerjaan" class="form-check-input" type="radio"
                                        id="defaultRadioInputx" />
                                    <label class="form-check-label" for="defaultRadioInputx">
                                        <input type="text" class="form-control" id="iin_pekerjaan" name="kasus_history">
                                    </label>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-4 mt-4">
                                <label>MOTIF (ALASAN MELAKUKAN PELANGGARAN/KEJAHATAN) </label>
                                <?php 
                                $motif = ['MENCARI POPULARITAS / LEGITIMASI','TEKANAN PSIKOLOGI','EKONOMI (CARI KEUNTUNGAN)','EKONOMI (BERTAHAN HIDUP)','BALAS DENDAM','AJAKAN TEMAN'];
                                for ($i=0; $i <count($motif) ; $i++) {  ?>
                                <div class="form-check mt-3">
                                    <input name="motif" class="form-check-input" type="radio" value="<?= $motif[$i] ?>"
                                        id="dddefaultRadio<?= $motif[$i] ?>" />
                                    <label class="form-check-label" for="dddefaultRadio<?= $motif[$i] ?>">
                                        <?= $motif[$i] ?>
                                    </label>
                                </div>
                                <?php } ?>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" id="defaultRadioInputxx" />
                                    <label class="form-check-label" for="defaultRadioInputxx">
                                        <input type="text" class="form-control" id="iiin_pekerjaan" name="motif">
                                    </label>
                                </div>
                            </div> -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Simpan</button>
                        </div>
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
