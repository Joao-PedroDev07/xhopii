
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
    <div class="esqueceu_senha">

        <div class="seta"> 
            <a href="index.php">
            <img src="img/seta.png" width=30> 
            </a>
        </div>

        <div class="esqueceu_senha-dentro">
               
            <h2>Redefinir Senha</h2>

            <form>

                <div class="campo">
                    <input type="email" id="email" placeholder="Email">
                </div>
                
                <a href="home.php">
                <button type="button">Enviar</button>
                </a>
                
            </form>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>