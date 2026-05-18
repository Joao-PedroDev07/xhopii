<?php

class Produto{

    //Atributos
    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;
    protected $quantidade;
    protected $foto;

    //Construtor
    public function __construct($Nome,$Fabricante,$Descricao,$Valor, $Quantidade, $Foto){
        $this->nome = $Nome;
        $this->fabricante = $Fabricante;
        $this->descricao = $Descricao;
        $this->valor = $Valor;
        $this->quantidade = $Quantidade;
        $this->foto = $Foto;
    }

    //Getter e Setter
    public function get_Nome(){
        return($this->nome);
    }

    public function set_Nome($Nome){
        $this->nome = $Nome;
    }

    public function get_Fabricante(){
        return($this->fabricante);
    }

    public function set_Fabricante($Fabricante){
        $this->fabricante = $Fabricante;
    }

    public function get_Descricao(){
        return($this->descricao);
    }

    public function set_Descricao($Descricao){
        $this->descricao = $Descricao;
    }

    public function get_Valor(){
        return($this->valor);
    }

    public function set_Valor($Valor){
        $this->valor = $Valor;
    }
    public function get_Quantidade(){
        return($this->quantidade);
    }

    public function set_Quantidade($Quantidade){
        $this->quantidade = $Quantidade;
    }

    public function get_Foto(){
        return($this->foto);
    }

    public function set_tFoto($Foto){
        $this->foto = $Foto;
    }

    //Métodos
    public function aplicarCupom($cupomTaxa){
        $valorDesconto = ($this->valor*$cupomTaxa) / 100;
        $this->valor = $this->valor - $valorDesconto;
    }
}
?>