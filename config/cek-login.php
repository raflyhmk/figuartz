<?php
session_start();

include 'connector.php';


// cek cookies user
if(isset($_COOKIE['loginUser'])){
    if($_COOKIE['loginUser'] == 'true'){
        $_SESSION['loginUser'] == true;
    }
}

if(isset($_COOKIE['loginAdmin'])){
    if($_COOKIE['loginAdmin'] == 'true'){
        $_SESSION['loginAdmin'] == true;
    }
}


if(isset($_POST['btn-loginAdmin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi, "select username, password from admin where username='$username' and password='$password' ");

    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $_SESSION['username'] = $username; 
        $_SESSION['status'] = "login"; 
        if(isset($_POST['rememberAdmin'])){
            setcookie('userAdmin', $username, time() + 3600, '/');
            setcookie('passwordAdmin', $password, time() + 3600, '/');
            setcookie('loginAdmin', 'true', time() + 3600, '/');     
        }   
        echo "<script>alert ('Admin-san berhasil login'); document.location.href = '../pages/admin/dashboard.php'</script>";
        }else{
            echo "<script>alert ('gagal login'); document.location.href = '../pages/login-admin.php'</script>";
        }
}

if(isset($_POST['btn-loginUser'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi, "select email, password from users where email='$email' and password='$password' ");

    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $_SESSION['email'] = $email;   
        $_SESSION['status'] = "login";
        if(isset($_POST['rememberUser'])){
            setcookie('emailUser', $email, time() + 3600, '/');
            setcookie('passwordUser', $password, time() + 3600, '/');
            setcookie('loginUser', 'true', time() + 3600, '/');     
        } 
        echo "<script>alert ('Kamu berhasil login'); document.location.href = '../pages/user/home.php'</script>";
        }else{
            echo "<script>alert ('gagal login'); document.location.href = '../pages/login.php'</script>";
            }
}

?>