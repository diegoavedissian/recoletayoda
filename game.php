<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="css/components/style.css">
  <link rel="stylesheet" href="css/components/game.css">
  <link rel="stylesheet" href="css/components/buttons.css">
  <title>Quiz | Recoleta</title>
</head>


<body>
  <?php
  require_once('menu.html');
  require_once('modal.php');
  ?>

  <br><br><br><br><br><br>

  <div class="container">
    <div id="game" class="justify-center flex-column">
      <div id="hud">
        <div class="hud-item">
          <p id="progressText" class="hud-prefix">
            Questões
          </p>
          <div id="progressBar">
            <div id="progressBarFull"></div>
          </div>
        </div>
        <div class="hud-item">
          <p class="hud-prefix">
            Score
          </p>
          <h1 class="hud-main-text" id="score">
            0
          </h1>
        </div>
      </div>
      <h3 id="question">Qual é a resposta Correta?</h3>
      <div class="choice-container">
        <p class="choice-prefix">A</p>
        <p class="choice-text" data-number="1">Choice</p>
      </div>

      <div class="choice-container">
        <p class="choice-prefix">B</p>
        <p class="choice-text" data-number="2">Choice 2</p>
      </div>

      <div class="choice-container">
        <p class="choice-prefix">C</p>
        <p class="choice-text" data-number="3">Choice 3</p>
      </div>

      <div class="choice-container">
        <p class="choice-prefix">D</p>
        <p class="choice-text" data-number="4">Choice 4</p>
      </div>
    </div>
  </div>
  
  <br><br><br><br>

  <?php
  require_once('footer.html');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="js/game.js"></script>
</body>

</html>