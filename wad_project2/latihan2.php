<!DOCTYPE html>
<html>
<head>
    <title>Nomor 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 50px;
        }
        .result-box {
            background-color: #e5e5e5;
            padding: 20px;
            margin-top: 20px;
        }
        .form-container {
            display: flex;
            justify-content: center;
        }
        .form-group {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TUGAS 2 - PENGENALAN SERVER SIDE & DASAR PHP</h1>
        <form method="POST" action="" class="form-container">
            <div class="form-group">
                <label for="angka1">Angka Pertama</label>
                <input type="text" name="angka1" class="form-control">
            </div>

            <!-- Dropdown untuk Operator Perhitungan -->
            <div class="form-group">
                <label for="operator">Operasi</label>
                <select name="operator" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>

            <div class="form-group">
                <label for="angka2">Angka Kedua</label>
                <select name="angka2" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>

            <input type="submit" name="Hitung" value="Hitung" class="btn btn-primary">
        </form>

        <?php
        $hasil = ""; // Inisialisasi variabel $hasil dengan string kosong

        if (isset($_POST['Hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            // Lakukan perhitungan berdasarkan operator yang dipilih
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2; // Penjumlahan
                    break;
                case '-':
                    $hasil = $angka1 - $angka2; // Pengurangan
                    break;
                case '*':
                    $hasil = $angka1 * $angka2; // Perkalian
                    break;
                case '/':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2; // Pembagian
                    } else {
                        $hasil = "Tidak bisa membagi dengan nol";
                    }
                    break;
                default:
                    $hasil = "Operator tidak valid";
            }
        }

        ?>
        <div class="result-box">
            <p style="color: darkolivegreen;" class="result">Hasil Perhitungan : <?php echo $hasil; ?></p>
        </div>
    </div>
</body>
</html>
