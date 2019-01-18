<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="loker_buku" class="col-sm-3 control-label">Loker Buku</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="loker_buku" class="form-control">
                                    <option value="Buku Anak Anak">Buku Anak Anak</option>
                                    <option value="Buku Dongeng">Buku Dongeng</option>
                                    <option value="Buku Majalah">Buku Majalah</option>
                                    <option value="Buku Novel">Buku Novel</option>
                                    <option value="Buku Pembelajaran">Buku Pembelajaran</option>
                                    <option value="Buku Resep Masakan">Buku Resep Masakan</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rak atau Lemari" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor Laci</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_laci" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Laci" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Nomor Boks</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_boks" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Boks" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Nama Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengarang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-3">
                                <input type="date" name="tahun_terbit" class="form-control" id="inputEmail3" placeholder="Inputkan Tahun Terbit" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="inputPassword3" placeholder="Inputkan Penerbit Buku" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Penerima Buku" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $loker_buku=$_POST['loker_buku'];
	$rak=$_POST['no_rak'];
	$laci=$_POST['no_laci'];
	$boks=$_POST['no_boks'];
  $judulbuku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
  $tahun_terbit=$_POST['tahun_terbit'];
  $penerbit=$_POST['penerbit'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO buku VALUES ('','$loker_buku','$rak','$laci','$boks','$judulbuku','$pengarang','$tahun_terbit','$penerima','$penerbit','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
