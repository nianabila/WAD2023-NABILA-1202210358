<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$database = "modul3";
$connect = mysqli_connect("localhost:3306", "root", "", "modul3");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($connect -> connect_error){
    echo "Tidak bisa terhubung ke database";
}
// 
?>