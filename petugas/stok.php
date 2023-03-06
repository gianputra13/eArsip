<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Kategori</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Kategori</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Stok Data</h3>
        </div>
        <div class="panel-body">

        <div class="pull-right">
            <a href="stok_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Create Data</a>
        </div>

        <br>
        <br>
        <br>

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="1%">Kode</th>
                        <th>Jenis</th>
                        <th>Nama Barang</th>
                        <th>Kondisi</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $kategori = mysqli_query($koneksi,"SELECT * FROM datastok ORDER BY id DESC");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p['code'] ?></td>
                            <td><?php echo $p['jenis'] ?></td>
                            <td><?php echo $p['namaBarang'] ?></td>
                            <td><?php echo $p['kondisi'] ?></td>
                            <td><?php echo $p['total'] ?></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<?php include 'footer.php'; ?>