<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Fale Conosco - AmareLux Eletro</title>
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
            <h2>Fale Conosco</h2>
        </header>
            <hr>

        <ul>
            <li class="FaleConosco" style="padding-left: 10%;"><img src="./imagens/e-mail.png" width="40px"></li>
            <li class="FaleConosco" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">contato@amareluxeletro.com.br</li>
            <li class="FaleConosco" style="padding-left: 30%;"><img src="./imagens/Whatsapp.png" width="80px"></li>
            <li class="FaleConosco" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">(21) 9999-2020</li>
        </ul>
        <br>

        <form>
            <label for="nome" class="TituloGeral">Nome:</label><br>
            <input type="text" id="inome" name="nnome" style="width:295px;">
            <br><br>
            <label for="email" class="TituloGeral">E-mail:</label><br>
            <input type="email" id="iemail" name="nemail" style="width:295px;">
            <br><br>
            <label for="mensagem" class="TituloGeral">Mensagem:</label><br>
            <textarea id="imensagem" name="nmensagem" rows="7" cols="40"></textarea>
            <br><br>
            <input type="submit" value="Enviar">
        </form>

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