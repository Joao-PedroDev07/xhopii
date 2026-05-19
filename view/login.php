
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Xhopii</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'header2.php'; ?>

    <section class="login">
        <section class="login-dentro">
            <h2> Login </h2 >
            
            <form>

                <section class="campo">
                <input type="email" id="email" placeholder="Email">
                </section>

                <section class="campo"> 
                <input type="password" id="senha" placeholder="Senha">
                </section>

                <a href="home.php">
                <button type="button"> Entre</button>
                </a>

                <section class="links">
                <a href="esqueceu_senha.php"> Esqueci minha senha</a>
                <a href="">Fazer login com SMS</a>
                </section>      

                <section class="divisor">
                    <p>―――――――――――――OU―――――――――――――</p>
                </section>

                <section class="redes-sociais-primaria">
                    <section class="redes-sociais">
                    <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
                    <p>Facebook</p>
                    </section>

                    <section class="redes-sociais">
                  <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="16" height="16">
                        <p>Google<p>
                    </section>

                    <section class="redes-sociais">
                        <i class="fa-brands fa-apple"></i>
                            <p>Apple</p>
                    </section>
                </section>

                <section class="cadastro"> 
                    <p>Novo na Xhoppi?</p> <a href="cad_cliente.php">Cadastrar</a>
                </section>
            </form>
        </section>
    </section>

</body>
</html>

<?php include 'footer.php'; ?>