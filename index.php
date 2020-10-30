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

        <!--Início de Formas de Pagamento-->
        <footer id="Rodape">
            <hr>
            <h3>Formas de pagamento:</h3>
            <img src="./imagens/forma de pagamento.jpg" alt="Formas de pagamento" width="25%">
            <br>
            <p>&copy; Recode Pro 2020 - Allan Jales</p>
        </footer>
        <!--Fim de Formas de Pagamento-->
    </body>
</html>