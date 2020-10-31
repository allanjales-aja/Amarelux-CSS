<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>AmareLux Eletro</title>
        <!--Conexão CSS-->
        <link href="styles.css" rel="stylesheet" type="text/css">
        <!--Conexão JS-->
        <script src="funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->
        <?php
            include_once('menu.html')
        ?>

        <main>
            <h1>Seja bem vindx!</h1>
            <p>Aqui em nossa loja, 
                <em onmouseover="destacarMain(this)" onmouseout="normalMain(this)">programadores têm desconto
                </em> nos produtos para sua casa!
            </p>
        </main>

        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>