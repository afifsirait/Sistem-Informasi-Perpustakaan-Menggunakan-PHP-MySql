<?php
//ambil data dari form login
$btn=$_POST['login'];
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$pwd_enkripsi= md5($pwd);

//Baca data ke database dengan label user
include 'config/koneksi.php';
$sql="SELECT * FROM user WHERE username='$user' AND paswd='$pwd_enkripsi'";
$query=  mysqli_query($koneksi, $sql) or die ("SQL Login Error");
$jumlahdata=  mysqli_num_rows($query);
if($jumlahdata > 0){
    $data=  mysqli_fetch_array($query); //ambil data dan konversi menjadi array
    session_start(); //aktifkan session wajib
    $_SESSION['username']=$user;
    $_SESSION['idsesi']=session_id();
    $_SESSION['level']=$data['level'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['ket']=$data['ket'];
    $_SESSION['email']=$data['email'];
    //pindahkan ke halaman index
    header("location:index_admin.php", true);
}else{
    echo "<script> window.location.assign('index.php?error=yes');</script>";

}
