
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
            <h2> Cadastrar Produto </h2>

            <form method="POST" action="../processamento/processamento.php" enctype="multipart/form-data">
                <input type="hidden" name="acao" value="cadastro_produto">

                <section class="campo">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                </section>

                <section class="campo">
                <input type="text" name="fabricante" id="fabricante" placeholder="Fabricante">
                </section>

                <section class="campo">
                <input type="text" name="descricao" id="descricao" placeholder="Descrição">
                </section>

                <section class="campo">
                <input type="text" name="valor" id="valor" placeholder="Valor">
                </section>

                <section class="campo">
                <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade">
                </section>

                <?php if(isset($_GET['erro']) && $_GET['erro'] === 'campos_vazios'): ?>
                    <p style="color:red">Preencha todos os campos.</p>
                <?php endif; ?>

                <section class="foto_perfil">
                    <h2> Selecionar foto do produto: </h2>
                    <section class="area-arquivo">
                        <label for="foto" id="button2">Escolher arquivo</label>
                        <input type="file" name="foto" id="foto" style="display:none">
                        <span class="texto_perfil">Nenhum arquivo escolhido</span>
                    </section>
                </section>

                <button type="submit" id="button1"> Cadastrar</button>

            </form>
        </section>
    </section>

</body>
</html>

<?php include 'footer.php'; ?>
