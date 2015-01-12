<?php
require_once("Cliente.php");
 
require_once("InterfaceCobranca.php");
require_once("Interfacestarts.php");
class ClientePF extends Cliente implements Interfacestarts,InterfaceCobranca{
    


   private $cpf;
   private $starts;
   private $InterfaceCobranca;
   function __construct($id,$TipoCliente,$Nome,$idade,$sexo,$endereco,$telefone,$cpf,$starts,$InterfaceCobranca){
    parent::__construct($id,$TipoCliente,$Nome,$idade,$sexo,$endereco,$telefone);

    $this->cpf = $cpf;
      $this->starts = $starts;
       $this->InterfaceCobranca = $InterfaceCobranca;
   }
   
   

    public function getCpf(){
	return $this->cpf;
	}

	public function setCpf($cpf){
	$this->cpf = $cpf;
	return $this;
}
  public function getstarts(){
        return $this->starts;
    }
    public function setStarts($starts){
        

        $this->starts= $starts;
        	return $this;
    }
      public function getInterfaceCobranca(){
        return $this->InterfaceCobranca;
    }
    public function setInterfaceCobranca($InterfaceCobranca){
        

        $this->InterfaceCobranca= $InterfaceCobranca;
        	return $this;
    }

}





?>

