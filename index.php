<?php
session_start();
require ('function/functions.php');
include ('function/postalert.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indo Car Rental</title>
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="style/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- poppins -->
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
                <h6 class="mb-0"><?=$_SESSION["nama"];?></h6>
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
    <!-- MODAL LOGIN -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="container">
                        <div class="mb-3">
                            <label for="user" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                aria-describedby="adminHelp">
                        </div>
                        <div id="help" class="form-text">Belum pernah daftar? <a href="">Registrasi</a></div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="login">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section id="banner" class="d-flex justify-content-center">
        <div class="row container-fluid justify-content-center align-items-center p-0" data-aos="fade-down">
            <h1 class="text-center">Indo Car Rental</h1>
            <a href="#pills-select" style="text-decoration: none; color:black;"><h3 class="text-center">Pilih Mobilmu</h3></a>
            <img src="assets/expand.svg" alt="expand" class="w-auto">
            <img class="mt-5 p-0" src="assets/Background.png" alt="background">
        </div>
    </section>

    <section id="pills-select" data-aos="fade-down">
        <div class="row container-fluid justify-content-center m-0">
            <ul class="nav nav-pills justify-content-center p-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">MPV</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">SUV</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Sedan</button>
                </li>
            </ul>
        </div>
    </section>

    <section id="isi" data-aos="fade-down">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row container-fluid justify-content-center m-0">
                    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car1">
                                <div class="card border-0 p-5">
                                    <img src="assets/mpv/alphard.png" class="card-img-top" alt="alphard">
                                    <div class="card-body">
                                        <h5 class="card-title">Toyota Alphard 2022</h5>
                                        <p class="card-text">Rp 1.000.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car2">
                                <div class="card border-0 p-5">
                                    <img src="assets/mpv/avanza.png" class="card-img-top" alt="avanza">
                                    <div class="card-body text-car">
                                        <h5 class="card-title">Toyota Avanza 2021</h5>
                                        <p class="card-text">Rp 100.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car3">
                                <div class="card border-0 p-5">
                                    <img src="assets/mpv/innova.png" class="card-img-top" alt="innova">
                                    <div class="card-body text-car">
                                        <h5 class="card-title">Toyota Innova 2020</h5>
                                        <p class="card-text">Rp 150.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUV LIST -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="row container-fluid justify-content-center m-0">
                    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car4">
                                <div class="card border-0 p-5">
                                    <img src="assets/suv/fortuner.png" class="card-img-top" alt="fortuner">
                                    <div class="card-body">
                                        <h5 class="card-title" >Toyota Fortuner 2022</h5>
                                        <p class="card-text">Rp 490.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car5">
                                <div class="card border-0 p-5">
                                    <img src="assets/suv/hrv.png" class="card-img-top" alt="hrv">
                                    <div class="card-body text-car">
                                        <h5 class="card-title">Honda HR-V 2021</h5>
                                        <p class="card-text">Rp 430.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car6">
                                <div class="card border-0 p-5">
                                    <img src="assets/suv/pajero.png" class="card-img-top" alt="pajero">
                                    <div class="card-body">
                                        <h5 class="card-title">Mitsubishi Pajero Sport Dakar 2022</h5>
                                        <p class="card-text">Rp 600.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEDAN LIST -->
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                <div class="row container-fluid justify-content-center m-0">
                    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car7">
                                <div class="card border-0">
                                    <img src="assets/sedan/camry.png" class="card-img-top" alt="camry">
                                    <div class="card-body">
                                        <h5 class="card-title">Toyota Camry 2022</h5>
                                        <p class="card-text">Rp 500.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#pilih-car8">
                                <div class="card border-0">
                                    <img src="assets/sedan/vios.png" class="card-img-top" alt="vios">
                                    <div class="card-body">
                                        <h5 class="card-title">Toyota Vios 2021</h5>
                                        <p class="card-text">Rp 450.000,- / 4 jam</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MODAL PILIH NOT LOGIN -->
    <?php if(!isset($_SESSION["login"])): ?>
        <?php foreach($mobil as $row): ?>
            <div class="modal fade" id="pilih-car<?= $row["id"]?>" tabindex="-1" aria-labelledby="pilih-car" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pilih-car">LOGIN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post">
                            <div class="container">
                                <div class="mb-3">
                                    <label for="user" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="password"
                                        aria-describedby="adminHelp">
                                </div>
                                <div id="help" class="form-text">Belum pernah daftar? <a href="tambah_user.php">Registrasi</a></div>
                            </div>
                            <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="login">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- MODAL PILIH LOGIN -->
    <?php if(isset($_SESSION["login"])): ?>
        <?php foreach($mobil as $row): ?>
            <div class="modal fade" id="pilih-car<?= $row["id"];?>" tabindex="-1" aria-labelledby="pilih-car" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title" id="pilih-car">CHOOSE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post">
                            <div class="container">
                                <div class="row mb-3 text-center justify-content-center border-bottom">
                                    <div class="col"><h5><?= $row["mobil"];?></h5></div>
                                    <div class="col"><?= $row["tarif"];?></div>
                                </div>
                                <div class="row mb-2">
                                    <h6>Opsi</h6>
                                    <div class="col">
                                        <p class="m-0">Penjemputan Kendaraan</p>
                                        <div class="ms-5 form-check">
                                            <input class="form-check-input" type="radio" name="kirim" id="flexRadioDefault1<?= $row["id"];?>" value="Ambil">
                                            <label class="form-check-label" for="flexRadioDefault1<?= $row["id"];?>">
                                                Ambil 
                                            </label>
                                        </div>
                                        <div class="ms-5 form-check">
                                            <input class="form-check-input" type="radio" name="kirim" id="flexRadioDefault2<?= $row["id"];?>" value="Antar" checked>
                                            <label class="form-check-label" for="flexRadioDefault2<?= $row["id"];?>">
                                                Antar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="m-0">Jasa Sopir</p>
                                        <div class="ms-5 form-check">
                                            <input class="form-check-input" type="radio" name="sopir" id="flexRadioDefault3<?= $row["id"];?>" value="Ya">
                                            <label class="form-check-label" for="flexRadioDefault3<?= $row["id"];?>">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="ms-5 form-check">
                                            <input class="form-check-input" type="radio" name="sopir" id="flexRadioDefault4<?= $row["id"];?>" value="Tidak" checked>
                                            <label class="form-check-label" for="flexRadioDefault4<?= $row["id"];?>">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group">
                                        <input type="hidden" name="nama" class="form-control" value="<?= $_SESSION["nama"];?>" readonly>
                                        <input type="hidden" id="harga<?=$row["id"];?>" class="form-control" value="<?=$row["harga"];?>" readonly>
                                        <input type="hidden" name="kendaraan" class="form-control" value="<?=$row["mobil"];?>" readonly>
                                    </div>
                                    <h6>Lama Sewa</h6>
                                    <div class="form-group">
                                        <input type="text" id="jumlah<?=$row["id"];?>" name="sewa" class="form-control" placeholder="Hitungan Jam">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="text" id="total<?=$row["id"];?>" name="total" class="form-control" placeholder="Biaya Total" readonly="">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingTelp<?= $row["id"];?>" name="phone" placeholder="08XXXXXXXXXX">
                                    <label for="floatingTelp<?= $row["id"];?>">Nomer Telepon</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingAlamat<?= $row["id"];?>" style="height: 90px" name="alamat" required></textarea>
                                    <label for="floatingAlamat<?= $row["id"];?>">Alamat</label>
                                </div>
                                <div id="help" class="form-text">*Pihak Rental akan menghubungi anda nanti</div>
                            </div>
                            <div class="modal-footer border-top-0">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif; ?>
    
    <section id="why" class="rounded-top shadow-lg mt-5 pb-5">
        <div class="row container-fluid justify-content-center m-0 text-center">
            <h2 class="mt-5">Kenapa Harus Indo Car Rental?</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                <div class="col d-flex justify-content-center">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0 justify-content-center">
                            <div class="row col-md-6 align-items-center">
                                <img src="assets/rental.jpg" class="img-fluid rounded-5" alt="rental">
                            </div>
                            <div class="row col-md-6 align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Sopir handal dan terpercaya</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0 justify-content-center">
                            <div class="row col-md-6 align-items-center">
                                <img src="assets/happy.jpg" class="img-fluid rounded-5" alt="happy">
                            </div>
                            <div class="row col-md-6 align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Membuat keluarga bahagia</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0 justify-content-center">
                            <div class="row col-md-6 align-items-center">
                                <img src="assets/image.jpg" class="img-fluid rounded-5" alt="happy">
                            </div>
                            <div class="row col-md-6 align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Murah!</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-black text-white">
        <div class="container justify-content-center d-flex flex-wrap align-items-center mt-5 mb-5">
            <div class="p-1 m-2 col-5">
                <div class="row">
                    <label for="alamat" class="col-sm-3">Alamat</label>
                    <div class="col-sm-5">
                        <h6>Jl. Ringroad Selatan</h6>
                    </div>
                </div>
                <div class="row">
                    <label for="telepon" class="col-sm-3">Telepon</label>
                    <div class="col-sm-5">
                        <h6>(0812) 18107298</h6>
                    </div>
                </div>
                <div class="row">
                    <label for="fax" class="col-sm-3">Fax</label>
                    <div class="col-sm-5">
                        <h6>(0274) XXXXXX</h6>
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="col-sm-3">Email</label>
                    <div class="col-sm-5">
                        <a href="mailto:rauufanugerahakbar@gmail.com" class="unstyle"><h6>rauufanugerahakbar@gmail.com</h6></a>
                    </div>
                </div>
            </div>
            <div class="p-1 m-2 col-5 align-items-center">
                <div class="row align-items-center text-center">
                    <img src="assets/logo.png" alt="indocarrental">
                </div>            
            </div>
        </div> 
    </section>

    <section id="footer" class="d-flex justify-content-center bg-primary text-light">
        <h6 class="m-0">Rauuf Anugerah Akbar</h6>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <?php foreach($mobil as $row):?>
    <script type="text/javascript">
        $('#jumlah<?=$row["id"]?>, #harga<?=$row["id"]?>').on('keyup',function(){
            var jumlah = $("#jumlah<?=$row["id"]?>").val();
            var harga = $("#harga<?=$row["id"]?>").val();
            var sisa = parseInt(jumlah) % 4;
            var bagi = parseInt(jumlah) / 4;
            var bagi = parseInt(bagi);
            var hargaBagi = parseInt(harga) / 4;
            var hargaBagi = parseInt(hargaBagi);
            var total = ((bagi * parseInt(harga)) + (sisa * hargaBagi));

            var ubah = String(total);
            var hasilAngka = formatRibuan(ubah);
    
            $("#total<?=$row["id"]?>").val('Rp'+hasilAngka+',-');
        });
        function formatRibuan(angka){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split           = number_string.split(','),
            sisa            = split[0].length % 3,
            angka_hasil     = split[0].substr(0, sisa),
            ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
    
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                angka_hasil += separator + ribuan.join('.');
            }
    
            angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
            return angka_hasil;
        }
    </script>
    <?php endforeach; ?>
</body>

</html>