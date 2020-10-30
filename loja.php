<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Nossas lojas - AmareLux Eletro</title>
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

        <header>
            <h2>Nossas Lojas</h2>
        </header>
            <hr>

            <div class="Lojas" style="margin-left: 30px;" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
                <h3>Rio de Janeiro - RJ</h3>
                <p>Avenida Almirante Frontin, 50</p>
                <p>2 &ordm; piso</p>
                <p>Ramos</p>
                <p>(21) 2222-2222</p>
            </div>

            <div class="Lojas" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
                <h3>São Paulo - SP</h3>
                <p>Estrada das Lágrimas, 1029</p>
                <p>Loja 2</p>
                <p>Ipiranga</p>
                <p>(11) 1111-2222</p>
            </div>

            <div class="Lojas" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
                <h3>Vila Velha - ES</h3>
                <p>Rua Sebastião Gaiba, 100</p>
                <p>Térreo</p>
                <p>Vila Garrido</p>
                <p>(27) 2222-1111</p>
            </div>

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