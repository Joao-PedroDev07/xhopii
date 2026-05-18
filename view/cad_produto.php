
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>

<?php include 'header4.php'; ?>

    <div class="cadastro">
        <div class="cadastro-dentro">
            <h2> Cadastrar Produto </h2 >
            
            <form action="../processamento/processamento.php" method="POST" enctype="multipart/form-data">

            <div class="campo">
                <input type="text" id="nome" name="nome" placeholder="Nome">
            </div>

            <div class="campo">
                <input type="text" id="fabricante" name="fabricante" placeholder="Fabricante">
            </div>

            <div class="campo">
                <input type="text" id="descricao" name="descricao" placeholder="Descrição">
            </div>

            <div class="campo">
                <input type="number" id="valor" name="valor" placeholder="Valor">
            </div>

            <div class="campo">
            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade">
            </div>

            <div class="foto_perfil">
                    <h2> Selecionar foto do produto: </h2>
                    <div class="area-arquivo">
                        <label for="foto" id="button2">Escolher arquivo</label>
                        <input type="file" id="foto" name="foto" style="display:none"> <!-- display none escode input !-->
                        <span class="texto_perfil">Nenhum arquivo escolhido</span>
                    </div>
                </div>
                <button type="submit" id="button1">Cadastrar</button>

            </form>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'; ?>