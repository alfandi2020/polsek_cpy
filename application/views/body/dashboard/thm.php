<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="col-sm-4 mt-4">
                    <a href="javascript:history.back()" class="btn btn-warning"><i class='bx bx-left-arrow-alt'></i></a>

                </div>
                <div class="card-body">
                    <?php if($data[0]->kategori == '2'){ ?>
                    <h5 class="card-title">THM & Warung Miras</h5>
                    <?php }else if($data[0]->kategori == '3'){ ?>
                    <h5 class="card-title">Penyakit Masyarakat</h5>
                    <?php }else if($data[0]->kategori == '4'){ ?>
                    <h5 class="card-title">3C</h5>
                    <?php }else if($data[0]->kategori == '5'){ ?>
                    <h5 class="card-title">Kejahatan Jalanan & Kenakalan Remaja</h5>
                    <?php } ?>
                    <!-- <p class="card-text"> -->
                    <select name="kelurahan" class="form-control">
                        <option selected disabled>Pilih Kelurahan</option>
                        <?php $db = $this->db->get('dt_kelurahan')->result(); 
                        foreach ($db as $x) { ?>
                            <option value="<?= $x->id ?>"><?= $x->kelurahan ?></option>
                        <?php } ?>
                    </select>
                    <div class="card-datatable table-responsive">
                        <table id="tabel-data" class="datatables-basic table">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $x) {?>
                                <tr>
                                    <td><?= $x->kategori ?></td>
                                    <td><?=$x->keterangan?></td>
                                    <td><?=$x->alamat?></td>
                                    <td>
                                        <a href="<?= base_url('dashboard/detail_pelaku/'.$x->id_kriminal) ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>