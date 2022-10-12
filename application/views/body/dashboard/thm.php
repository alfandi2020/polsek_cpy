<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="col-sm-4 mt-4">
                    <a href="javascript:history.back()" class="btn btn-warning"><i class='bx bx-left-arrow-alt'></i></a>

                </div>
                <div class="card-body">
                    <h5 class="card-title">THM & Warung Miras</h5>
                    <!-- <p class="card-text"> -->
                    <div class="card-datatable table-responsive">
                        <table id="tabel-data" class="datatables-basic table">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $x) {?>
                                <tr>
                                    <td><?= $x->kategori ?></td>
                                    <td><?=$x->alamat?></td>
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