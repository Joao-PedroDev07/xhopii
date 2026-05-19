
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Loja</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>

<?php include 'header1.php'; ?>

    <section class="cadastro">
        <section class="cadastro-dentro">
            <h2> Cadastrar Loja </h2 >
            
            <form>

                <section class="campo">
                <input type="text" id="lojanome" placeholder="Nome da Loja">
                </section>

                <section class="campo">
                <input type="text" id="nome" placeholder="Nome Completo">
                </section>

                <section class="campo">
                <input type="text" id="descricao" placeholder="Descrição da Loja">
                </section>

                <section class="campo">
                <input type="number" id="CPF" placeholder="CNPJ">  
                </section>

                <section class="campo">
                <input type="date" id="data" placeholder="Data">
                </section>

                <section class="campo">
                <input type="number" id="numero" placeholder="Telefone">
                </section>

                <section class="campo">
                <input type="text" id="setor" placeholder="Setor">
                </section>

                <section class="campo">
                <input type="email" id="email" placeholder="Email">
                </section>

                <section class="campo"> 
                <input type="password" id="senha" placeholder="Senha">
                </section>

                <section class="foto_perfil">
                    <h2> Selecionar foto da loja: </h2>
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