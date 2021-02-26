<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
 
  <link rel="stylesheet" href="css/components/index.css">
  <link rel="stylesheet" href="css/components/buttons.css">
  <link rel="stylesheet" href="css/components/carousel.css">

  <title>Home | Recoleta</title>

</head>

<body>
  <?php
  include('menu.html');
  ?>

  <main>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/cria.jpg" class="d-inlineblock w-100 img-carrosel" alt="Comunidade Hatsuta">
          <div class="carousel-caption d-none d-md-block">
<<<<<<< HEAD
            <!--<h5>Comunidade Hatsuta</h5>
            <p>Antiga habitação nesta invasão.</p>-->
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img//meio.jpg" class="d-block w-100 img-carrosel" alt="Condomínio Residencial Lavras">
          <div class="carousel-caption d-none d-md-block dark">
            <!--<h5>Condomínio Residencial Lavras</h5>
            <p>Antes da imersão do Recoleta.</p>-->
=======
            <!-- <h5>Comunidade Hatsuta</h5>
            <p>Antiga habitação nesta invasão.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/meio.jpg" class="d-block w-100 img-carrosel" alt="Condomínio Residencial Lavras">
          <div class="carousel-caption d-none d-md-block dark">
            <!-- <h5>Condomínio Residencial Lavras</h5>
            <p>Antes da imersão do Recoleta.</p> -->
>>>>>>> 16b716421cc7dcf1e527ca7e6f80ae7127040ee0
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/play.jpeg" class="d-block w-100 img-carrosel" alt="Condomínio Residencial Lavras">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Condomínio Residencial Lavras</h5>
            <p>O futuro dependerá daquilo que fazemos no presente.</p> -->
          </div>
        </div>
      </div>
      <div class="container mt-4">
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

    <div class="jumbotron container">
      <h1 class="display-4">O que faz o Recoleta?</h1>
      <p class="lead">Somos uma organização não-governamental sem fins lucrativos, que trabalha pela educação e conscientização. Para o consumo consciente e estilo de vida sustentável!</p>
      <hr class="my-4">
      
      <p class="lead">
        <a class="btn button-send" href="quemSomos.php" role="button">Saiba mais</a>
      </p>
    </div>
  </main>

  <?php
  include('modal.html');
  ?>

  <?php
  include('footer.html')
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>