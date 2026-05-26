<?php
    
    require_once "../controller/Controlador.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

    <?php include 'header4.php'; ?>

    <section class="container-principal">

        <section class="Carrosel">

            <section id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                <section class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </section>

                <section class="carousel-inner">

                    <section class="carousel-item active">
                        
                        <img src="../img/banner1.png" class="d-block w-100" alt="Banner 1">
                    </section>

                    <section class="carousel-item">
                        
                        <img src="../img/banner2.png" class="d-block w-100" alt="Banner 2">
                    </section>

                    <section class="carousel-item">
                
                        <img src="../img/banner3.png" class="d-block w-100" alt="Banner 3">
                    </section>

                </section>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>

            </section>
        </section>

        <section class="Promoções">
        <img src="../img/cupom.png">
            
        </section>

        <h1> Descobertas do Dia </h1>

        <section class="linha"></section>

        <section class="Produtos">
               

                <section class="caixa-de-produtos">
                
                    <?php 
                    $controlador = new Controlador;
                    echo $controlador->visualizarProdutosHome();
                    ?>

                </section>

        </section>

    </section>

<?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>