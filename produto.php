<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produto.css">
    
    <title>Produto</title>
</head>
<body>
    <?php include 'header1.php'; ?>
    <main>
        <section class="Container-Principal">
            <section class="Imgs">
                <section class="Imgs-Produto-Sec">
                    <ul class="lista-imgs">

                    <li>
                        <input type="radio" name="img" id="img1" checked>
                        <label for="img1">
                        <img src="img/produto1.png">
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="img" id="img2">
                        <label for="img2">
                        <img src="img/produto2.png">
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="img" id="img3">
                        <label for="img3">
                        <img src="img/produto3.png">
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="img" id="img4">
                        <label for="img4"> 
                        <img src="img/produto4.png">
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="img" id="img5">
                        <label for="img5"> 
                        <img src="img/produto5.png">
                        </label>
                    </li>

                    </ul>
                </section>
                <section class="Img-Principal">
                    <img src="img/produto1.png" alt="Produto">
                </section>
            </section>

            <section class="Desc-Items">
                    <h1 class="Label-Titulo">Camisa Desenvolvedor Front-End CSS</h1>

                    <h2 class="Label-Preco">R$56,90</h2>

                    <h5 class="Label-Estoque">175 peças disponiveis</h5>

                    <h5 class="Label-Modelos">Modelos:</h5>

                <form>
                    <section class="Modelos">
                        <label class="Btn-Modelos">
                            <input type="radio" name="cor" value="preto"> Preto
                        </label>

                        <label  class="Btn-Modelos">
                            <input type="radio" name="cor" value="azul"> Azul
                        </label>

                        <label  class="Btn-Modelos">
                            <input type="radio" name="cor" value="verde"> Verde
                        </label>

                        <label  class="Btn-Modelos">
                            <input type="radio" name="cor" value="cinza"> Cinza
                        </label>

                        <label  class="Btn-Modelos">
                            <input type="radio" name="cor" value="rosa"> Rosa
                        </label>
                    </section>
                <h5 class="Label-Tamanhos">Tamanhos:</h5>
                    <section class="Tamanhos">
                        <label class="Btn-Tamanhos">
                            <input type="radio" name="tamanho" value="P"> P
                        </label>

                        <label class="Btn-Tamanhos">
                            <input type="radio" name="tamanho" value="M"> M
                        </label>

                        <label class="Btn-Tamanhos">
                            <input type="radio" name="tamanho" value="G"> G
                        </label>

                        <label class="Btn-Tamanhos">
                            <input type="radio" name="tamanho" value="GG"> GG
                        </label>
                    </section>
                <h5 class="Label-Size-Selected">Tamanho selecionado: P</h5>
            <section class="Btn-Comprar-Container">
                <button type="submit" class="Btn-Comprar">Comprar Agora</button>
            </section>

                </form>
            </section>
        </section>

    </main>
          <?php include 'footer.php'; ?>
</body>
</html>