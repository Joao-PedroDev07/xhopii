
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>

<?php include 'header4.php'; ?>

    <section class="cadastro">
        <section class="cadastro-dentro">
            <h2> Cadastrar Produto </h2 >
            
            <form action="../processamento/processamento.php" method="POST" enctype="multipart/form-data">

            <section class="campo">
                <input type="text" id="nome" name="nome" placeholder="Nome">
            </section>

            <section class="campo">
                <input type="text" id="fabricante" name="fabricante" placeholder="Fabricante">
            </section>

            <section class="campo">
                <input type="text" id="descricao" name="descricao" placeholder="Descrição">
            </section>

            <section class="campo">
                <input type="number" id="valor" name="valor" placeholder="Valor">
            </section>

            <section class="campo">
            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade">
            </section>

            <section class="foto_perfil">
                    <h2> Selecionar foto do produto: </h2>
                    <section class="area-arquivo">
                        <label for="foto" id="button2">Escolher arquivo</label>
                        <input type="file" id="foto" name="foto" style="display:none"> <!-- display none escode input !-->
                        <span class="texto_perfil">Nenhum arquivo escolhido</span>
                    </section>
                </section>
                <button type="submit" id="button1">Cadastrar</button>

            </form>
        </section>
    </section>

</body>
</html>

<?php include 'footer.php'; ?>