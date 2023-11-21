<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $conn = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            $result = mysqli_fetch_assoc($conn);
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($result->num_rows > 0){
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <table class="table">
                <th>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                </tr>
                </th>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <td><?= $row['nama_mobil']?></td>
                <td><?= $row['brand_mobil']?></td>
                <td><?= $row['warna_mobil']?></td>
                <td><?= $row['tipe_mobil']?></td>
                <td><?= $row['harga_mobil']?></td>
                <td><button href="form_detail_mobil.php?id=<?php echo $select['id'] ?>" class="btn btn-primary" value="Detail"></td>
            </tr>
            <?php
                }
            }else{
                echo "Tidak ada data dalam table";
            }
            ?>
            <?php
            ?>
        </div>
    </center>
</body>
</html>
