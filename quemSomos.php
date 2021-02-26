<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/quemSomos.css">
    <title>Quem Somos | Recoleta</title>
</head>

<body>
    <header>
        <?php
        require_once('menu.html');
        require_once('modal.php');
        ?>
    </header>

    <main class="container">
        <div>
            <section class="title">Mas o que é a Recoleta?</section>
            <article>
                Criado em novembro de 2020. O Recoleta é uma organização não-governamental, sem fins lucrativos, que trabalha pela conscientização da sociedade, orientando como realizar o descarte e consumo consciente de resíduos.
            </article>

            <section class="subtitle">Nossa missão.</section>
            <article>
                Temos como missão promover a mudança de comportamento, atuando na educação e orientação das crianças para construção de um mundo melhor, com mais qualidade de vida.
            </article>

            <section class="subtitle">Nossas Atividades</section>
            <article>
                Pensando no bem-estar, e futuro das nossas crianças, trazemos dicas, dados e jogos para que os nossos pequenos cresçam pensando de forma sustentável.
                <strong>Atuamos em duas frentes: educação e orientação.</strong>
                Agregando valor ao conhecimento básico de informação, com intuito de despertar nas crianças o senso de responsabilidade, com suas ações e com isso gerar adultos mais responsáveis e preocupados em tomar atitudes corretas em relação ao resíduo gerado.
            </article>
            
            <section class="subtitle">Nosso Projeto</section>
            <article>
                Nosso projeto viu um problema no descarte incorreto de resíduo, no condomínio Residencial Lavras. 
                Comunidade retirada da favela, onde viviam em situação precária com esgoto ao ar livre, lixo, áreas de mananciais, morros sujeitos a deslizamentos. Além do perigo de incêndio.

                Essa comunidade foi realocadas para prédios do CDHU, porém sem uma "educação de como cuidar do ambiente onde se vive" o lindo condomínio se tornou uma favela na vertical. Onde o descarte de lixo e a falta de coletividade deixaram o lugar depreciado.
                Com isso o Recoleta viu uma oportunidade de mudar essa história utilizando o Condomínio Lavras como projeto-piloto, através da reeducação dos moradores, inicialmente com foco nas crianças, para a conscientização de que se separarem o lixo haverá melhoria na qualidade de vida deles, redução nos custos com limpeza, além da valorização de seus imóveis.
            </article>
        </div>

    </main>

    <?php
    require_once('footer.html');
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>
