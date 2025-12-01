<?php
require_once 'Mahasiswa.php';

/*
| MODUL 1 (Instansiasi tanpa constructor)
*/

$m1_obj1 = new Mahasiswa("Aisyah Indriani", "2310010223");
$m1_obj2 = new Mahasiswa("Sinta Dewi", "2310010234");

/*
| MODUL 2 (Instansiasi dengan constructor)
*/

$m2_obj1 = new Mahasiswa("Budi Santoso", "2023001");
$m2_obj2 = new Mahasiswa("Citra Kirana", "2023002");

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Modul 1 & Modul 2</title>

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

    <!--  MODUL 1  -->
    <div class="container">
        <h1>Modul 1: Konsep Dasar OOP (Class & Object)</h1>

        <h2>Objek Pertama: <?php echo $m1_obj1->nama; ?></h2>
        <div class="output">
            <?php $m1_obj1->sayHello(); ?>
        </div>

        <h2>Objek Kedua: <?php echo $m1_obj2->nama; ?></h2>
        <div class="output">
            <?php $m1_obj2->sayHello(); ?>
        </div>
    </div>

    <!--  MODUL 2  -->
    <div class="container">
        <h1>Modul 2: Konstruktor, Destruktor, dan $this</h1>

        <h2>Objek Pertama: <?php echo $m2_obj1->nama; ?></h2>
        <div class="output">
            <?php $m2_obj1->sayHello(); ?>
        </div>

        <h2>Objek Kedua: <?php echo $m2_obj2->nama; ?></h2>
        <div class="output">
            <?php $m2_obj2->sayHello(); ?>
        </div>
    </div>

</body>

</html>