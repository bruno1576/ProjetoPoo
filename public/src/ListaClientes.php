<div class="span10"> <div class="well"> <h1> Listagem de clientes </h1> 
 
 <hr /> <p>


<?php
    session_start();
    
   
    
      require_once("../src/Clientesarray.php");
       require_once("../src/ClientePF.php");
      require_once("../src/ClientePJ.php");
       require_once("../src/InterfaceCobranca.php");
require_once("../src/Interfacestarts.php");
     

if($_GET)
{
    if(isset($_GET['id'])){
    $idcliente=$_GET['id'];
    }
}




$cliente1=new ClientePF(1,"Pessoa Física","chris",27,"masculino","maua",45133703,"232.123.321-23",5,"avenida barão");
$cliente2=new ClientePF(2,"Pessoa Física","Maria",28,"feminino","maua",26298381,"312.231.231-32",3,"vila assis");
$cliente3=new ClientePF(3,"Pessoa Física","Ruroune kenshi",22,"masculino","santos",233431223,"341.213.454-53",4,"pedrodo");
$cliente4=new ClientePF(4,"Pessoa Física","Ryugi",23,"masculino","santo andre",4545454232,"654.564.233-21",5,"Hayde");
$cliente5=new ClientePF(5,"Pessoa Física","joao",25,"masculino","sao paulo",1232314132,"425.123.341-64",3,"Rua das laranjeiras");
$cliente6=new ClientePJ(6,"Pessoa Juridica","Empresa 1",22,"masculino","brasilia",433431223,"222.432.123-32",3,"rua 2");
$cliente7=new ClientePJ(7,"Pessoa Juridica","Empresa 2",22,"masculino","santos",233431223,"213.212.546-33",4,"avenida da liberdade");
$cliente8=new ClientePJ(8,"Pessoa Juridica","Empresa 3",32,"masculino","são caetano",933431223,"654.325.323-23",5,"avenida da saldade");
$cliente9=new ClientePJ(9,"Pessoa juridica","Empresa 4",16,"masculino","maua",633431223,"827.938.927-22",3,"rua 3");
$cliente10=new ClientePJ(10,"Pessoa juridica","Empresa 5",42,"masculino","sao bernado",833431223,"878.245.321-32",4,"rua 10");

$Clientes = new Clientesarray ();
$Clientes->add($cliente1);
$Clientes->add($cliente2);
$Clientes->add($cliente3);
$Clientes->add($cliente4);
$Clientes->add($cliente5);

$Clientes->add($cliente6);
$Clientes->add($cliente7);
$Clientes->add($cliente8);
$Clientes->add($cliente9);
$Clientes->add($cliente10);

$_SESSION['clientes'] = $Clientes->items;
$arraybyorden=$_SESSION['clientes'];


if(isset($_GET['order']) && $_GET['order'] == 'desc'){
    $_SESSION['ordem'] ="desc";
   		krsort($arraybyorden);
        
	}
    if(isset($_GET['order']) && $_GET['order'] == 'asc'){
         $_SESSION['ordem'] ="asc";
   		ksort($arraybyorden);
        		
	}
    $ordenar= new Clientesarray ();
    $ordenar-> adicionadorlistaclientesacentendes($arraybyorden);    

    
    if(isset($_GET['id'])){
       if($_GET){
if($_GET['id'] != NULL){
    $id_cliente = $_GET['id'];
    foreach($arraybyorden as $cliente){
        if($id_cliente == $cliente->getid()){
            echo "Importancia Do Cliente :".$cliente->getstarts();
            echo "<br/>";
            echo "Tipo De Cliente :".$cliente->getTipoCliente();
            echo "<br/>";
            echo "Nome :".$cliente->getNome();
            echo "<br/>";
            echo "Idade :".$cliente->getidade();
              echo "<br/>";
            echo "Sexo :".$cliente->getsexo();
              echo "<br/>";
              if(get_class($cliente) == 'ClientePF'){
                  echo "CPF: " . $cliente->getcpf();
              }
          if(get_class($cliente) == 'ClientePJ'){
                  echo "CNPJ: " . $cliente->getcnpj();
              }
              echo "<br/>";
            echo "Endereço :".$cliente->getendereco();
             echo "<br/>";
            echo "Telefone:".$cliente->gettelefone();
             echo "<br/>";
            echo "Endereço de cobrança:".$cliente->getInterfaceCobranca();
        }
    }
}
       }
    }

?>
    
       </p> <hr />	
  
    <div class="container">
			<table class="table table-hover">
				<tr>
					<th>
						<a href="ListaClientes?order=asc" class="btn btn-primary btn-xs">
							<i class="glyphicon glyphicon-arrow-down"></i> Acendente
						</a>
                         <a href="ListaClientes?order=desc" class="btn btn-primary btn-xs">
							<i class="glyphicon glyphicon-arrow-up"></i>
                             Decendente
						</a>
                        <?php 
              $botaovoltar=new Clientesarray();
              $botaovoltar->botaovoltarinfo();         
                          ?>
					</th>
 </div> 
 </div>


    
