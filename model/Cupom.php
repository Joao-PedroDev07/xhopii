<?php

class Cupom{

    //Atributos
    protected $codigo_cupom;
    protected $desconto;
    protected $valor_maximo;
    protected $quantidade;
    protected $data;
    protected $foto;

    //Construtor
    public function __construct($Codigo_cupom,$Desconto,$Valor_maximo,$Quantidade,$Data,$Foto){
        $this->codigo_cupom = $Codigo_cupom;
        $this->desconto = $Desconto;
        $this->valor_maximo = $Valor_maximo;
        $this->quantidade = $Quantidade;
        $this->data = $Data;
        $this->foto = $Foto;
    }

    //Getter e Setter
    public function get_Codigo_cupom(){
        return($this->codigo_cupom);
    }

    public function set_Codigo_cupom($Codigo_cupom){
        $this->codigo_cupom = $Codigo_cupom;
    }

    public function get_Desconto(){
        return($this->desconto);
    }

    public function set_Desconto($Desconto){
        $this->desconto = $Desconto;
    }

    public function get_Valor_maximo(){
        return($this->valor_maximo);
    }

    public function set_Valor_maximo($Valor_maximo){
        $this->valor_maximo = $Valor_maximo;
    }

    public function get_Quantidade(){
        return($this->quantidade);
    }

    public function set_Quantidade($Quantidade){
        $this->quantidade = $Quantidade;
    }

    public function get_Data(){
        return($this->data);
    }

    public function set_Data($Data){
        $this->data = $Data;
    }

    public function get_Foto(){
        return($this->foto);
    }

    public function set_Foto($Foto){
        $this->foto = $Foto;
    }
}
?>