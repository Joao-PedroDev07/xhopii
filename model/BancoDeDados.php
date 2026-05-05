<?php

class BancoDeDados{

    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    //Métodos
    public function conectarBD(){
        $conexao = mysqli_connect($this->host,$this->login,$this->senha,$this->dataBase);
        return($conexao);
    }

    public function inserirCliente($cliente){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (nome, sobrenome, cpf, data, telefone, email, senha) 
                     VALUES ('" . $cliente->get_Nome() . "',
                             '" . $cliente->get_Sobrenome() . "',
                             '" . $cliente->get_Cpf() . "',
                             '" . $cliente->get_Data() . "',
                             '" . $cliente->get_Telefone() . "',
                             '" . $cliente->get_Email() . "',
                             '" . $cliente->get_Senha() . "')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirProduto($produto){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO produto (fabricante, descricao, valor) 
                     VALUES ('" . $produto->get_Fabricante() . "',
                             '" . $produto->get_Descricao() . "',
                             '" . $produto->get_Valor() . "')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirFuncionario($funcionario){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO funcionario (nome, sobrenome, cpf, data, telefone, cargo_funcao, salario, email, senha) 
                     VALUES ('" . $funcionario->get_Nome() . "',
                             '" . $funcionario->get_Sobrenome() . "',
                             '" . $funcionario->get_Cpf() . "',
                             '" . $funcionario->get_Data() . "',
                             '" . $funcionario->get_Telefone() . "',
                             '" . $funcionario->get_Cargo_funcao() . "',
                             '" . $funcionario->get_Salario() . "',
                             '" . $funcionario->get_Email() . "',
                             '" . $funcionario->get_Senha() . "')";
        mysqli_query($conexao,$consulta);
    }


    public function inserirCupom($cupom){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cupom (codigo_cupom, desconto, valor_maximo, quantidade, data) 
                     VALUES ('" . $cupom->get_Codigo_cupom() . "',
                             '" . $cupom->get_Desconto() . "',
                             '" . $cupom->get_Valor_maximo() . "',
                             '" . $cupom->get_Quantidade() . "',
                             '" . $cupom->get_Data() . "')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirLoja($loja){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO loja (nome_loja, nome_completo, descricao_loja, cnpj, data, telefone, setor, email, senha) 
                     VALUES ('" . $loja->get_Nome_loja() . "',
                             '" . $loja->get_Nome_completo() . "',
                             '" . $loja->get_Descricao_loja() . "',
                             '" . $loja->get_Cnpj() . "',
                             '" . $loja->get_Data() . "',
                             '" . $loja->get_Telefone() . "',
                             '" . $loja->get_Setor() . "',
                             '" . $loja->get_Email() . "',
                             '" . $loja->get_Senha() . "')";
        mysqli_query($conexao,$consulta);
    }

    public function retornarClientes(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }

    public function retornarProdutos(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao,$consulta);
        return $listaProdutos;
    }

    public function retornarFuncionarios(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM funcionario";
        $listaFuncionarios = mysqli_query($conexao,$consulta);
        return $listaFuncionarios;
    }

    public function retornarCupons(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cupom";
        $listaCupons = mysqli_query($conexao,$consulta);
        return $listaCupons;
    }

    public function retornarLojas(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM loja";
        $listaLojas = mysqli_query($conexao,$consulta);
        return $listaLojas;
    }
}

?>