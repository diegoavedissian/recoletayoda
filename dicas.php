<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    
    <link rel="stylesheet" href="css/components/cards.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/jogos.css">

    
    <title>Dicas | Recoleta</title>
</head>

<body>
    <header>
        <?php
        require_once('menu.html');
        require_once('modal.html');
        ?>
    </header>

    <div class="container">
        <h2>
            Dicas
        </h2>
        <p>Aqui você encontrará dicas de como colaborar com o meio ambiente</p>
        <figcaption class="cards d-flex justify-content-around bg-light">

            <article class="card">
                <img class="card-img-top" src="assets/img/reduzir.png">
                <div class="card-body">
                    <h5 class="card-title">Resíduos</h5>
                    <p class="card-text">
                        Encontre maneiras de descartar seus resíduos de maneira consciente</p>
                    <a href="" class="btn button-play">Acessar</a>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/reciclagem.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Coleta Seletiva</h5>
                    <p class="card-text">Encontre pontos de coleta seletiva, próximos a sua residência.</p>
                    <a href="" class="btn button-play">Acessar</a>
                </div>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/aguaDicas.png" alt="Agua">
                <div class="card-body">
                    <h5 class="card-title">Economia de Agua</h5>
                    <p class="card-text">Escovar os dentes mantendo a torneira fechada ajuda economizar até 85% de água</p>
                    <a href="" class="btn button-play">Acessar</a>
                </div>
            </article>
        </figcaption>
    </div>

    <?php
    require_once('footer.html');
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>