
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="../css/esqueceu_senha.css">
</head>
<body>
<?php include 'header3.php'; ?>
    <section class="esqueceu_senha">

        <section class="seta"> 
            <a href="index.php">
            <img src="img/seta.png" width=30> 
            </a>
        </section>

        <section class="esqueceu_senha-dentro">
               
            <h2>Redefinir Senha</h2>

            <form>

                <section class="campo">
                    <input type="email" id="email" placeholder="Email">
                </section>
                
                <a href="home.php">
                <button type="button">Enviar</button>
                </a>
                
            </form>
        </section>
    </section>
</body>
</html>
<?php include 'footer.php'; ?>