<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn = mysqli_connect("127.0.0.1:3306","root",'',"wad_modul3_shobarna");
// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan m
// 
if (isset($_POST['nama_mobil'])){
// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama_mobil = $_POST['nama_mobil'];
    // b. Ambil data brand mobil
    $brand_mobil = $_POST['brand_mobil'];
    // c. Ambil data warna mobil
    $warna_mobil = $_POST['warna_mobil'];
    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST['tipe_mobil'];
    // e. Ambil data harga mobil
    $harga_mobil = $_POST['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
$result = mysqli_query($conn, "INSERT INTO showroom_mobil (nama_mobil,brand_mobil,warna_mobil,tipe_mobil,harga_mobil) VALUES('$nama_mobil','$brand_mobil','$warna_mobil','$tipe_mobil','$harga_mobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
if($conn) {
    echo "<script>alert('Data Telah Ditambahkan')<?script>";
    echo "<meta http-equive='refresh' content='1 url=list_mobil.php'>";
}   
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    else {
        echo "<script>alert('Error, Gagal Ditambahkan')<?script>";
        echo "<meta http-equive='refresh' content='1 url=list_mobil.php'>";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($conn);
}
?>