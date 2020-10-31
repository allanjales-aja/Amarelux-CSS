<?php
    require_once('conexao_bd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Produtos - AmareLux Eletro</title>
        <!--Conexão CSS-->
        <link href="styles.css" rel="stylesheet" type="text/css">
        <!--Conexão JS-->
        <script src="funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->
        <?php
            include_once('menu.html');
        ?>
    
    <header>
        <h2>Produtos</h2>
    </header>
        <hr>

        <div class="Categorias">
            <h3 style="font-size: 19px;">Categorias</h3>
            <hr>
            <ul>
                <li onclick="select_todos('todos')" id="todos">Todos (14)</li>
                <li onclick="select_categ('ar')" id="ar">Ar Condicionado (2)</li>
                <li onclick="select_categ('fogao')" id="fogao">Fogões (2)</li>
                <li onclick="select_categ('geladeira')" id="geladeira">Geladeiras (3)</li>
                <li onclick="select_categ('lavaroupas')" id="lavaroupas">Lavadora de Roupas (2)</li>
                <li onclick="select_categ('lavaloucas')" id="lavaloucas">Lava Louças (2)</li>
                <li onclick="select_categ('microondas')" id="microondas">Micro-Ondas (3)</li>
            </ul>
        </div>
        <div class="Produtos">

<?php
    $sql = "select * from produtos";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){
?>

            <div class="ItemProdutos" id="<?php echo $rows["nome_prod"]; ?>" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="<?php echo $rows["nome_img"]; ?>" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">
                    <?php if($rows["valor"] != null){ echo "R$ ",$rows["valor"];} 
                        else {echo "R$ 0.00";} ?></p>
                <p class="PrecoProdutos">
                    <?php if($rows["valor"] != null){ echo "R$ ",$rows["valor_unit"];}
                    else {echo "ESGOTADO :(";} ?></p>
            </div>
<?php
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }
?>            
        </div>    

        <!--Rodapé-->
        <?php
            include_once('rodape.html')
        ?>
    </body>
</html>