<?php

class Loja{

    //Atributos
    protected $nome_loja;
    protected $nome_completo;
    protected $descricao_loja;
    protected $cnpj;
    protected $data;
    protected $telefone;
    protected $setor;
    protected $email;
    protected $senha;
    protected $foto;

    //Construtor
    public function __construct($Nome_loja,$Nome_completo,$Descricao_loja,$Cnpj,$Data,$Telefone,$Setor,$Email,$Senha,$Foto){
        $this->nome_loja = $Nome_loja;
        $this->nome_completo = $Nome_completo;
        $this->descricao_loja = $Descricao_loja;
        $this->cnpj = $Cnpj;
        $this->data = $Data;
        $this->telefone = $Telefone;
        $this->setor = $Setor;
        $this->email = $Email;
        $this->senha = $Senha;
        $this->foto = $Foto;
    }

    //Getter e Setter
    public function get_Nome_loja(){
        return($this->nome_loja);
    }

    public function set_Nome_loja($Nome_loja){
        $this->nome_loja = $Nome_loja;
    }

    public function get_Nome_completo(){
        return($this->nome_completo);
    }

    public function set_Nome_completo($Nome_completo){
        $this->nome_completo = $Nome_completo;
    }

    public function get_Descricao_loja(){
        return($this->descricao_loja);
    }

    public function set_Descricao_loja($Descricao_loja){
        $this->descricao_loja = $Descricao_loja;
    }

    public function get_Cnpj(){
        return($this->cnpj);
    }

    public function set_Cnpj($Cnpj){
        $this->cnpj = $Cnpj;
    }

    public function get_Data(){
        return($this->data);
    }

    public function set_Data($Data){
        $this->data = $Data;
    }

    public function get_Telefone(){
        return($this->telefone);
    }

    public function set_Telefone($Telefone){
        $this->telefone = $Telefone;
    }

    public function get_Setor(){
        return($this->setor);
    }

    public function set_Setor($Setor){
        $this->setor = $Setor;
    }

    public function get_Email(){
        return($this->email);
    }

    public function set_Email($Email){
        $this->email = $Email;
    }

    public function get_Senha(){
        return($this->senha);
    }

    public function set_Senha($Senha){
        $this->senha = $Senha;
    }

    public function get_Foto(){
        return($this->foto);
    }

    public function set_Foto($Foto){
        $this->foto = $Foto;
    }
}
?>