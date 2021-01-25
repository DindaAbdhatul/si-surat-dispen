<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Surat Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk dan Keluar Dinas Pendidikan Kab.Asahan </h2>
                        <h4>Jl.Jend. A. Yani, Kisaran Naga Kec.Kisaran Timur<br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21216</h4>
                        <hr>
                        <h3>DATA SELURUH SURAT MASUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No.</th>
                                <th>No.Surat</th>
                                <th width="30%">Tanggal Surat Masuk</th>
                                <th>Prihal</th>
                                <th>Tujuan Surat</th>
                                <th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM suratmasuk";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['tgl_suratmasuk'] ?></td>
                                    <td><?= $data['hal'] ?></td>
									<td><?= $data['tujuansurat'] ?></td>
									<td><?= $data['ket'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
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