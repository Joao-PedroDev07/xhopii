
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>
<?php include 'header4.php'; ?>
    <section class="cadastro">
        <section class="cadastro-dentro">
            <h2> Cadastrar Cliente </h2 >
            
            <form>

                <section class="campo">
                <input type="text" id="nome" placeholder="Nome">
                </section>

                <section class="campo">
                <input type="text" id="sobrenome" placeholder="Sobrenome">
                </section>

                <section class="campo">
                <input type="number" id="CPF" placeholder="CPF">  
                </section>

                <section class="campo">
                <input type="date" id="data" placeholder="Data">
                </section>

                <section class="campo">
                <input type="number" id="numero" placeholder="Telefone">
                </section>

                <section class="campo">
                <input type="email" id="email" placeholder="Email">
                </section>

                <section class="campo"> 
                <input type="password" id="senha" placeholder="Senha">
                </section>

                <section class="foto_perfil">
                    <h2> Selecionar foto de perfl: </h2>
                    <section class="area-arquivo">
                        <label for="foto" id="button2">Escolher arquivo</label>
                        <input type="file" id="foto" style="display:none"> <!-- display none escode input !-->
                        <span class="texto_perfil">Nenhum arquivo escolhido</span>
                    </section>
                </section>

                <a href="home.php">
                <button type="button" id="button1"> Cadastrar</button>
                </a>

            </form>
        </section>
    </section>

</body>
</html>

<?php include 'footer.php'; ?>