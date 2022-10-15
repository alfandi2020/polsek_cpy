<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="col-sm-4 mt-4">
                    <a href="javascript:history.back()" class="btn btn-warning"><i class='bx bx-left-arrow-alt'></i></a>

                </div>
                <div class="card-body">
                <h5 class="card-title">Form Tindak Pelanggaran</h5>
                <?= $this->session->flashdata('msg') ?>
                <form action="<?= base_url('dashboard/save_kriminal') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <label>Kategori</label>
                            <select name="kategori" required class="form-control" id="">
                                <option value="">=== Pilih Kategori Pelanggaran ===</option>
                                <?php $xx = $this->db->get('mt_kategori')->result();
                                foreach ($xx as $x) { ?>
                                <option value="<?= $x->id_kategori?>"><?= $x->nama ?></option>
                                <?php } ?>
                            </select>
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
                            <label>Alamat</label>
                           <textarea name="alamat" placeholder="Jl.TMII" class="form-control" id="" cols="30" rows="2"></textarea>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label>Lokasi Maps</label>
                            <textarea disabled type="text" name="alamat_maps" rows="3" class="form-control alamat"></textarea>
                        </div>
                        <div class="col-md-4 mt-4">
                        <div id="my_camera"></div>
                        <div id="results"></div><br>
                        <input type="button" value="Ambil gambar" onClick="take_snapshot()" class="btn btn-primary" />

                        </div>
                        <div class="col-md-4 mt-4">
                            <label>Keterangan</label>
                           <textarea name="keterangan" placeholder="Nongkrong / tawuran" class="form-control" id="" cols="30" rows="2"></textarea>
                        </div>
                        <div class="col-md-4 mt-4">
                           <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Simpan</button>
                        </div>
                    </div>
                </form>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

<script language="JavaScript">
        Webcam.set({
            // width: 400,
            height: 300,
            image_format: "jpeg",
            jpeg_quality: 90,
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
                document.getElementById('my_camera').style.display= "none";
                console.log(data_uri)
                // console.log(data_uri)
                document.getElementById("results").innerHTML =
                    '<img src="' + data_uri + '"/>';
            });
        }

    </script>
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
 
</script>
