<!DOCTYPE html>
<?php
session_start();
$id = $_GET['id_produk'];
include '../../config/connector.php';
if($_SESSION['status']!="login"){
		echo "<script>alert ('maaf anda belum login'); document.location.href = '../login.php'</script>";
	}
$listFigure = mysqli_query($koneksi, "select * from produk where id_produk = '$id'");
$figure = mysqli_fetch_array($listFigure);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/png" />
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/6a4ade49be.js"
      crossorigin="anonymous"
    ></script>

    <title><?php echo $figure['namaProduk']; ?></title>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $name = mysqli_query($koneksi, "select nama from users where email='$_SESSION[email]'");
    $getName = mysqli_fetch_array($name);
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-2">
      <div class="container">
        <a class="navbar-brand" href="home.php">
          <img
            src="../../images/logo.png"
            alt="Logo"
            class="d-inline-block align-text-top"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Our products
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Ready stock</a></li>
                <li><a class="dropdown-item" href="#">Pre order</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Reviews</a>
            </li>
          </ul>
          <a href="#"
            ><i class="fa-solid fa-cart-shopping"><span>cart 0</span></i></a
          >
          <div class="dropdown ms-4">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $getName['nama'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li><a class="dropdown-item" href="../../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcrumb -->
    <div class="container mt-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Details figure
          </li>
        </ol>
      </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- deskripsi produk -->
    <form action="cart.php" method="POST">
        <div class="container mt-3 detailProduk">
      <div class="row">
        <div class="col-sm-6">
          <img
            src="../../images/<?php echo $figure['fotoProduk']?>"
            alt="86 - EIGHTY SIX Premium Figure Vladilena Milizé"
            name="fotoProduk"
          />
          <input type="hidden" name="fotoProduk" value="<?php echo $figure['fotoProduk']?>">
          
        </div>
        <div class="col-sm-5">
          <h1 class="namaFigure">
            <?php echo $figure['namaProduk']?>
          </h1>
          <input type="hidden" name="hargaInt" value="<?php echo $figure['harga']?>">
          <input type="text" readonly class="form-control-plaintext hargaProduk mt-3 fw-bold" name="harga" value="<?php echo "IDR ", number_format($figure['harga']);?>"> 
         
          <div class=" row aboutProduk  fw-light align-items-center">
            <label for="staticEmail" class="col-sm-3 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="namaProduk" value="<?php echo $figure['namaProduk']?>">
            </div>
          </div>
           <div class="row aboutProduk fw-light align-items-center">
            <label for="staticEmail" class="col-sm-3 col-form-label">Series</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="series" value="<?php echo $figure['series']?>">
            </div>
          </div>
           <div class="row aboutProduk  fw-light align-items-center">
            <label for="staticEmail" class="col-sm-3 col-form-label">Manufacture</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="manufacture" value="<?php echo $figure['manufacture']?>">
            </div>
          </div>
           <div class="row aboutProduk  fw-light align-items-center">
            <label for="staticEmail" class="col-sm-3 col-form-label">Tinggi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="tinggi" value="<?php echo $figure['tinggi']?>">
            </div>
          </div>
          <div class="row aboutProduk  fw-light align-items-center">
            <label for="staticEmail" class="col-sm-3 col-form-label">Status barang</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="status" value="<?php echo $figure['status']?>">
            </div>
          </div>
          
          <hr />
          <a href="cart.html"
            ><button class="btn btn-warning btn-keranjang" type="submit" name="btn-cart">
              Tambah ke Keranjang!
            </button></a
          >
        </div>
      </div>
    </div>
    </form>
    <!-- end deskripsi produk -->

    <!-- rekomendasi produk lain -->
    <div class="otherRecommendation mt-5">
      <div class="container">
        <h1 class="titleRecommendation text-capitalize fw-bold mb-4">
          Other recommendation <br />
          maybe that you like
        </h1>
        <div class="row">
        <?php
            $listFigure = mysqli_query($koneksi, "select * from produk order by id_produk DESC limit 4");  
            while($figure = mysqli_fetch_array($listFigure)){
        ?>
          <div
            class="figure col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3"
          >
            <a href="detail-produk.php?id_produk=<?php echo $figure['id_produk'];?>" style="text-decoration: none"
              ><center>
                <img
                  src="../../images/<?php echo $figure['fotoProduk']?>"
                  alt="action figure vladilena milize"
                />
              </center>
              <h1 class="namaFigure fw-medium mt-2">
                <?php echo $figure['namaProduk']?>
                <span style="font-weight: 700; color: #9a7b41"
                  >(<?php echo $figure['status']?>)</span
                >
              </h1>
              <h3 class="hargaFigure mt-3 fw-bold"><?php echo "IDR ", number_format($figure['harga']); ?></h3>
            </a>
          </div>
          <?php
            }
          ?>
      </div>
    </div>
    <!-- end rekoemndasi produk lain -->

    <!-- footer -->
    <footer>
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm-12 col-md-4 mb-3">
            <img src="../../images/logo.png" alt="logo" />
            <p class="descToko fw-light mt-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
              odit officia dolorem magni, nisi dolore quidem enim. Illum,
              excepturi deleniti.
            </p>
            <div class="kontakToko">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
          </div>
          <div class="col-sm-12 col-md-2 offset-md-1">
            <h5 class="daftarProduk mb-4">Quick Links</h5>
            <p class="listProduk fw-light"><a href="#">Home</a></p>
            <p class="listProduk fw-light"><a href="#">Produk</a></p>
            <p class="listProduk fw-light"><a href="#">Payment channel</a></p>
            <p class="listProduk fw-light"><a href="#">FAQ</a></p>
          </div>
          <div class="col-sm-12 col-md-4 offset-md-1 mb-2">
            <h5 class="titleSubscribe">Subscribe to us</h5>
            <p class="descSubscribe fw-light">
              Dengan berlangganan kepada kami, oni-chan akan mendapatkan
              informasi eksklusif setiap minggu nya.
            </p>
            <div class="input-group">
              <input
                type="email"
                class="form-control form-subscribe"
                id="subscribe"
                placeholder="masukan email mu..."
                aria-describedby="subscribeHelp"
              />
              <span class="input-group-btn">
                <button
                  class="btn btn-warning btn-subs"
                  type="button"
                  id="liveToastBtn"
                >
                  Subscribe!
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="CP-footer d-flex justify-content-center mt-3">
        <h5 class="mt-3">Copyright © 2020 All rights reserved by FiguartZ company</h5>
      </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- jquery & script mono-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../javascript/script.js"></script>
  </body>
</html>
