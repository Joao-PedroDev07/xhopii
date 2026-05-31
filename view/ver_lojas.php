<?php
    
    require_once "../controller/Controlador.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ver_lojas.css">
    <title>Lojas</title>
</head>
<body>
     <?php include 'header4.php'; ?>
    <main>
        <section class="Container-Principal">
            <h2 class="Titulo-Pagina">LOJAS</h2>

            <section class="Grid-Lojas">

             <?php 
                    $controlador = new Controlador;
                    echo $controlador->visualizarLojas();
                    ?>
            </section>
        </section>
    </main>
</body>
</html>
 <?php include 'footer.php'; ?>
