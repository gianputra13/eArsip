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
                        <a href="laporan.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>


                    <form method="post" action="laporan_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="datetime-local" class="form-control" name="tgl_mulai" required="required">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="datetime-local" class="form-control" name="tgl_akhir" required="required">
                        </div>

                        <div class="form-group">
                            <label>Masalah </label>
                            <input type="text" class="form-control" name="masalah" required="required">
                        </div>

                        <div class="form-group">
                            <label>Analisa Masalah </label>
                            <input type="text" class="form-control" name="analisa" required="required">
                        </div>

                        <div class="form-group">
                            <label>Penyelesaian masalah</label>
                            <textarea style="resize:none;width:510px;height:80px;" class="form-control" name="penyelesaian" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Customer </label>
                            <input type="text" class="form-control" name="customer" required="required">
                        </div>

                        <div class="form-group">
                            <label>Divisi</label>
                            <select name="divisi" id="divisi" class="form-control">
                                <option selected>Pilih</option>
                                <option value="SS">SS</option>
                                <option value="IT">IT</option>
                                <option value="CS">CS</option>
                                <option value="AKT">AKT</option>
                                <option value="Outlet">Outlet</option>
                                <option value="HC">HC</option>
                                <option value="Warehouse">Warehouse</option>
                            </select>
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