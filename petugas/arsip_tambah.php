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
                                <h4 style="margin-bottom: 0px">Upload Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Arsip</span></li>
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
                    <h3 class="panel-title">Upload arsip</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="arsip.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                    <?php
                    $carikode = mysqli_query($koneksi, "SELECT arsip_kode from arsip");
                    // menjadikannya array
                    $datakode = mysqli_fetch_array($carikode);
                    $jumlah_data = mysqli_num_rows($carikode);
                    // jika $datakode
                    if ($datakode) {
                        // membuat variabel baru untuk mengambil kode barang mulai dari 1
                        $nilaikode = substr($jumlah_data[0], 1);
                        // menjadikan $nilaikode ( int )
                        $kode = (int) $nilaikode;
                        // setiap $kode di tambah 1
                        $kode = $jumlah_data + 1;
                        // hasil untuk menambahkan kode 
                        // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
                        // atau angka sebelum $kode
                        $kode_otomatis = "KODE" . str_pad($kode, 4, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "KODE0001";
                    }
                    ?>


                    <form method="post" action="arsip_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Arsip</label>
                            <input type="text" class="form-control" name="kode" value="<?php echo $kode_otomatis ?>" required="required" readonly>
                        </div>

                        <div class="form-group">
                            <label>Nama Arsip</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required="required">
                                <option value="">Pilih kategori</option>
                                <?php
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($k = mysqli_fetch_array($kategori)) {
                                ?>
                                    <option value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>