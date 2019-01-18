<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Buku</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail Buku-->
                    <?php
                    $sql = "SELECT *FROM buku WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Loker Buku</td> <td><?= $data['loker_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak/Lemari</td> <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Tingkat/Laci</td> <td><?= $data['no_laci'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Boks</td> <td><?= $data['no_boks'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengarang</td> <td><?= $data['nama_pengarang'] ?></td>
                        </tr>
						<tr>
                            <td>Tahun Terbit</td> <td><?= $data['tahun_terbit'] ?></td>
                        </tr>
						<tr>
                            <td>Penerbit Buku</td> <td><?= $data['penerbit'] ?></td>
                        </tr>
						<tr>
                            <td>Penerima Buku</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Buku </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

