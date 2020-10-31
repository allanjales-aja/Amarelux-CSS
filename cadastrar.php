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
        
        <form style="text-align: center;">
            <h3 class="TituloGeral" style="text-decoration: underline;">Preencha o cadastro:</h3>

            <label for="name" class="TituloGeral">Nome:</label><br>
            <input type="text" id="inome" name="nname"><br><br>

            <label for="cpf" class="TituloGeral">CPF:</label><br>
            <input type="number" id="icpf" name="ncpf"><br><br>

            <label for="datan" class="TituloGeral">Data de Nascimento:</label><br>
            <input type="date" id="idatan" name="ndatan"><br><br>

            <label for="cep" class="TituloGeral">CEP:</label><br>
            <input type="number" id="icep" name="ncep"><br><br>

            <label for="endereco" class="TituloGeral">Endereço:</label><br>
            <input type="text" id="iendereco" name="nendereco"><br><br>

            <label for="email" class="TituloGeral">E-mail:</label><br>
            <input type="email" id="eemail" name="email"><br><br>

            <label for="senhaa" class="TituloGeral">Digite sua senha:</label><br>
            <input type="password" id="iasenha" name="nasenha"><br><br>

            <label for="senhab" class="TituloGeral">Confirme sua senha:</label><br>
            <input type="password" id="ibsenha" name="nbsenha"><br><br>

            <input type="radio" id="isim" name="oferta" value="sim-selecionado" checked>
            <label for="sim" id="Rodape" style="font-size: 16px;">Quero receber ofertas Amarelux</label><br>
            
            <input type="radio" id="inao" name="oferta" value="não-selecionado"> 
            <label for="nao" id="Rodape" style="font-size: 16px;">Vou deixar de aproveitar as ofertas Amarelux</label><br><br>
 
            <input type="submit" value="Cadastrar">
        </form>
        
        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>