
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Loja</title>
    <link rel="stylesheet" href="css/cad_cliente.css">

<body>

<?php include 'header1.php'; ?>

    <div class="cadastro">
        <div class="cadastro-dentro">
            <h2> Cadastrar Loja </h2 >
            
            <form>

                <div class="campo">
                <input type="text" id="lojanome" placeholder="Nome da Loja">
                </div>

                <div class="campo">
                <input type="text" id="nome" placeholder="Nome Completo">
                </div>

                <div class="campo">
                <input type="text" id="descricao" placeholder="Descrição da Loja">
                </div>

                <div class="campo">
                <input type="number" id="CPF" placeholder="CNPJ">  
                </div>

                <div class="campo">
                <input type="date" id="data" placeholder="Data">
                </div>

                <div class="campo">
                <input type="number" id="numero" placeholder="Telefone">
                </div>

                <div class="campo">
                <input type="text" id="setor" placeholder="Setor">
                </div>

                <div class="campo">
                <input type="email" id="email" placeholder="Email">
                </div>

                <div class="campo"> 
                <input type="password" id="senha" placeholder="Senha">
                </div>

                <div class="foto_perfil">
                    <h2> Selecionar foto da loja: </h2>
                    <div class="area-arquivo">
                        <label for="foto" id="button2">Escolher arquivo</label>
                        <input type="file" id="foto" style="display:none"> <!-- display none escode input !-->
                        <span class="texto_perfil">Nenhum arquivo escolhido</span>
                    </div>
                </div>

                <a href="home.php">
                <button type="button" id="button1"> Cadastrar</button>
                </a>

            </form>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'; ?>