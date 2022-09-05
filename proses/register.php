<?php
    require '../koneksi.php';


    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $refresh = header("location:../register.php");

    if(empty($nama)){
        setcookie('error_register', 'nama anda kosong', time() + 2, "/");
        // echo $refresh;
    }
    elseif(empty($email)){
        setcookie('error_register', 'email anda kosong', time() + 2, "/");
        // echo $refresh;
    }
    elseif(empty($password)){
        setcookie('error_register', 'password anda kosong', time() + 2, "/");
        // echo $refresh;
    }
    elseif(empty($confirm_password)){
        setcookie('error_register', 'confirm password anda kosong', time() + 2, "/");
        // echo $refresh;
    }
    elseif($password =! $confirm_password){
        setcookie('error_register', 'password dan confirm password tidak sama', time() + 2, "/");
        // echo $refresh;
    }
    else{
        $checkUser = $conn->prepare("SELECT * FROM user WHERE email=:email");
        $checkUser->bindValue(':email', $email);
        $checkUser->execute();
        if($checkUser->rowCount()){
            setcookie('error_register', 'akun email sudah terdaftar', time() + 2, "/");
            // echo $refresh;
        }
        else{
            setcookie("error_register", "", time() + 2, "/");
            $hashedpass = password_hash($password, PASSWORD_DEFAULT);
            $register = $conn->prepare("INSERT INTO user(nama,email,password,role) VALUES (:nama,:email,:password,:role)");
            $register->bindValue(':nama', $nama);
            $register->bindValue(':email', $email);
            $register->bindValue(':password', $hashedpass);
            $register->bindValue(':role', 'Member');
            $register->execute();
            header("Location:../login.php");
        }
    }
?>