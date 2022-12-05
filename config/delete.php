<?php 
session_start();

// koneksi database
include 'connector.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_produk'];
 
 
// menghapus data dari database
$hapus=mysqli_query($koneksi,"delete from produk where id_produk='$id'");
 
// mengalihkan halaman kembali ke index.php
if($hapus){
	 echo "<script>alert ('Produk berhasil dihapus'); document.location.href = '../pages/admin/daftarProduk.php'</script>";
}
else{
	echo "<script>alert ('Produk gagal dihapus'); document.location.href = '../pages/admin/daftarProduk.php'</script>";
}
 
?>