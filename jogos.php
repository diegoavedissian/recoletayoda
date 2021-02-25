<?php
session_start();
require_once('check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/components/cards.css">
    <link rel="stylesheet" href="./css/components/buttons.css">
    <link rel="stylesheet" href="./css/components/dicas.css">
    <link rel="stylesheet" href="./css/components/jogos.css">

    <title>Jogos | Recoleta</title>
</head>

<body>
    <header>
        <?php
        require_once('menu.html');
        require_once('modal.php');
        ?>
    </header>

    <div class="container">
        <h2>
            Jogos
        </h2>
        <p>Aqui você encontra jogos para se divertir e aprender como descartar seus resíduos</p>
        <figcaption class="cards d-flex justify-content-around bg-light">

        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 my-3">
                <article class="card">
                    <img class="card-img-top" src="assets/img/quiz1.png">
                    <div class="card-body">
                        <h5 class="card-title">Quiz</h5>
                        <p class="card-text">
                            Entenda e se pergunte, como está seu dia a dia hoje, e veja em dicas ações que possa impactar a você e todos a sua volta!</p>
                        <a href="homeQuiz.php" class="btn button-play">Jogar</a>
                </article>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 my-3">
                <article class="card">
                    <img class="card-img-top" src="assets/img/memory.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Jogo da Memória</h5>
                        <p class="card-text">Lembre-se que pequenas ações, trazem grandes resultados!
                            Espalhe estás ações com sua família e amigos.</p>
                        <a href="memory.php" class="btn button-play">Jogar</a>
                    </div>
                </article>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 my-3">
                <article class="card">
                    <img class="card-img-top" src="assets/img/freeway.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Freeway</h5>
                        <p class="card-text">Faça uma travessia segura, e recolha o máximo de resíduos descartados pelo chão, e transforme o mundo hoje.</p>
                        <a href="freeway.php" class="btn button-play">Jogar</a>
                    </div>
                </article>
            </div>
        </div>
        </figcaption>
    </div>

    <br><br><br>
    
    <?php
    require_once('footer.html');
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>