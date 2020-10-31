<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Entre ou Cadastre-se - AmareLux Eletro</title>
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
            <h2 style="text-align: center;">Entre na Amarelux</h2>
        </header>
        <hr>
        
        <br>
        <form style="text-align: center;">
            <label for="email" class="TituloGeral">E-mail:</label><br>
            <input type="email" id="iemail" name="nemail"><br><br>

            <label for="senha" class="TituloGeral">Senha:</label><br>
            <input type="password" id="isenha" name="nsenha"><br><br>

            <input type="submit" value="Entrar">
            <p><a href="cadastrar.html" id="Rodape">Cadastre-se</a></p>        
        </form>

        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>