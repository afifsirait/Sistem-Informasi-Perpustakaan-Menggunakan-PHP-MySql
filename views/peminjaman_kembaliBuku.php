<?php
$judulbuku=$_GET['judulbuku'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE judul_buku ='$judulbuku'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Kembali Pinjaman Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="judulbuku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
								<input type="text" name="judulbuku" value="<?=$data['judul_buku']?>" class="form-control" id="inputEmail3" placeholder="Judul Buku" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" value="<?=$data['peminjam']?>" class="form-control" id="inputEmail3" placeholder="Nama Peminjam" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="tglPinjam" value="<?=$data['tgl_pinjam']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="tglKembali" class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglKembali" class="form-control" id="inputEmail3" placeholder="Tanggal Kembali">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=peminjaman&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tglPinjam =$_POST['tglPinjam'];
		$potTgl = substr($tglPinjam,8,2);
		$potBln = substr($tglPinjam,5,2);
		$potThn = substr($tglPinjam,0,4);
	$tglKembali=$_POST['tglKembali'];
		$potTglKem = substr($tglKembali,8,2);
		$potBlnKem = substr($tglKembali,5,2);
		$potThnKem = substr($tglKembali,0,4);
	$lamapinjam = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE peminjaman SET tgl_kembali='$tglKembali', lama_pinjam='$lamapinjam' WHERE judul_buku='$judulbuku'";
	$sqlBuku="UPDATE buku SET status='Ada' WHERE judul_buku='$judulbuku'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Buku Error");
	$queryBuku=  mysqli_query($koneksi, $sqlBuku) or die ("SQL Simpan Data Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>