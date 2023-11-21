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
            $row=1;
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $result = mysqli_query($conn, "SELECT * FROM showroom_mobil")or die (mysqli_connect_error());
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($result){
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <table class="table">
                <th>
                    <h1>List Mobil</h1>
                    <table border="1" class="table">
                    <tr>
                        <th>#</th>
                        <th>Nama Mobil</th>
                        <th>Brand Mobil</th>
                        <th>Warna Mobil</th>
                        <th>Tipe Mobil</th>
                        <th>Harga Mobil</th>
                </tr>
                </th>
            <tr>
                <td><?php echo $row++;?></td>
                <td><?php echo $result['nama_mobil'];?></td>
                <td><?php echo $result['brand_mobil'];?></td>
                <td><?php echo $result['warna_mobil'];?></td>
                <td><?php echo $result['tipe_mobil'];?></td>
                <td><?php echo $result['harga_mobil'];?></td>
                <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </tr>
            <?php
                }
            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
            }else{
                echo "Tidak ada data dalam table";
            }
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
