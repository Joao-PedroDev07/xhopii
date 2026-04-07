
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Xhopii</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'header2.php'; ?>

    <div class="login">
        <div class="login-dentro">
            <h2> Login </h2 >
            
            <form>

                <div class="campo">
                <input type="email" id="email" placeholder="Email">
                </div>

                <div class="campo"> 
                <input type="password" id="senha" placeholder="Senha">
                </div>

                <a href="home.php">
                <button type="button"> Entre</button>
                </a>

                <div class="links">
                <a href="esqueceu_senha.php"> Esqueci minha senha</a>
                <a href="">Fazer login com SMS</a>
                </div>      

                <div class="divisor">
                    <p>―――――――――――――OU―――――――――――――</p>
                </div>

                <div class="redes-sociais-primaria">
                    <div class="redes-sociais">
                    <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
                    <p>Facebook</p>
                    </div>

                    <div class="redes-sociais">
                  <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="16" height="16">
                        <p>Google<p>
                    </div>

                    <div class="redes-sociais">
                        <i class="fa-brands fa-apple"></i>
                            <p>Apple</p>
                    </div>
                </div>

                <div class="cadastro"> 
                    <p>Novo na Xhoppi?</p> <a href="cad_cliente.php">Cadastrar</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'; ?>