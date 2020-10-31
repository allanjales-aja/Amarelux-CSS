<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastre-se - AmareLux Eletro</title>
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
            <h2>Cadastre-se</h2>
        </header>
        <hr>
        
        <form style="text-align: center;" method = "post" action = "insercaocadastrar.php">
            <h3 class="TituloGeral" style="text-decoration: underline;">Preencha o cadastro:</h3>

            <label for="nomec" class="TituloGeral">Nome:</label><br>
            <input type="text" id="nomec" name="nomec"><br><br>

            <label for="cpf" class="TituloGeral">CPF:</label><br>
            <input type="number" id="cpf" name="cpf"><br><br>

            <label for="datan" class="TituloGeral">Data de Nascimento:</label><br>
            <input type="date" id="datan" name="datan"><br><br>

            <label for="cep" class="TituloGeral">CEP:</label><br>
            <input type="number" id="cep" name="cep"><br><br>

            <label for="enderecoc" class="TituloGeral">Endereço:</label><br>
            <input type="text" id="enderecoc" name="enderecoc"><br><br>

            <label for="telefone" class="TituloGeral">Telefone:</label><br>
            <input type="number" id="telefone" name="telefone"><br><br>

            <label for="emailc" class="TituloGeral">E-mail:</label><br>
            <input type="email" id="emailc" name="emailc"><br><br>

            <label for="senhaa" class="TituloGeral">Digite sua senha:</label><br>
            <input type="password" id="senhaa" name="senhaa"><br><br>

            <label for="senhab" class="TituloGeral">Confirme sua senha:</label><br>
            <input type="password" id="senhab" name="senhab"><br><br>

            <input type="radio" id="1" name="oferta" value="1" checked>
            <label for="1" id="Rodape" style="font-size: 16px;">Quero receber ofertas Amarelux</label><br>
            
            <input type="radio" id="0" name="oferta" value="0"> 
            <label for="0" id="Rodape" style="font-size: 16px;">Vou deixar de aproveitar as ofertas Amarelux</label><br><br>
 
            <button type="submit" value="Cadastrar">Cadastrar</button>
        </form>
        
        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>