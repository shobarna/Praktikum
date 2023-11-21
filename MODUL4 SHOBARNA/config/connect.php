<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$dbhostname = 'localhost:3308';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'modul4_wad';

$conn = new mysqli ($dbhostname,$dbusername,$dbpassword,$dbname);

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

if($conn->connect_error){
    die("Koneksi gagal : " . $conn->connect_error);
} 

?>