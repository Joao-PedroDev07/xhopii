<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar_cupom.css">
    <title>Cadastrar Cupom</title>
</head>
<body>
    <main>
        <section class="Container-Form">
            <section class="Form-Box">
                <h2 class="Form-Titulo">Cadastrar Cupom</h2>

                <form>
                    <input class="Form-Input" type="text" placeholder="Código do Cupom">
                    <input class="Form-Input" type="number" placeholder="Desconto (%)">
                    <input class="Form-Input" type="number" placeholder="Valor Mínimo de Compra">
                    <input class="Form-Input" type="number" placeholder="Quantidade Disponível">
                    <input class="Form-Input" type="date" placeholder="Data de Expiração">

                    <p class="Form-Label-Foto">Selecionar imagem do cupom:</p>

                    <section class="Form-File-Row">
                        <label class="Btn-Arquivo" for="file-cupom">Escolher arquivo</label>
                        <input type="file" id="file-cupom" class="Input-File">
                        <span class="File-Nome">Nenhum arquivo escolhido</span>
                    </section>

                    <section class="Btn-Cadastrar-Container">
                        <button type="submit" class="Btn-Cadastrar">CADASTRAR</button>
                    </section>
                </form>
            </section>
        </section>
    </main>
</body>
</html>
