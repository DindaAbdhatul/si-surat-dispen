<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Surat Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal Surat Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk/Keluar" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hal" class="col-sm-3 control-label">Prihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="hal" class="form-control" id="inputPassword3" placeholder="Inputkan Prihal" required>
                            </div>

                        <div class="form-group">
                            <label for="tujuan" class="col-sm-3 control-label">Tujuan Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepada" class="form-control" id="inputPassword3" placeholder="Inputkan Kepada" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Surat</button>
                            </div>
                        </div>
                    </form>

                <div class="panel-footer">
                    <a href="?page=suratmsk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_surat =$_POST['no_surat'];
    $tgl_suratmasuk  =$_POST['tanggal'];
	$hal      =$_POST['hal'];
	$tujuansurat   =$_POST['kepada'];
	$ket      =$_POST['ket'];
    //buat sql
    $sql="INSERT INTO suratmasuk VALUES ('','$no_surat','$tgl_suratmasuk','$hal','$tujuansurat','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan surat Error");
    if ($query){
        echo "<script>window.location.assign('?page=suratmsk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
