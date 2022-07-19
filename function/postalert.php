<?php
$mobil = ambil("SELECT * FROM mobil");
//tambah akun
if(isset($_POST["registrasi"])){
    if(registrasi($_POST) > 0){
        echo "
            <script>
                alert ('User baru ditambah');
                window.location.replace('');
            </script>
        ";
        exit;
    }else{
        echo mysqli_error($conn);
    }
}

//cek login index
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        //cek user
    if(mysqli_num_rows($data) === 1){
            //cek pass
        
        $row = mysqli_fetch_assoc($data);

        if($row["id"]==='1'){
            $_SESSION["id"] = true;
        }

        if(password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["nama"] = $row["nama"];
            if(isset($_SESSION["id"])){
                header("Location:admin.php");
            }
            header("Refresh:0");
            exit();
        }
    }
    echo"
        <script>
            alert('Username atau password salah');
        </script>
    ";
}

//logout
if(isset($_POST["logout"])){
    if(logout()){
        echo"<script>
            alert('Logout Berhasil');
            window.location.replace('');
        </script>";
    }
}

//tulis ke file
if(isset($_POST["submit"])){
    if(tulis($_POST)){
        echo "<script>
            alert('Berhasil Memesan!');
        </script>";
        header('Refresh:0');
    }
}

?>