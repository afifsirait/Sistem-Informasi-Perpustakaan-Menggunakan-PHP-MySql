<?php

//Deklarasi variabel dan pemberian nilai
$nama="Afif";//tipe string
$umur=20; //tipe integer
$status=true; //tipe boolean

// Menampilkan data ke output dari variabel
echo "Nama : $nama <br>";
echo "Umur : ".$umur." <br>";

print "status : $status <br>";

//Operator 
/*
 * 1. Aritmatika (Kali, Bagi, tambah, Kurang, Modulus)
 * Modulus --> % artinya modulus itu akan menghasilkan sisa bagi
 * Misalnya : 10%2 hasilnya 0
 * 2.Operator Operator logika (AND, OR, NOT)
 *      - AND : &&
 *      - OR  : ||
 *      - NOT : !
 * 3.Operator perbandingan
 *      - Sama Dengan ==
 *      - Besar atau sama dengan >= Ex.10
 *      - Kecil dari <
 *      - Besar dari >
 *      - Kecil atau sama dengan <=
 *      - Tidak sama dengan !=
 * 4.Operator Increment / Decrement
 *  - Untuk menambah data
 * a. Increment : Menambah satu data (++)
 * b. Decrement : Mengurangi satu data (--)
 * ex. a.=10;
 *      a++;
 *      output ; 11
 *     b.=10;
 *     b--;
 *     output : 9
 *  
 */

/*
 * Materi Struktur Kontrol
 * 1. Penyeleksian / percabangan / pemilihan kondisi
 * 2. Perulangan
 * 1a. if --> if, if-else, if-else-if
 * 1b. switch-case
 * 2a. for
 * 2b. while
 * 2c. do-while / repeat-Until
 *  
 */

$nilai=81;
//menggunakan if
if($nilai==80){
    echo "Nilai Anda A, Anda Lulus";
}
if($nilai==80){
    echo "Nilai Anda A, Anda Lulus";
}else{
    echo "Nilai Anda A+";
    
}

//Menggunakan perulangan
//Menampilkan data sebanyak 100 kali
for($i=0;$i<=100;$i++){
    echo "Data sekarang : $i<br>";
}
for($i=100;$i>=0;$i--){
    echo "Data sekarang : $i<br>";
}
