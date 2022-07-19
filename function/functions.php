<?php
$conn = mysqli_connect("localhost", "root", "", "prak");
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );

function ambil($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $phone = $data["phone"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)){
        echo"<script>
                alert('Data sudah tersedia')
            </script>";
        return false;
    }
    
    if($password !== $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user VALUES('', '$nama', '$phone', '$username', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function logout(){
    $_SESSION = [];
    session_unset();
    session_destroy();
    return true;
}

function tulis($data){
    $nama = $data["nama"];
    $phone = $data["phone"];
    $sopir = $data["sopir"];
    $kirim = $data["kirim"];
    $kendaraan = $data["kendaraan"];
    $sewa = $data["sewa"];
    $total = $data["total"];
    $alamat = $data["alamat"];
    $fp = fopen("pesanan.txt", "a+");
    fputs($fp, "$nama|$phone|$sopir|$kirim|$kendaraan|$sewa|$total|$alamat\n");
    fclose($fp);
    return true;
}
?>