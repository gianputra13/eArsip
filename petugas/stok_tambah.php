<?php include 'header.php';
error_reporting(0);
?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Create Data</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Stok</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Create Data</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="stok.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                    <?php
                    $carikode = mysqli_query($koneksi, "SELECT 'code' from datastok");
                    $datakode = mysqli_fetch_array($carikode);
                    $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 1);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $kode_otomatis = "KODE" . str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "KODE001";
                    }
                    ?>


                    <form method="post" action="stok_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="hidden" class="form-control" name="code" required="required" value="<?php echo $kode_otomatis ?>">
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" class="form-control" name="jenis" required="required">
                        </div>

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kondisi </label>
                            <input type="text" class="form-control" name="kondisi" required="required">
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control" name="total" required="required">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Create">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>