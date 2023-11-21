<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$conn = mysqli_connect("127.0.0.1:3306","root","","wad_modul3_shobarna");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
    die("Koneksi gagal : ". mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
// 
?>