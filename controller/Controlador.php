<?php

require_once("../model/BancoDeDados.php"); //puxa os métodos do banco

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
        $cards = "";
    
        while($produto = mysqli_fetch_assoc($listaProdutos))
        {
            $cards .= "<a href='produto.php' class='Card-Produto'>".
                "<section class='Card-Img-Container'>".
                "<img src='../uploads/".$produto['foto']."' alt='Produto' class='Card-Img'>".
                "</section>".
                "<section class='Card-Info'>".
                "<p class='Produto-Nome'>".$produto['nome']."</p>".
                "<p class='Produto-Fab'><span>Fabricante:</span> ".$produto['fabricante']."</p>".
                "<p class='Produto-Desc'><span>Descrição:</span> ".$produto['descricao']."</p>".
                "<section class='Produto-Rodape'>".
                "<span class='Produto-Preco'>R$ ".$produto['valor']."</span>".
                "<span class='Produto-Estoque'>".$produto['quantidade']." disponíveis</span>".
                "</section>".
                "</section>".
                "</a>";
        }
    
        return $cards;
    }

}

?>
