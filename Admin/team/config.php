<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("us-cdbr-east-03.cleardb.com","bbe50cb499db89","18f0f5ab","akademik");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
