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
    public function visualizarProdutosHome(){

        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        $cards = "";
    
        while($produto = mysqli_fetch_assoc($listaProdutos))
        {
            $cards .= '<a href="produto.php">
                <section class="card-produto">
                    <img src="../uploads/'.$produto["foto"].'"alt="Produto">
                    <span class="nome">'. $produto["nome"] .'</span>
                    <section class="rodape">
                        <span class="preco">'. $produto["valor"] .'</span>
                        <span class="disponivel">'. $produto["quantidade"] .' disponíveis</span>
                    </section>
                </section>
            </a>';
        }
    
        return $cards;
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

    public function visualizarClientes(){

        $listaClientes = $this->bancoDeDados->retornarClientes();
        $cards = "";
    
        while($cliente = mysqli_fetch_assoc($listaClientes))
        {
            $cards .= '<article class="Card-Cliente">
                    <section class="Card-Avatar">
                        <img src="../uploads/'. $cliente['foto'] .'" alt="Cliente" class="Avatar-Img">
                    </section>
                    <section class="Card-Info">
                        <h3 class="Cliente-Nome">'. $cliente['nome'] .'</h3>
                        <p class="Cliente-Dado"><span>CPF:</span> '. $cliente['cpf'] .'</p>
                        <p class="Cliente-Dado"><span>Email:</span> '. $cliente['email'] .'</p>
                        <p class="Cliente-Dado"><span>Telefone:</span> '. $cliente['telefone'] .'</p>
                    </section>
                    <section class="Card-Acoes">
                        <button class="Btn-Ver">Ver</button>
                        <button class="Btn-Excluir">Excluir</button>
                    </section>
                </article>';
        }
    
        return $cards;
    }

    public function visualizarFuncionarios(){

        $listaFuncionarios = $this->bancoDeDados->retornarFuncionarios();
        $cards = "";
    
        while($funcionario = mysqli_fetch_assoc($listaFuncionarios))
        {
            $cards .= '<article class="Card-Funcionario">
                    <section class="Card-Avatar">
                        <img src="../uploads/'. $funcionario['foto'] .'" alt="Funcionário" class="Avatar-Img">
                    </section>
                    <section class="Card-Info">
                        <h3 class="Funcionario-Nome">'. $funcionario['nome'] .'</h3>
                        <p class="Funcionario-Dado"><span>CPF:</span> '. $funcionario['cpf'] .'</p>
                        <p class="Funcionario-Dado"><span>Cargo:</span> '. $funcionario['cargo_funcao'] .'</p>
                        <p class="Funcionario-Dado"><span>Salário:</span> R$ '. number_format($funcionario['salario'], 2, ',', '.') .'</p>
                        <p class="Funcionario-Dado"><span>Email:</span> '. $funcionario['email'] .'</p>
                    </section>
                    <section class="Card-Acoes">
                        <button class="Btn-Ver">Ver</button>
                        <button class="Btn-Excluir">Excluir</button>
                    </section>
                </article>';
        }
    
        return $cards;
    }

        public function visualizarCupons(){

        $listaCupons = $this->bancoDeDados->retornarCupons();
        $cards = "";
    
        while($cupom = mysqli_fetch_assoc($listaCupons))
        {
            $cards .= 
            '
                    <article class="Card-Cupom">
                    <section class="Cupom-Topo">
                        <span class="Cupom-Codigo">' . $cupom['codigo_cupom'] . '</span>
                        <span class="Cupom-Badge Percentual">Percentual</span>
                    </section>
                    <section class="Cupom-Info">
                        <p class="Cupom-Dado"><span>Desconto:</span> 10%</p>
                        <p class="Cupom-Dado"><span>Valor Mínimo:</span> R$ 50,00</p>
                        <p class="Cupom-Dado"><span>Quantidade:</span> 100 disponíveis</p>
                        <p class="Cupom-Dado"><span>Expira em:</span> 30/06/2026</p>
                    </section>
                    <section class="Cupom-Acoes">
                        <button class="Btn-Ver">Ver</button>
                        <button class="Btn-Excluir">Excluir</button>
                    </section>
                </article>
            ';
        }
    
        return $cards;
    }


}

?>
