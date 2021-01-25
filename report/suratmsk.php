<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM suratmasuk WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk dan Keluar Dinas Pendidikan Kab. Asahan </h2>
                        <h4>Jl.Jend. A. Yani, Kisaran Naga Kec.Kisaran Timur<br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21216</h4>
                        <hr>
                        <h3>DATA SURAT MASUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>No.Surat</td> <td><?= $data['no_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Surat Masuk</td> <td><?= $data['tgl_suratmasuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Prihal</td> <td><?= $data['hal'] ?></td>
                                </tr>
								<tr>
                                    <td>Tujuan Surat</td> <td><?= $data['tujuansurat'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Unknown Developer<strong></u><br>
                                        NIP.
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>