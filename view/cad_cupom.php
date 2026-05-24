
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cupom</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>

<?php include 'header4.php'; ?>

    <section class="cadastro">
        <section class="cadastro-dentro">
            <h2> Cadastrar Cupom </h2>

            <form method="POST" action="../processamento/processamento.php" enctype="multipart/form-data">
                <input type="hidden" name="acao" value="cadastro_cupom">

                <section class="campo">
                <input type="text" name="codigo_cupom" id="codigo_cupom" placeholder="Código do Cupom">
                </section>

                <section class="campo">
                <input type="number" name="desconto" id="desconto" placeholder="Desconto (%)">
                </section>

                <section class="campo">
                <input type="number" name="valor_maximo" id="valor_maximo" placeholder="Valor Mínimo de Compra">
                </section>

                <section class="campo">
                <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade Disponível">
                </section>

                <section class="campo">
                <input type="date" name="data" id="data" placeholder="Data de Expiração">
                </section>

                <?php if(isset($_GET['erro']) && $_GET['erro'] === 'campos_vazios'): ?>
                    <p style="color:red">Preencha todos os campos.</p>
                <?php endif; ?>

                <section class="foto_perfil">
                    <h2> Selecionar imagem do cupom: </h2>
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
