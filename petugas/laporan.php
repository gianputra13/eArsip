<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Laporan Harian</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Laporan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="panel">

        <div class="panel-body">


            <div class="pull-right">
                <a href="laporan_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Create Laporan</a>
            </div>

            <br>
            <br>
            <br>

            <center>
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                ?>
                        <div class="alert alert-danger">File laporan gagal diupload. krena demi keamanan file .php tidak diperbolehkan.</div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-success">Laporan berhasil tersimpan.</div>
                <?php
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <!-- <th width="1%">No</th> -->
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Masalah</th>
                        <th>Analisa</th>
                        <th>Penyelesaian</th>
                        <th>Customer</th>
                        <th>Divisi</th>
                        <th>Petugas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $arsip = mysqli_query($koneksi, "SELECT * FROM laporan,petugas WHERE laporan_petugas=petugas_id ORDER BY id_laporan DESC");
                    while ($p = mysqli_fetch_array($arsip)) {
                    ?>
                        <tr>
                            <!-- <td><?php echo $no++; ?></td> -->
                            <td><?php echo $p['tgl_mulai'] ?></td>
                            <td><?php echo $p['tgl_akhir'] ?></td>
                            <td><?php echo $p['masalah'] ?></td>
                            <td><?php echo $p['analisa'] ?></td>
                            <td><?php echo $p['penyelesaian'] ?></td>
                            <td><?php echo $p['customer'] ?></td>
                            <td><?php echo $p['divisi'] ?></td>
                            <td><?php echo $p['petugas_nama'] ?></td>
                            <td class="text-center">

                                <div class="modal fade" id="exampleModal_<?php echo $p['id_laporan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="arsip_hapus.php?id=<?php echo $p['id_laporan']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-group">
                                    <!-- <a target="_blank" class="btn btn-default" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a> -->
                                    <!-- <a href="arsip_edit.php?id=<?php echo $p['id_laporan']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?php echo $p['id_laporan']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
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