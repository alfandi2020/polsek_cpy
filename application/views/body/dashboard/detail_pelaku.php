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
                    <br><br>
                    <?php }else{ ?>
                        <h5>DATA PELAKU  : tidak ada </h5>

                        <?php } ?>
                    <!-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>