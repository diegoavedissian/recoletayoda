<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/components/style.css">
    <link rel="stylesheet" href="./css/components/buttons.css">
    <title>Quiz | Recoleta</title>
</head>


<body>
    <?php
    require_once('menu.html');
    require_once('modal.html');
    ?>
    <div class="container">
        <div id="home" class="flex-column flex-center">
            <h3>Você esta pronto?</h3>
            <a href="game.php" class="btn button-send">Play</a><br>
            <a href="highscores.php" id="highscore-btn" class="btn cancel">
                High Score
            </a>
        </div>
    </div>

    <?php
    require_once('footer.html');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>