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
</body>
</html>