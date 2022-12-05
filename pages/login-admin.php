<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="shortcut icon" href="../images/favicon.png" type="image/png" />
    <link rel="stylesheet" href="../style/style.css" />
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
  </head>
  <body>
    <section class="vh-100" style="background-color: #9a7b41">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10" style="margin-top: -40px">
            <div class="card" style="border-radius: 1rem">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="../images/image-login.png"
                    alt="login form"
                    class="img-fluid"
                    style="
                      border-radius: 1rem 0 0 1rem;
                      height: 100%;
                      box-shadow: 11px 0px 14px -3px rgba(223, 154, 27, 0.12);
                    "
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form method=POST action="../config/cek-login.php">
                      <div class="d-flex align-items-center mb-2">
                        <h1 class="titleLogin fw-bold">
                          Silahkan login Admin-san
                        </h1>
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17"
                          >username</label
                        >
                        <input
                          name="username"
                          type="text"
                          id="form2Example17"
                          class="form-control"
                          placeholder="Silahkan masukan username..."
                          value="<?php if(isset($_COOKIE['userAdmin'])){ echo $_COOKIE['userAdmin'];};?>"
                        />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example27"
                          >Password</label
                        >
                        <input
                          name="password"
                          type="password"
                          id="form2Example27"
                          class="form-control mb-2"
                          placeholder="silahkan masukan password..."
                          value="<?php if(isset($_COOKIE['passwordAdmin'])){ echo $_COOKIE['passwordAdmin'];};?>"
                        />
                        <div class="mt-3 form-check">
                          <input type="checkbox" class="form-check-input" name="rememberAdmin" <?php if(isset($_COOKIE["loginAdmin"])) { ?> checked <?php } ?>>
                          <label class="form-check-label" for="exampleCheck1">Tetap login</label>
                        </div>
                        <a class="small d-flex justify-content-end" href="#">Lupa password?</a>
                      </div>

                      <div class="mb-3">
                          <button
                            class="btn btn-warning btn-lg btn-loginAdmin"
                            type="submit"
                            style="width: 160px"
                            name="btn-loginAdmin"
                          >
                            Login
                          </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="./Javascript/script.js"></script>
  </body>
</html>
