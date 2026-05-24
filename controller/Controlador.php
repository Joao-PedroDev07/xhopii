<?php

class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }

    public function Login($email, $senha)
    {
        return $this->bancoDeDados->verificarlogin($email, $senha);
    }

    public function cadastrarcliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto)
    {
        $cliente = new Cliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto);
        $this->bancoDeDados->inserirCliente($cliente);
    }


    public function cadastrarfuncionario($nome, $sobrenome, $cpf, $data, $telefone, $cargo_funcao, $salario, $email, $senha, $foto)
    {
        $funcionario = new Funcionario($nome, $sobrenome, $cpf, $data, $telefone, $cargo_funcao, $salario, $email, $senha, $foto);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function cadastrarloja($nome_loja, $nome_completo, $descricao_loja, $cnpj, $data, $telefone, $setor, $email, $senha, $foto)
    {
        $loja = new Loja($nome_loja, $nome_completo, $descricao_loja, $cnpj, $data, $telefone, $setor, $email, $senha, $foto);
        $this->bancoDeDados->inserirLoja($loja);
    }

    public function cadastrarcupom($codigo_cupom, $desconto, $valor_maximo, $quantidade, $data, $foto)
    {
        $cupom = new Cupom($codigo_cupom, $desconto, $valor_maximo, $quantidade, $data, $foto);
        $this->bancoDeDados->inserirCupom($cupom);
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade, $foto){

        $produto = new Produto($nome,$fabricante,$descricao,$valor, $quantidade, $foto);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }

}

?>