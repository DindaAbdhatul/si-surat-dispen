<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">No Surat</label>
                            <div class="col-sm-9">
								<input type="text" name="no_surat" class="form-control" id="inputEmail3" placeholder="Input Nomor Surat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Keluar" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Prihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="prihal" class="form-control" id="inputEmail3" placeholder="Input Prihal">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tujuan Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan" class="form-control" id="inputEmail3" placeholder="Input Tujuan Surat">
                            </div>
                         <div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Input Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=suratklr&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_surat=$_POST['no_surat'];
    $tgl_suratkeluar =$_POST['tanggal'];
	$prihal=$_POST['prihal'];
	$tujuansurat=$_POST['tujuan'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO suratkeluar VALUES ('','$no_surat','$tgl_suratkeluar','$prihal','$tujuansurat','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Surat Keluar Error");
    if ($query){
        echo "<script>window.location.assign('?page=j_surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
