<?php
    
namespace Projeto2\Clientes;

abstract class Cliente{
    private $id;
    private $TipoCliente;
    private $Nome;
    private $idade;
    private $sexo;
    private $endereco;
    private $telefone;

    

  public function __construct ($id,$TipoCliente,$Nome,$idade,$sexo,$endereco,$telefone){
        $this->id=$id;
        $this->TipoCliente=$TipoCliente;
        $this->Nome=$Nome;
     $this->idade=$idade;
     $this->sexo=$sexo;
     $this->endereco=$endereco;
     $this->telefone=$telefone;
  

    }   

     public function getid(){
        return $this->id;
    }
    public function setid($id){
        

        $this->id= $id;
    }
    public function getTipoCliente(){
        return $this->TipoCliente;
    }
    public function setTipoClientee($TipoCliente){
        

        $this->TipoCliente= $TipoCliente;
    }

 public function getNome(){
        return $this->Nome;
    }
    public function setNome($Nome){
        

        $this->nome= $Nome;
    }
   
     public function getidade(){
        return $this->idade;
    }
    public function setidade($idade){
        

        $this->idade= $idade;
    }
     public function getsexo(){
        return $this->sexo;
    }
    public function setsexo($sexo){
        

        $this->sexo= $sexo;
    }


     public function getendereco(){
        return $this->endereco;
    }
    public function setendereco($endereco){
        

        $this->endereco= $endereco;
    }


     public function gettelefone(){
        return $this->telefone;
    }
    public function settelefone($telefone){
        

        $this->telefone= $telefone;
    }

   

   
}






