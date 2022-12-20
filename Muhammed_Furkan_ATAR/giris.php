<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/39d5e25a36.js" crossorigin="anonymous"></script>

    <title> GİRİŞ </title>
    
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />


<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fa-solid fa-house-user"></i>Ana sayfa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="giris.php"><i class="fa-solid fa-user"></i>GİRİŞ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kayit.php"><i class="fa-solid fa-wand-magic-sparkles"></i>Kayıt ol</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hayatlar.php"><i class="fa-solid fa-ghost"></i>Oyun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d" href="hayaller.php"><i class="fa-brands fa-cloudflare"></i>Tanışma Oyunları</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <?php
include("config.php");
    if($_POST){
        $username = $_POST["usernmame"];
        $password = $_POST["password"];
        if(!$username || !$password){
            echo '<span style="color:red;">Kullanıcıadı Şifrenizi Giriniz</span>';
        }
        else{
          

            $login = $db->prepare("SELECT * FROM kayit WHERE kullanici_adi=? AND parola=?");
            $login->execute(array($username, $password));
            $l = $login->fetch(PDO::FETCH_ASSOC);

            if($l){   session_start();
                echo '<span style="color:blue;">Giriş Başarılı</span>';
                $_SESSION["name"] = $l["kullanici_adi"];
                $_SESSION["nick"] = $l["email"];
                
            header("Refresh: 2; url=index.php");
            }
            else{
                echo '<span style="color:red;">Kullanıcıadı Şifrenizi Hatalı Girdiniz</span>';
            }
        }
    }
?>

          <form form action="" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">GİRİŞ</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">VEYA</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="usernmame"  name="usernmame" class="form-control form-control-lg"
                placeholder="KULANICI ADINIZI GİRİNİZ" />
              <label class="form-label" for="usernmame">Kullanıcı adı</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="ŞİFRENİZİ GİRİNİZ" />
              <label class="form-label" for="password">Şifre</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
             

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" value="Giriş Yap" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">GİRİŞ YAP</button>
            
            </div>

          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
       BOMBA GİBİ GELİYORUZ
      </div>
      <!-- Copyright -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>