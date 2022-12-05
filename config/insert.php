<?php
session_start();

include 'connector.php';

if(isset($_POST['btn-insert'])){
    // menangkap name variabel insert mobil
    $namaProduk = $_POST['namaProduk'];
    $foto = $_FILES['fotoProduk']['name'];
    $file_foto = $_FILES['fotoProduk']['tmp_name'];
    move_uploaded_file($file_foto, "../images/".$foto);
    $series = $_POST['series'];
    $manufacture = $_POST['manufacture'];
    $tinggi = $_POST['tinggi'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];


    // insert mysql mobil
    $insertProduk=mysqli_query($koneksi,"insert into produk values('','$namaProduk','$foto','$series', '$manufacture', '$tinggi', '$harga', '$status')");


    if($insertProduk){
        echo "<script>alert ('Produk berhasil ditambahkan'); document.location.href = '../pages/admin/daftarProduk.php'</script>";
        
    }else{
         echo "<script>alert ('Produk gagal ditambahkan'); document.location.href = '../pages/admin/tambahProduk.php'</script>";
    }
}


if(isset($_POST['btn-register'])){
    // menangkap name variabel register
    $email = $_POST['email'];
    $name = $_POST['nama'];
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasiPassword'];

    if($password != $konfirmasiPassword){
	    echo "<script>alert ('konfirmasi password mu salah'); document.location.href = '../pages/user/register.php'</script>";
    }
    $cekEmail = mysqli_query($koneksi, "select email from users where email = '$email'");
    $emailExist = mysqli_fetch_array($cekEmail, MYSQLI_NUM);

    if ($emailExist>0){
        echo "<script>alert ('email yang dimasukan sudah pernah digunakan sebelumnya'); document.location.href = '../pages/user/register.php'</script>";
    } else {
        $insertUsers=mysqli_query($koneksi,"insert into users values('','$name','$email','$password')");
        if($insertUsers){
            echo "<script>alert ('proses registrasi kamu berhasil'); document.location.href = '../pages/login.php'</script>";
        }else{
        echo 'data gagal terinput';
        }    
    } 
}

if(isset($_POST['btn-bayar'])){
    // menangkap name variabel insert mobil
    $emailPembeli = $_POST['emailPembeli'];
    $namaPembeli = $_POST['namaPembeli'];
    $namaProduk = $_POST['namaProduk'];
    $alamatPengiriman = $_POST['alamatPengiriman'];
    $noHp = $_POST['noHp'];
    $kurirDipilih = $_POST['kurirDipilih'];
    $metodePembayaran = $_POST['metodePembayaran'];
    $totalHarga = $_POST['totalPrice'];
    $statusPengiriman = "diproses";



    // insert mysql mobil
    $jualProduk=mysqli_query($koneksi,"insert into penjualan values('','$emailPembeli','$namaPembeli','$namaProduk', '$alamatPengiriman', '$noHp', '$kurirDipilih', '$metodePembayaran', '$totalHarga', '$statusPengiriman')");



    if($jualProduk){
        header("location: ../pages/user/sukses.php");
        
    }else{
         echo "<script>alert ('Produk gagal ditambahkan'); document.location.href = '../pages/admin/tambahProduk.php'</script>";
    }
}

?>