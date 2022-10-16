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
                    <form action="<?= base_url('dashboard/save_ada_polisi') ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <label>NAMA PETUGAS INPUT</label>
                                <input readonly type="text" value="<?= $this->session->userdata('nama') ?>"
                                    class="form-control" required name="nama_petugas">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>Kelurahan</label>
                                <select name="kelurahan" required class="form-control" id="">
                                    <option value="">=== Pilih Kategori Kelurahan ===</option>
                                    <?php $xx = $this->db->get('dt_kelurahan')->result();
                                    foreach ($xx as $x) { ?>
                                    <option value="<?= $x->id?>"><?= $x->kelurahan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>NAMA LENGKAP TARGET (PELAKU TAWURAN / INDIVIDU YANG BERPOTENSI MENIMBULKAN
                                    GANGGUAN KAMTIBMAS)</label>
                                <input type="text" class="form-control" required name="nama_pelaku">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>TEMPAT LAHIR</label>
                                <input type="text" class="form-control" required name="tempat_lahir">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>TANGGAL LAHIR</label>
                                <input type="date" class="form-control" required name="tgl_lahir">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>NOMOR HP</label>
                                <input type="number" class="form-control" required name="no_hp">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>ALAMAT</label>
                                <textarea type="date" class="form-control" required name="alamat"></textarea>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>PEKERJAAN</label>
                                <?php 
                                $pekerjaan = ['PELAJAR/MAHASISWA','WIRASWASTA','KARYAWAN SWASTA','PEGAWAI NEGERI','BURUH','TIDAK BEKERJA'];
                                for ($i=0; $i <count($pekerjaan) ; $i++) {  ?>
                                <div class="form-check mt-3">
                                    <input name="pekerjaan" class="form-check-input" type="radio"
                                        value="<?= $pekerjaan[$i] ?>" id="defaultRadio<?= $pekerjaan[$i] ?>" />
                                    <label class="form-check-label" for="defaultRadio<?= $pekerjaan[$i] ?>">
                                        <?= $pekerjaan[$i] ?>
                                    </label>
                                </div>
                                <?php } ?>
                                <div class="form-check mt-3">
                                    <input name="pekerjaan" class="form-check-input" type="radio"
                                        id="defaultRadioInput" />
                                    <label class="form-check-label" for="defaultRadioInput">
                                        <input type="text" class="form-control" id="in_pekerjaan" name="pekerjaan">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>NAMA IBU KANDUNG</label>
                                <input type="text" class="form-control" required name="nama_ibu">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>PEKERJAAN BAPAK </label>
                                <input type="text" class="form-control" required name="pekerjaan_bapak">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>KASUS YANG PERNAH DILAKUKAN </label>
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
                            </div>
                            <div class="col-md-4 mt-4">
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
                            </div>

                        </div>
                        <div class="col-md-4 mt-4">
                            <label>FOTO WAJAH</label>
                            <!-- <input type="file" class="form-control" required name="nama_ibu"> -->
                            <div id="my_camera"></div>
                        </div>
                        <div class="col-md-4 mt-4">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

<script language="JavaScript">
    Webcam.set({
        // width: 400,
        height: 300,
        image_format: "jpeg",
        jpeg_quality: 90,
        flip_horiz: true,
        constraints: {
            facingMode: 'environment'
        }
    });
    Webcam.attach("#my_camera");
    // var data_uri = '';
    //         if (data_uri == '') {
    //             $(".res").addClass('invisible')
    //         }else{
    //             $(".res").addClass('visible')
    //         }
    function take_snapshot() {
        Webcam.snap(function (data_uri) {
            $(".image-tag").val(data_uri);
            if (data_uri) {
                $(".cam").remove();
            }
            document.getElementById('my_camera').style.display = "none";
            console.log(data_uri)
            // console.log(data_uri)
            document.getElementById("results").innerHTML =
                '<img src="' + data_uri + '"/>';
        });
    }
</script>
<!--
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var lat = p.coords.latitude;
        var lng = p.coords.longitude;
        const latLng = lat+','+lng;
        // console.log(latLng)
        fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latLng}&key=AIzaSyBoFxDFopLH3efkmpRLYbpSfZeOgT-tHHE`)

        .then((responseText) => {
            return responseText.json();
        })
        .then(jsonData => {
            console.log(jsonData.results);
            // var xx = '';
            // for (let i = 3; i <script jsonData.results[0].address_components.length; i++) {
            //     const element = jsonData.results[0].address_components[i].long_name + ' ';
            //     xx += element
            //     console.log(xx)
            //     $('.alamat').html(xx)
            // }
            $('.alamat').html(jsonData.results[0].formatted_address)

        })
        .catch(error => {
            console.log(error);

        })
        // document.getElementById('mapz').innerHTML = '<iframe src="http://maps.google.com/maps?q='+kord+'&output=embed" height="450" width="600"></iframe>'
    });
} else {
    alert('Geo Locatiozzn featsure is not supported in this browser.');
}
 
</script> -->