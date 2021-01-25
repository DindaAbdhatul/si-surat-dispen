<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM suratkeluar WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">No Surat</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_surat" value="<?=$data['no_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" value="<?=$data['tgl_suratkeluar']?>" class="form-control" id="inputEmail3" placeholder="Input Tanggal Surat Keluar">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prihal" class="col-sm-3 control-label">Prihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="prihal" value="<?=$data['prihal']?>" class="form-control" id="inputEmail3" placeholder="Input Prihal">
                            </div>

                        <div class="form-group">
                            <label for="tujuansurat" class="col-sm-3 control-label">Tujuan Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan" value="<?=$data['tujuansurat']?>" class="form-control" id="inputEmail3" placeholder="Input Tujuan Surat">
                            </div>

                        <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputEmail3" placeholder="Input Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jumlah Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jumlah Surat
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
    $tgl_suratkeluar =$_POST['tanggal'];
    $prihal=$_POST['prihal'];
    $tujuansurat=$_POST['tujuan'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE suratkeluar SET no_surat ='$no_surat', tgl_suratkeluar='$tgl_suratkeluar', prihal='$prihal', tujuansurat='$tujuansurat' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Error");
    if ($query){
        echo "<script>window.location.assign('?page=j_surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



