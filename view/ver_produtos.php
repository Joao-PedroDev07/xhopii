<?php
    
    require_once "../controller/Controlador.php";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ver_produtos.css">
    <title>Produtos</title>
</head>
<body>
        <?php include 'header4.php'; ?>
    <main>
    <section class="Container-Geral">
        <section class="Container-Principal">

                <h2 class="Titulo-Pagina">PRODUTOS</h2>

                <section class="Grid-Produtos">

                    <?php 
                    $controlador = new Controlador;
                    echo $controlador->visualizarProdutos();
                    ?>

                </section>
            </section>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
