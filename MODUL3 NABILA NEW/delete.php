<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM showroom_mobil WHERE id='$id'");
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $data = mysqli_query($connect, "DELETE FROM showroom_mobil WHERE id='$id'");
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($data) {
        echo "Data Berhasil dihapus";
    }else{
        echo "Data Gagal dihapus";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$connect->close();
?> 