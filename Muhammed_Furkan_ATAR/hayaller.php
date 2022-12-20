<?php
  session_start();
if ( $_SESSION["name"]){ ?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/39d5e25a36.js" crossorigin="anonymous"></script>

    <title>  HAYALLER  </title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
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


<div class="container col-12 p-5" >
      <div class="row">  
<div class="card border-primary mb-3" style="max-width:30rem; ">
  <div class="card-header">Tanışma Oyunu </div>
  <div class="card-body">
    <h4 class="card-title">	
1. İsmin İlk Sesiyle Başlayan Bir Nesne, Kişi, Hayvan vb. Bulunması Oyunu:Ben… size… getirdim.</h4>
    <p class="card-text"> Ben Burcu size ‘balık’ getirdim. Ben Burcu size ‘buzdolabı’ getirdim. Ben Burcu size ‘badem’ getirdim…
<br>Ben Kaan size ‘kalem’ getirdim. Ben Kaan size ‘keçiboynuzu’ getirdim. Ben Kaan size ‘kardan adam’ getirdim…</p>
  </div>
</div>

<div class="card border-secondary mb-3" style="max-width: 30rem; ">
  <div class="card-header">Tanışma oyunu</div>
  <div class="card-body">
    <h4 class="card-title">2. Top veya Başka Bir Cisim (Oyuncak bebek, tenis topu vb.) Kullanılarak Yapılan tanışma Oyunu</h4>
    <p class="card-text">Öğretmen topu kime atarsa o kişi kendi ismini söyler. İsim söyleme oyunu yüksek sesle yapılmalıdır. Öğretmen topu, oyunun ilerleyen aşamalarında çocuklara devreder. Top atma işlemi ilgi çekici şekillerde yapılmalıdır ki oyun zevkli hale gelsin. Örneğin birden fazla top aynı anda atılarak veya topların atılma hızı değiştirilerek, grup uyumunun zorunlu hale geldiği bir oyun formu oluşur.</p>
  </div>
</div>
<div class="card border-success mb-3" style="max-width: 30rem; ">
  <div class="card-header">Tanışma Oynu</div>
  <div class="card-body">
    <h4 class="card-title">3. İsim Zinciri veya İsim Halkası Oyunu</h4>
    <p class="card-text">1.kişi: Aslı<br>

2.kişi: Aslı, Buket <br>

3.kişi: Aslı, Buket, Alican <br>

4.kişi: Aslı, Buket, Alican, Pınar… <br></p>
  </div>
</div>
<div class="card border-danger mb-3" style="max-width: 30rem;">
  <div class="card-header">Tanışma Oynu</div>
  <div class="card-body">
    <h4 class="card-title">4. Öğrencinin Kendi Kişisel Özelliklerini, Zevklerini, Eğilimlerini Oyun İçinde Anlatması: Anlat Anlat Kendini Anlat!</h4>
    <p class="card-text">Örneğin, “Ben Doğa, kedileri çok seviyorum, başkalarının odamı dağıtmasından rahatsız oluyorum, en çok sevdiğim oyuncak Barbie, en çok sevdiğim çizgi film Spider Man, en çok sevdiğim renk yeşil, en sevdiğim meyve portakal…” <br>
    Not: Bu egzersiz rehberlik ve psikolojik danışmanlık bölümüyle ortak yapılan bir çalışma biçimidir. Atık malzeme veya bir yumak ip kullanılırsa, çevreci bir perspektif açısından daha yararlı olur.</p>
  </div>
</div>

<div class="card border-warning mb-3" style="max-width:30rem;">
  <div class="card-header">Tanışma Oynu</div>
  <div class="card-body">
    <h4 class="card-title">5- İsmi Bir Jest, Nida Kullanarak ya da Bir Ritm İçinde Söyleme Oyunu</h4>
    <p class="card-text">Topluluktaki herkes sırayla öne çıkar bir tartım ve ritm içinde kendi ismini söyler. Örneğin, Aslıhan diyen çocuk ‘As-lı-han’ sözcüğünü heceleme yöntemini kullanarak söyler ve bazı heceleri daha hızlı söyler. Ya da ‘Aslıhan’ derken, iki elini de bacağına vurur. Amaç bireyin kendini ifade eden bir jesti, tartımı ya da ritmi bulmasıdır. Bir sonraki kişi ise öncekini taklit ederek adını söyler, sonra kendi özgün söyleme biçimini kullanarak adını söyler. Zincirleme olarak oyun devam eder.</p>
  </div>
</div>

</div>
</div>

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
<?php   }  else { header("location:giris.php");  }   ?>   