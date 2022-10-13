<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="col-sm-4 mt-4">
                    <a href="javascript:history.back()" class="btn btn-warning"><i class='bx bx-left-arrow-alt'></i></a>

                </div>
                <div class="card-body">
                    <?php if(count($data) > 1) {?>
                    <h5>DATA PELAKU  : </h5>
                    <b><?php
                    $no =1 ;
                    foreach ($data as $x) { ?>
                         <?=$no++ .'.'. $x->nama . ' '. $x->kelamin. ' Umur : '. $x->umur. ' '. $x->agama. '<br>' .  $x->alamat. "<br>" .'<br>' ?>
                    <?php } ?></b>
                    <br>

                    <h5>BARANG BUKTI : </h5>
                    <b><?php
                    $no =1 ;
                    foreach ($data as $x) { ?>
                         <?= $x->barang_bukti?>
                    <?php } ?></b>
                    <br><br><hr>
                    <h5>ANTISIPASI POS PANTAU TAWURAN : </h5>
                    <div id="maps" style="width:100%;height:600px"></div>

                    <?php }else{ ?>
                        <h5>DATA PELAKU  : tidak ada </h5>

                        <?php } ?>
                    <!-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> -->
                        
                </div>
            </div>
        </div>
    </div>
</div>

<script>
            function initialize() {
                // var latlong = 
            var propertiPeta = {
                    center:new google.maps.LatLng(-6.298897,106.8989743),
                    zoom:15,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            
            var peta = new google.maps.Map(document.getElementById("maps"), propertiPeta);
            <?php for ($i=0; $i <count($data) ; $i++) {  ?>
            
            var infowindow<?= $i ?> = new google.maps.InfoWindow({
                content: '<?= $data[$i]->alamat ?>',
                position: new google.maps.LatLng(-6.298897,106.8989743)
            });
            // membuat Marker
            var marker<?= $i ?> = new google.maps.Marker({
                    position: new google.maps.LatLng(<?= $data[$i]->lat .','.$data[$i]->long?>),
                    map: peta,
                    //   animation: google.maps.Animation.BOUNCE
            });

            marker<?= $i ?>.addListener('click', function() {
                // tampilkan info window di atas marker
                infowindow<?= $i ?>.open(peta, marker<?= $i ?>);
            });
            <?php } ?>

        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
          </script>