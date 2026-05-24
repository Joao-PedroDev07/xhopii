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
if(isset($_POST['inputNomeFunc']) && isset($_POST['inputSobrenomeFunc']) && 
   isset($_POST['inputCPFFunc']) && isset($_POST['inputDataNascFunc']) && 
   isset($_POST['inputTelefoneFunc']) && isset($_POST['inputEmailFunc']) &&
   isset($_POST['inputSalarioFunc'])){

    $nome = $_POST['inputNomeFunc'];
    $sobrenome = $_POST['inputSobrenomeFunc'];
    $cpf = $_POST['inputCPFFunc'];
    $dataNasc = $_POST['inputDataNascFunc'];
    $telefone = $_POST['inputTelefoneFunc'];
    $email = $_POST['inputEmailFunc'];
    $salario = $_POST['inputSalarioFunc'];
    
    #MODIFICAR PARA MVC CONTROLADOR
    inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

// Cadastro de Produto
if(!empty($_POST['nome']) && !empty($_POST['fabricante']) && 
   !empty($_POST['descricao']) && !empty($_POST['valor']) && 
   !empty($_POST['quantidade']) && !empty($_FILES['foto']['name'])){

    $nome       = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao  = $_POST['descricao'];
    $valor      = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $foto = $_FILES['foto']['name'];
    $pastaDestino = "../uploads/" . $foto; 

    move_uploaded_file($_FILES['foto']['tmp_name'], $pastaDestino);

    $controlador->cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade, $foto);

    header('Location:../view/home.php');
    die();
}
?>