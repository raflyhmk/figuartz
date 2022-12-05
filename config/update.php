<?php 
session_start();
// koneksi database
include 'connector.php';
 
if(isset($_POST['btn-edit'])){
    // menangkap data yang di kirim dari form
    $id=$_POST['id_produk'];
    $namaProduk = $_POST['namaProduk'];
    $series = $_POST['series'];
    $manufacture = $_POST['manufacture'];
    $tinggi = $_POST['tinggi'];
    $harga = $_POST['harga'];
    // $foto = $_FILES['foto']['name'];
    // $file_foto = $_FILES['foto']['tmp_name'];
    // move_uploaded_file($file_foto, "../images/".$foto);
    $status = $_POST['status'];

 
    // update data ke database
    $update=mysqli_query($koneksi,"update produk set namaProduk='$namaProduk', series='$series', manufacture='$manufacture', tinggi='$tinggi', harga='$harga', status='$status' where id_produk='$id'");

    if($update){
        echo "<script>alert ('Produk berhasil diupdate'); document.location.href = '../pages/admin/daftarProduk.php'</script>";
    }else{
    echo "<script>alert ('Produk gagal diupdate'); document.location.href = '../pages/admin/daftarProduk.php'</script>";
    }
}

if(isset($_POST['btn-updateUser'])){
    // menangkap data yang di kirim dari form edit profile
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasiPassword'];

    if($password != $konfirmasiPassword){
	    echo "<script>alert ('konfirmasi password mu salah'); document.location.href = '../pages/user/profile.php'</script>";
    } else {
        // update data ke database
    $updateUsers=mysqli_query($koneksi,"update users set nama='$nama', email='$email', password='$password' where email='$_SESSION[email]'");
        if($updateUsers){
           echo "<script>alert ('profile berhasil diedit'); document.location.href = '../pages/user/profile.php'</script>";
        } else  {
            echo 'data gagal di edit';
        }
    }
}

if(isset($_POST['btn-editPenjualan'])){
    // menangkap data yang di kirim dari form edit
    $id_penjualan = $_POST['id_penjualan'];
    $statusPengiriman = $_POST['statusPengiriman'];
    $updateStatus=mysqli_query($koneksi,"update penjualan set statusPemesanan='$statusPengiriman' where id_penjualan='$id_penjualan'");
        if($updateStatus){
           echo "<script>alert ('status berhasil terubah'); document.location.href = '../pages/admin/penjualan.php'</script>";
        } else  {
            echo 'data gagal di edit';
        }
    }
?>

