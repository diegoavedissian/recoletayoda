<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

    <?php
    require_once('menu.html');
    require_once('modal.php');
    require_once('./backend/connection.php');
    ?>

    <br><br><br>
    
        <form>
            <fieldset>
                <legend>Você consegue ver mudanças no seu comportamento e das outras pessoas em relação a natureza </legend>
					<label for="radio-email"><input type="radio" name="controle" value="sim" id="radio-sim"> sim</label>
					<label for="radio-telefone"><input type="radio" name="controle" value="nao" id="radio-nao"> não</label>
					<label for="radio-whatsapp"><input type="radio" name="controle" value="talvez" id="radio-talvez" checked> talvez</label>
            </fieldset>

            <fieldset>
                    <legend>As pessoas continuam a descartar lixo de modo irregular ?</legend>
                    <label for="radio-email"><input type="radio" name="controle" value="sim" id="radio-sim"> sim</label>
					<label for="radio-telefone"><input type="radio" name="controle" value="nao" id="radio-nao"> não</label>
            </fieldset>

            <fieldset>
                <legend>Você acha que houve mudanças da comunidade em relação a natureza para melhor ?</legend>
                <label for="radio-email"><input type="radio" name="controle" value="sim" id="radio-sim"> sim</label>
                <label for="radio-telefone"><input type="radio" name="controle" value="nao" id="radio-nao"> não</label>
            </fieldset>

            <fieldset>
                <legend>Houve mudanças nos custos do condomínio para você ?</legend>
                <label for="radio-email"><input type="radio" name="controle" value="sim" id="radio-sim"> sim</label>
                <label for="radio-telefone"><input type="radio" name="controle" value="nao" id="radio-nao"> não</label>
            </fieldset>
        </form>
    
    <br><br><br>

    <?php
    require_once('footer.html');
    ?>
    
</body>
</html>