<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/components/style.css">
    <link rel="stylesheet" href="/css/components/highscore.css">
    <link rel="stylesheet" href="/css/components/buttons.css">
    <title>Quiz | Recoleta</title>
</head>


<body>
    <?php
    require_once('menu.html');
    require_once('modal.html');
    ?>

    <div class="container">
        <div id="highScores" class="flex-center flex-column">
            <h2 id="finalScore">Ranking</h2>
            <ul id="highScoresList"></ul>
            <a href="homeQuiz.php" class="btn button-send">Inicio</a>
        </div>
    </div>

    <?php
    require_once('footer.html');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="/js/highscores.js"></script>

</body>

</html>