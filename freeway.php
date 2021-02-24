<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/freeway.css">
    
    <title>Freeway | Recoleta</title>
</head>

<body>

    <header>
    <?php
    require_once('menu.html');
    require_once('modal.html');
    ?>
    </header>

    <div class="container my-3"> 
        <h2>Freeway</h2>
        <p>Leve o residuo até a lixeira, e ganhe pontos!</p>
        <div class="freeway">
            <iframe src="https://editor.p5js.org/robertaassun/embed/_aLh8_mVK"></iframe>
        </div>
        <div class="mb-4 mr-4 px-4 py-4">
            <a class="btn cancel p-2" href="jogos.php" role="button">Voltar</a>
        </div>
        <br><br>
    </div>

    <?php
    require_once('footer.html');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>