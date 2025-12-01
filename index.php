<?php
require_once 'Mahasiswa.php';

/*
| MODUL 1 (Class & Object)
*/

$m1_obj1 = new Mahasiswa("Aisyah Indriani", "2310010");
$m1_obj2 = new Mahasiswa("Sinta Dewi", "2310011");

/*
| MODUL 2 (Constructor, Destructor, $this)
*/

$m2_obj1 = new Mahasiswa("Budi Santoso", "2023001");
$m2_obj2 = new Mahasiswa("Citra Kirana", "2023002");

/*
| MODUL 3 (Setter / Getter / Validasi)
*/

// Objek valid
$mhs1 = new Mahasiswa("Budi Santoso", "2023001");

// Objek tidak valid
$mhs2 = new Mahasiswa("Citra Kirana", "20230002"); // invalid

echo "<h3 style='color:#2980b9;'>--- DEMO SETTER (mhs1) ---</h3>";

$mhs1->setNim("1234567");   // valid
$mhs1->setNim("999");       // invalid
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Modul 1, 2, dan 3</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 650px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        h2 {
            color: #34495e;
            margin-top: 30px;
        }

        .output {
            background-color: #ecf0f1;
            border-left: 5px solid #3498db;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
    </style>
</head>

<body>

    <!-- ======================= -->
    <!--  MODUL 1               -->
    <!-- ======================= -->
    <div class="container">
        <h1>Modul 1: Konsep Dasar OOP (Class & Object)</h1>

        <h2>Objek Pertama: <?= $m1_obj1->nama; ?></h2>
        <div class="output">
            <?php $m1_obj1->sayHello(); ?>
        </div>

        <h2>Objek Kedua: <?= $m1_obj2->nama; ?></h2>
        <div class="output">
            <?php $m1_obj2->sayHello(); ?>
        </div>
    </div>

    <!-- ======================= -->
    <!--  MODUL 2               -->
    <!-- ======================= -->
    <div class="container">
        <h1>Modul 2: Constructor, Destructor, $this</h1>

        <h2>Objek Pertama: <?= $m2_obj1->nama; ?></h2>
        <div class="output">
            <?php $m2_obj1->sayHello(); ?>
        </div>

        <h2>Objek Kedua: <?= $m2_obj2->nama; ?></h2>
        <div class="output">
            <?php $m2_obj2->sayHello(); ?>
        </div>
    </div>

    <!-- ======================= -->
    <!--  MODUL 3               -->
    <!-- ======================= -->
    <div class="container">
        <h1>Modul 3: Encapsulation (Pengecekan Data)</h1>

        <h2>Objek Pertama: <?= $mhs1->nama; ?></h2>
        <div class="output">
            <?php $mhs1->sayHello(); ?>
            <p>
                <strong>NIM Saat Ini (via Getter):</strong>
                <span style="font-weight:bold;color:#e67e22;">
                    <?= $mhs1->getNim(); ?>
                </span>
            </p>
        </div>

        <h2>Objek Kedua: <?= $mhs2->nama; ?></h2>
        <div class="output">
            <?php $mhs2->sayHello(); ?>
            <p>
                <strong>NIM Saat Ini (via Getter):</strong>
                <span style="font-weight:bold;color:#e67e22;">
                    <?= $mhs2->getNim(); ?>
                </span>
            </p>

            <p style="color: red;">*Objek ini dibuat dengan NIM tidak valid, setter mencegah perubahan.</p>
        </div>

        <p>
            <em>(Coba hapus method **getNim()** dari kode dan akses NIM secara langsung: **$mhs1-
                >nim**. Anda akan mendapatkan Fatal Error karena NIM bersifat private!)</em>
        </p>
    </div>

</body>

</html>