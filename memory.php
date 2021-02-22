<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/memory.css">

    <title>Jogo da Memória

    </title>
</head>

<body>
    <?php
    require_once('menu.html');
    require_once('modal.html');
    ?>

    <section class="memory-game">
        <div class="memory-card" data-framework="alimento">
            <img class="front-face" src="assets/img/food.png" alt="alimento" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="alimento">
            <img class="front-face" src="assets/img/food.png" alt="alimento" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>

        <div class="memory-card" data-framework="bicicleta">
            <img class="front-face" src="assets/img/bike2.png" alt="bicicleta" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="bicicleta">
            <img class="front-face" src="assets/img/bike2.png" alt="bicicleta" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>

        <div class="memory-card" data-framework="caminhar">
            <img class="front-face" src="assets/img/walk.png" alt="caminhar" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="caminhar">
            <img class="front-face" src="assets/img/walk.png" alt="caminhar" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>

        <div class="memory-card" data-framework="exercicio">
            <img class="front-face" src="assets/img/exercice.png" alt="exercicio" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="exercicio">
            <img class="front-face" src="assets/img/exercice.png" alt="exercicio" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>

        <div class="memory-card" data-framework="lavar">
            <img class="front-face" src="assets/img/wash.png" alt="lavar" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="lavar">
            <img class="front-face" src="assets/img/wash.png" alt="lavar" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>

        <div class="memory-card" data-framework="recolha">
            <img class="front-face" src="assets/img/eco.png" alt="recolha" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
        <div class="memory-card" data-framework="recolha">
            <img class="front-face" src="assets/img/eco.png" alt="recolha" />
            <img class="back-face" src="assets/img/backMemory.png" alt="recoleta" />
        </div>
    </section>

    <div class="d-flex justify-content-end">
        <a class="btn cancel p-2" href="jogos.php" role="button">Voltar</a>
    </div>

    <?php
    require_once('footer.html');
    ?>

    <script src="js/scriptMemory.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>