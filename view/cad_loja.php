
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Loja</title>
    <link rel="stylesheet" href="../css/cad_cliente.css">

<body>

<?php include 'header4.php'; ?>

    <section class="cadastro">
        <section class="cadastro-dentro">
            <h2> Cadastrar Loja </h2 >
            
            <form method="POST" action="../processamento/processamento.php" enctype="multipart/form-data">
                <input type="hidden" name="acao" value="cadastro_loja">

                <section class="campo">
                <input type="text" name="nome_loja" id="lojanome" placeholder="Nome da Loja">
                </section>

                <section class="campo">
                <input type="text" name="nome_completo" id="nome" placeholder="Nome Completo">
                </section>

                <section class="campo">
                <input type="text" name="descricao_loja" id="descricao" placeholder="Descrição da Loja">
                </section>

                <section class="campo">
                <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ">
                </section>

                <section class="campo">
                <input type="date" name="data" id="data" placeholder="Data">
                </section>

                <section class="campo">
                <input type="number" name="telefone" id="numero" placeholder="Telefone">
                </section>

                <section class="campo">
                <input type="text" name="setor" id="setor" placeholder="Setor">
                </section>

                <section class="campo">
                <input type="email" name="email" id="email" placeholder="Email">
                </section>

                <section class="campo">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                </section>

                <?php if(isset($_GET['erro']) && $_GET['erro'] === 'campos_vazios'): ?>
                    <p style="color:red">Preencha todos os campos.</p>
                <?php endif; ?>

                <section class="foto_perfil">
                    <h2> Selecionar foto da loja: </h2>
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