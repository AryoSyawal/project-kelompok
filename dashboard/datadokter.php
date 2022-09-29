<?php

    include 'koneksi.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body>
<div class="menubar">
        <div class="sidebar">
        <img src="assets/hospital.png" alt="">
        <ul class="menu">
            <li><a href="dashboard.php"><img src="assets/home.png" alt=""></a></li>
            <li><a href="datadokter.php"><img src="assets/doctor.png" alt=""></a></li>
            <li><a href="pasien.php"><img src="assets/patient.png" alt=""></a></li>
            <li><a href="konsultasi.php"><img src="assets/konsul.png" alt=""></a></li>
        </ul>
        </div>
        <div class="navbar">
            <button class="menu"><img src="assets/menu.png" alt=""></button>
        </div>
    </div>

<div class="table">

            <table border='1'>
                <tr>
                    <td>ID</td>
                    <td>NAMA</td>
                    <td>BIDANG</td>
                    <td>KELAMIN</td>
                    <td>UMUR</td>
                    <td>ALAMAT</td>
                    <td>ACTION</td>
                </tr>
                <?php
                
                $sql = "SELECT * FROM data_dokter";
                $query = mysqli_query($connect, $sql);

                while($dokter = mysqli_fetch_array($query)){
                    echo "<tr>
                    <td>$dokter[id_dokter]</td>
                    <td>$dokter[nama_dokter]</td>
                    <td>$dokter[spesialisasi]</td>
                    <td>$dokter[kelamin]</td>
                    <td>$dokter[umur]</td>
                    <td>$dokter[alamat]</td>
                    <td>
                    <a href='editdokter.php?id_dokter=".$dokter['id_dokter']."'>Edit</a>
                    <a href='hapusdokter.php?id_dokter=".$dokter['id_dokter']."'>hapus</a>
                    </td>

                </tr>";
                }
                ?>
                
            </table>
</div>
</body>
</html>