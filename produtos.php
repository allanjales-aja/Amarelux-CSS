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
            include_once('menu.html')
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
            <div class="ItemProdutos" id="geladeira" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Refrigerador_TF39.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Geladeira Frost Free 310 Litros Branco Electrolux (TF39)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 2.299,00</p>
                <p class="PrecoProdutos">R$ 1.999,00</p>
            </div>
            <div class="ItemProdutos" id="geladeira" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Refrigerador_DC35A.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Geladeira Cycle Defrost 260L Branco Electrolux (DC35A)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 1.869,00</p>
                <p class="PrecoProdutos">R$ 1.799,00</p>
            </div>
            <div class="ItemProdutos" id="geladeira" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Refrigerador_TF42S.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Geladeira Top Freezer cor Inox 382L Electrolux (TF42S)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 3.129,00</p>
                <p class="PrecoProdutos">R$ 2.699,00</p>
            </div>
            <div class="ItemProdutos" id="ar" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Ar_VI12F-VE12F.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Ar Condicionado Split 12.000 Btus Frio Linha Ecoturbo Electrolux (VI12F/VE12F)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">Estoque</p>
                <p class="PrecoProdutos">Esgotado :(</p>
            </div>
            <div class="ItemProdutos" id="ar" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Ar_TI12R-TE12R.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Ar Condicionado Split 12.000 Btus Quente/Frio Electrolux (TI12R/TE12R)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 1.709,00</p>
                <p class="PrecoProdutos">R$ 1.709,00</p>
            </div>
            <div class="ItemProdutos" id="fogao" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Fogão_52LBS.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Fogão 4 Bocas Electrolux Prata Automático Mesa de Vidro e Porta Full Glass (52LSV)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 1.599,00</p>
                <p class="PrecoProdutos">R$ 1.499,00</p>
            </div>
            <div class="ItemProdutos" id="fogao" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Fogão_76LSU.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Fogão 5 Bocas Electrolux Prata Automático Ultra Chama e Vidro Removível (76LSU)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">Estoque</p>
                <p class="PrecoProdutos">Esgotado :(</p>
            </div>
            <div class="ItemProdutos" id="lavaroupas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/LavRoupas_LES09.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Lavadora de Roupas Electrolux Essential Care 8,5kg (LES09)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 1.459,00</p>
                <p class="PrecoProdutos">R$ 1.249,00</p>
            </div>
            <div class="ItemProdutos" id="lavaroupas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/LavRoupas_LES13.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Lavadora de Roupas Electrolux Essencial Care 13kg (LES13)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 1.949,00</p>
                <p class="PrecoProdutos">R$ 1.699,00</p>
            </div>
            <div class="ItemProdutos" id="lavaloucas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/LavLouças_LV08B.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Lava-louças Electrolux Branca 8 Serviços (LV08B)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 2.199,00</p>
                <p class="PrecoProdutos">R$ 2.199,00</p>
            </div>
            <div class="ItemProdutos" id="lavaloucas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/LavLouças_LE08S.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Lava-Louças Electrolux 8 Serviços Cinza (LE08S)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 2.799,00</p>
                <p class="PrecoProdutos">R$ 2.499,00</p>
            </div>
            <div class="ItemProdutos" id="microondas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Microondas_MTD30.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Micro-Ondas Painel Seguro 20L Electrolux (MTD30)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 539,00</p>
                <p class="PrecoProdutos">R$ 499,00</p>
            </div>
            <div class="ItemProdutos" id="microondas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Microondas_MB37R.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Micro-Ondas Electrolux Branco 27L com 55 Receitas pré-programadas (MB37R)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 639,00</p>
                <p class="PrecoProdutos">R$ 589,00</p>
            </div>
            <div class="ItemProdutos" id="microondas" onmouseover="destacar(this)" onmouseout="normal(this)">
                <br>
                <img src="./imagens/produtos/Microondas_MEF41.webp" width="120px" onclick="zoom(this)">
                <p class="DescricaoProdutos">Micro-Ondas Electrolux Meus Favoritos 31L (MEF41)</p>
                <hr>
                <p class="DescricaoProdutos" style="text-decoration: line-through;">R$ 699,00</p>
                <p class="PrecoProdutos">R$ 599,00</p>
            </div>
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