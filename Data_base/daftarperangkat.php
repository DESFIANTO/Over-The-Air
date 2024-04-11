<?php 
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dbota");

//baca data dari tabel tb_sensor
$sql = mysqli_query($konek, "select * from daftar_perangkat order by id desc"); // data terakhir akan berada diatas

//baca data paling atas
$data = mysqli_fetch_array($sql);
$daftarperangkat = $data['daftarperangkat'];

//uji apabila nilai waktu balum ada, maka anggap waktu = 0
if( $daftarperangkat == "") $daftarperangkat = 0;

//cetak nilai daftarperangkat
echo $daftarperangkat ;


?>