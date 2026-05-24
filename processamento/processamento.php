<?php

session_start();
require_once("../model/BancoDeDados.php"); //puxa os métodos do banco
require_once("../controller/Controlador.php"); //liga o Controller
require_once("../model/Cliente.php"); //liga as classes
require_once("../model/Funcionario.php");
require_once("../model/Produto.php");
require_once("../model/Loja.php");
require_once("../model/Cupom.php");

$controlador = new Controlador();

//Cadastro de Cliente
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastro'){

    $nome      = $_POST['nome']      ?? '';
    $sobrenome = $_POST['sobrenome'] ?? '';
    $cpf       = $_POST['cpf']       ?? '';
    $data      = $_POST['data']      ?? '';
    $telefone  = $_POST['telefone']  ?? '';
    $email     = $_POST['email']     ?? '';
    $senha     = $_POST['senha']     ?? '';
    $foto      = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if(empty($nome) || empty($sobrenome) || empty($cpf) || empty($data) ||
       empty($telefone) || empty($email) || empty($senha)){
        header('Location:../view/cad_cliente.php?erro=campos_vazios');
        die();
    }

    if(!empty($_FILES['foto']['tmp_name'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
    }

    $controlador->cadastrarcliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto);

    header('Location:../view/home.php');
    die();
}

//Login
if(isset($_POST['acao']) && $_POST['acao'] === 'login'){

    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if(empty($email) || empty($senha)){
        header('Location:../view/login.php?erro=campos_vazios');
        die();
    }

    if($controlador->Login($email, $senha) == true){
        $_SESSION['estaLogado'] = TRUE;
        header('Location:../view/home.php');
        die();
    } else {
        $_SESSION['estaLogado'] = FALSE;
        header('Location:../view/login.php?erro=credenciais');
        die();
    }

}

//Cadastro de Funcionário
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastro_funcionario'){

    $nome         = $_POST['nome']         ?? '';
    $sobrenome    = $_POST['sobrenome']    ?? '';
    $cpf          = $_POST['cpf']          ?? '';
    $data         = $_POST['data']         ?? '';
    $telefone     = $_POST['telefone']     ?? '';
    $cargo_funcao = $_POST['cargo_funcao'] ?? '';
    $salario      = $_POST['salario']      ?? '';
    $email        = $_POST['email']        ?? '';
    $senha        = $_POST['senha']        ?? '';
    $foto         = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if(empty($nome) || empty($sobrenome) || empty($cpf) || empty($data) ||
       empty($telefone) || empty($cargo_funcao) || empty($salario) ||
       empty($email) || empty($senha)){
        header('Location:../view/cad_func.php?erro=campos_vazios');
        die();
    }

    if(!empty($_FILES['foto']['tmp_name'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
    }

    $controlador->cadastrarfuncionario($nome, $sobrenome, $cpf, $data, $telefone, $cargo_funcao, $salario, $email, $senha, $foto);

    header('Location:../view/home.php');
    die();
}

//Cadastro de Loja
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastro_loja'){

    $nome_loja     = $_POST['nome_loja']     ?? '';
    $nome_completo = $_POST['nome_completo'] ?? '';
    $descricao_loja= $_POST['descricao_loja']?? '';
    $cnpj          = $_POST['cnpj']          ?? '';
    $data          = $_POST['data']          ?? '';
    $telefone      = $_POST['telefone']      ?? '';
    $setor         = $_POST['setor']         ?? '';
    $email         = $_POST['email']         ?? '';
    $senha         = $_POST['senha']         ?? '';
    $foto          = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if(empty($nome_loja) || empty($nome_completo) || empty($descricao_loja) ||
       empty($cnpj) || empty($data) || empty($telefone) || empty($setor) ||
       empty($email) || empty($senha)){
        header('Location:../view/cad_loja.php?erro=campos_vazios');
        die();
    }

    if(!empty($_FILES['foto']['tmp_name'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
    }

    $controlador->cadastrarloja($nome_loja, $nome_completo, $descricao_loja, $cnpj, $data, $telefone, $setor, $email, $senha, $foto);

    header('Location:../view/home.php');
    die();
}

//Cadastro de Cupom
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastro_cupom'){

    $codigo_cupom = $_POST['codigo_cupom'] ?? '';
    $desconto     = $_POST['desconto']     ?? '';
    $valor_maximo = $_POST['valor_maximo'] ?? '';
    $quantidade   = $_POST['quantidade']   ?? '';
    $data         = $_POST['data']         ?? '';
    $foto         = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if(empty($codigo_cupom) || empty($desconto) || empty($valor_maximo) ||
       empty($quantidade) || empty($data)){
        header('Location:../view/cad_cupom.php?erro=campos_vazios');
        die();
    }

    if(!empty($_FILES['foto']['tmp_name'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
    }

    $controlador->cadastrarcupom($codigo_cupom, $desconto, $valor_maximo, $quantidade, $data, $foto);

    header('Location:../view/home.php');
    die();
}

//Cadastro de Produto
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastro_produto'){

    $nome       = $_POST['nome']       ?? '';
    $fabricante = $_POST['fabricante'] ?? '';
    $descricao  = $_POST['descricao']  ?? '';
    $valor      = $_POST['valor']      ?? '';
    $quantidade = $_POST['quantidade'] ?? '';
    $foto       = !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if(empty($nome) || empty($fabricante) || empty($descricao) ||
       empty($valor) || empty($quantidade)){
        header('Location:../view/cad_produto.php?erro=campos_vazios');
        die();
    }

    if(!empty($_FILES['foto']['tmp_name'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
    }

    $controlador->cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade, $foto);

    header('Location:../view/home.php');
    die();
}
?>