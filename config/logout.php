<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo "<script>alert ('anda keluar dari halaman'); document.location.href = '../pages/login.php'</script>";
?>