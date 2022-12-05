<!DOCTYPE html>
<?php
session_start();
include "../../config/connector.php";
if($_SESSION['status']!="login"){
		echo "<script>alert ('maaf anda belum login'); document.location.href = '../login.php'</script>";
	}

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

    <title>
      Figuartz, tempat beli action figure & jasa titip action figure impor
    </title>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $name = mysqli_query($koneksi, "select nama from users where email='$_SESSION[email]'");
    $getName = mysqli_fetch_array($name);
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-2">
      <div class="container">
        <a class="navbar-brand" href="#">
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
              <a class="nav-link" href="#">Home</a>
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

    <!-- carousel header -->
    <section id="header" class="mb-3">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img
              src="../../images/slide 1.png"
              class="d-block w-100"
              alt="jual action figure"
            />
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img
              src="../../images/slide 2.png"
              class="d-block w-100"
              alt="jual gundam model kit"
            />
          </div>
          <div class="carousel-item">
            <img
              src="../../images/slide 3.png"
              class="d-block w-100"
              alt="jual nendoroid"
            />
          </div>
          <div class="carousel-item">
            <img
              src="../../images/slide 4.png"
              class="d-block w-100"
              alt="jual replika senjata"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- end carousel header -->

    <!-- video profile -->
    <div class="container videoProfile">
      <center>
        <h1 class="title">video profile</h1>

        <iframe
          src="https://www.youtube.com/embed/9mX1rdTIbRs"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          class="mt-2 mb-4"
        ></iframe>
      </center>
    </div>
    <!-- end video profile -->

    <!-- card produk -->
    <section id="listProduk">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3"
          >
            <a href="#"><img src="../../images/figure.jpg" alt="action figure" /></a>
          </div>
          <div
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3"
          >
            <a href="#"><img src="../../images/nendoroid.jpg" alt="nendoroid" /></a>
          </div>
          <div
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3"
          >
            <a href="#"><img src="../../images/model kit.jpg" alt="model kit" /></a>
          </div>
          <div
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3"
          >
            <a href="#"
              ><img src="../../images/replika.jpg" alt="weapon replika"
            /></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end card produk -->

    <!-- ready stock -->
    <section id="Recommendations" class="mt-3">
      <center>
        <h1 class="title fw-bold">Ready stock</h1>
      </center>
      <div class="container mt-4">
        <div class="row">
        <?php
            $listFigure = mysqli_query($koneksi, "select * from produk where status='ready stock' order by id_produk DESC limit 4");  
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
        <center>
          <button
            type="button"
            class="btn btn-outline-primary btn-showAll mb-3"
          >
            Show All
          </button>
        </center>
      </div>
    </section>
    <!-- end rekomendasi -->

    <!-- action figure -->
    <section id="ActionFigure" class="mt-3">
      <center>
        <h1 class="title fw-bold">Pre Order</h1>
      </center>
      <div class="container mt-4">
        <div class="row">
        <?php
            $listFigure = mysqli_query($koneksi, "select * from produk where status='pre order' order by id_produk DESC limit 4");  
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
        <center>
          <button
            type="button"
            class="btn btn-outline-primary btn-showAll mb-3"
          >
            Show All
          </button>
        </center>
      </div>
    </section>
    <!-- end action figure -->

   

    <!-- jastip -->
    <section id="jastip" class="mt-5">
      <center>
        <h1 class="title fw-bold">
          Action Figure yang oni-chan cari enggak ada?
        </h1>
        <p class="descTitle mt-3 fw-medium">
          Kami menyediakan jasa titip / request action figure impor dari jepang
          agar husbando/waifu/loli/catalyst mu bisa pulang ke pelukan mu
        </p>
      </center>
      <div class="container d-flex justify-content-center mt-2">
        <div class="jastip">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Email Kamu</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Masukan email aktif mu agar bisa kami hubungi..."
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Nama Karakter / barang</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Nama husbando/waifu/loli/catalyst yang ingin oni-chan request..."
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Anime</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Ketikan nama anime husbando/waifu/loli/catalyst yang oni-chan request..."
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Jenis barang</label
            >
            <select class="form-select" aria-label="Default select example">
              <option selected>Jenis barang yang di request</option>
              <option value="action figure">Action Figure</option>
              <option value="Nendoroid">Nendoroid</option>
              <option value="Model Kit">Gundam Model Kit</option>
              <option value="Weapon Replika">Weapon Replika</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Foto barang</label>
            <input class="form-control" type="file" id="formFile" required />
            <div id="imageHelp" class="file-text fw-light mt-2">
              Bisa sertakan gambar husbando/waifu/loli yang oni-chan request
              <br />
              agar kami lebih mudah dalam mencarinya...
            </div>
          </div>
          <div class="buttonJast d-flex justify-content-end">
            <button
              type="button"
              class="btn btn-outline-primary btn-jastip mb-3"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Kirim
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- end jastip -->

    <!-- google maps -->
    <div class="container maps">
      <center>
        <h1 class="title mt-4">
          Oni-chan pengen liat action figure secara langsung?
        </h1>
        <p class="descTitle">
          Oni-chan bisa mengunjungi toko kami secara langsung, lokasi kami bisa
          dilihat di maps yang ada di bawah ini.
        </p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15810.575997353662!2d110.3970178!3d-7.8274513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaad77b93e39dc1d2!2sAnigame!5e0!3m2!1sid!2sid!4v1666768849626!5m2!1sid!2sid"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="mb-4"
        ></iframe>
      </center>
    </div>
    <!-- end google maps -->

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
        <h5>Copyright © 2020 All rights reserved by FiguartZ company</h5>
      </div>
    </footer>
    <!-- end footer -->

    <!-- toast notifikasi -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div
        id="liveToast"
        class="toast"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="toast-header">
          <i class="fa-solid fa-check me-2" style="color: #82cd47"></i>
          <strong class="me-auto" style="color: #82cd47">Subscribe!!</strong>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
        <div class="toast-body">
          Sipp!!, Oni-chan udah berhasil berlangganan ke kami!! tunggu
          informasi-informasi terbaru dari kami
        </div>
      </div>
    </div>
    <!-- end toast notifikasi -->

    <!-- sukses request -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Request mu adalah perintah bagi kami
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <center>
              <img src="../../images/check.png" alt="sukses" />
              <p class="pesanSukses mt-4">
                Request barang yang oni-chan cari akan segera kami telusuri
                sampai jepang, Mohon tunggu informasi selanjutnya dari kami ya
                oni-chan.
              </p>
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-subs" data-bs-dismiss="modal">
              Siap!!
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end sukses request -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../javascript/script.js"></script>
  </body>
</html>
