<?php

require 'connect.php';

// (1) Mulai session

//

session_start();

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST['email'];
    // b. Ambil nilai input name
    $name =  $_POST['name'];
    // c. Ambil nilai input username
    $username =  $_POST['username'];
    // d. Ambil nilai input password
    $password = $_POST['password'];
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()

    $password_hash = password_hash($password, PASSWORD_DEFAULT);


//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email

    $queryEmail = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
   

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
   
    if(mysqli_num_rows($queryEmail) == 0){
       

    // a. Buatlah query untuk melakukan insert data ke dalam database

    $query = "INSERT INTO users 
    (email, name, username, password) 
    VALUES ('$email', '$name', '$username', '$password_hash')";

    $querysql = mysqli_query($conn,$query);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    
    if($querysql){

    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil

        $_SESSION["message"] = "Pendaftaran berhasil";
        $_SESSION["color"] = "success";
        header("Location: ../views/login.php");
    }else{
        $_SESSION["message"] = "Pendaftaran tidak berhasil";
        $_SESSION["color"] = "danger";
        header("Location: ../views/login.php");
    }
    
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar

}else{
    $_SESSION["message"] = "Data email sudah terdaftar";
    $_SESSION["color"] = "danger";
    header("Location: ../views/register.php");
}


?>