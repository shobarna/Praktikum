<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php
include("connect.php");
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn = mysqli_connect("127.0.0.1:3306","root",'',"wad_modul3_shobarna");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE from showroom_mobil WHERE id=$id");
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    if($conn) {
        echo "<script>alert('Data Telah Ditambahkan')<?script>";
        echo "<meta http-equive='refresh' content='1 url=list_mobil.php'>";
    }
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    mysqli_close($conn);
// Tutup koneksi ke database setelah selesai menggunakan database

?>