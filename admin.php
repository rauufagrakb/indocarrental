<?php
session_start();
if(!isset($_SESSION["id"])){
    echo"<script>
        window.location.replace('');
    </script>";
    header("Location:index.php");
    exit();
}
require ('function/functions.php');
include ('function/postalert.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indo Car Rental - Pesanan</title>
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <nav class="navbar bg-light sticky-top">
        <div class="container-fluid align-items-center">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="" width="40" height="34"
                    class="d-inline-block align-text-top">
                Indo Car Rental
            </a>
            
            <?php if(isset($_SESSION["login"])):?>
                <h6 class="m-0"><?=$_SESSION["nama"];?></h6>
                <form action="" method="post">
                    <button class="btn btn-primary" name="logout">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        Logout
                    </button>
                </form>
            <?php endif;?>
        </div>
    </nav>
    <section id="head">
        <div class="d-flex container-fluid justify-content-center">
            <h2>Daftar Pemesan</h2>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Jasa Supir</th>
                        <th scope="col">Penjemputan Kendaraan</th>
                        <th scope="col">Sewa(jam)</th>
                        <th scope="col">Biaya Total</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <?php 
                $no = 1;
                $fp = fopen("pesanan.txt", "r");
                ?>
                <?php while ($sisi = fgets($fp, 1004)):?>
                <?php $pisah = explode("|", $sisi);?>
                <tbody class="text-center">
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $pisah[0]; ?></td>
                        <td><?= $pisah[1]; ?></td>
                        <td><?= $pisah[2]; ?></td>
                        <td><?= $pisah[4]; ?>(<?= $pisah[3]?>)</td>
                        <td><?= $pisah[5]; ?></td>
                        <td><?= $pisah[6]; ?></td>
                        <td><?= $pisah[7]; ?></td>
                    </tr>
                </tbody>
                <?php $no++;?>
                <?php endwhile; ?>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>