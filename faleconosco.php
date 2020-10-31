<?php
    require_once('conexao_bd.php');
?>

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

        <form method="post" action="insercaofaleconosco.php">
            <label for="nome" class="TituloGeral">Nome:</label><br>
            <input type="text" id="nome" name="nome" style="width:295px;">
            <br><br>
            <label for="email" class="TituloGeral">E-mail:</label><br>
            <input type="email" id="email" name="email" style="width:295px;">
            <br><br>
            <label for="mensagem" class="TituloGeral">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="7" cols="40"></textarea>
            <br><br>
            <button type="submit" value="Enviar">Enviar</button>
        </form>

<main>
    <?php
        $sql = "select * from mensagens";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()){
                echo "Data: ", $rows['data_msg'], "<br>";
                echo "Nome: ", $rows['nome_msg'], "<br>";
                echo "Mensagem: ", $rows['mensagem'], "<br>";
                echo "<hr>";
            }
        } else {
        echo "Nenhuma mensagem enviada!";
        }
    ?>
</main>
        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>