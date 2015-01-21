<div class="span10"> <div class="well"> <h1> Listagem de clientes </h1> 
 
 <hr /> <p>

<?php
session_start();
    

require_once("../Autoload.php");
use Projeto2\Clientes\Types\ClientePF;
use Projeto2\Clientes\Types\ClientePJ;



$Clientes=array(
$cliente1=new ClientePF(1,"Pessoa Física","chris",27,"masculino","maua",45133703,"232.123.321-23",5,"avenida barão"),
$cliente2=new ClientePF(2,"Pessoa Física","Maria",28,"feminino","maua",26298381,"312.231.231-32",3,"vila assis"),
$cliente3=new ClientePF(3,"Pessoa Física","Ruroune kenshi",22,"masculino","santos",233431223,"341.213.454-53",4,"pedrodo"),
$cliente4=new ClientePF(4,"Pessoa Física","Ryugi",23,"masculino","santo andre",4545454232,"654.564.233-21",5,"Hayde"),
$cliente5=new ClientePF(5,"Pessoa Física","joao",25,"masculino","sao paulo",1232314132,"425.123.341-64",3,"Rua das laranjeiras"),
$cliente6=new ClientePJ(6,"Pessoa Juridica","Empresa 1",22,"masculino","brasilia",433431223,"222.432.123-32",3,"rua 2"),    
$cliente7=new ClientePJ(7,"Pessoa Juridica","Empresa 2",22,"masculino","santos",233431223,"213.212.546-33",4,"avenida da liberdade"),
$cliente8=new ClientePJ(8,"Pessoa Juridica","Empresa 3",32,"masculino","são caetano",933431223,"654.325.323-23",5,"avenida da saldade"),
$cliente9=new ClientePJ(9,"Pessoa juridica","Empresa 4",16,"masculino","maua",633431223,"827.938.927-22",3,"rua 3"),
$cliente10=new ClientePJ(10,"Pessoa juridica","Empresa 5",42,"masculino","sao bernado",833431223,"878.245.321-32",4,"rua 10"));


$_SESSION['clientes'] =$Clientes;


$arraybyorden=$_SESSION['clientes'];

$order = filter_input(INPUT_GET, "order");

if(isset($order) && $order == 'desc')
   {
    $_SESSION['ordem'] ="desc";
   		krsort($arraybyorden);
        
	}



if(isset($_GET['order']) && $_GET['order'] == 'asc')
    {
         $_SESSION['ordem'] ="asc";
   		ksort($arraybyorden);
        		
	}


   
 function adicionadorlistaclientesacentendes($arraybyorden)
     {
  if( isset( $_SESSION['ordem']))
  {

     if(  $_SESSION['ordem'] =="desc")
            {
         	krsort($arraybyorden);
           
        foreach ($arraybyorden as $value) 
        {                      
             echo "<a href='ListaClientes?id=" . $value->getid() . "'>" . $value->getNome() . "</a>";     
             echo "<br/>";    
        }

            }
     if( $_SESSION['ordem'] =="asc")
       {
         
         ksort($arraybyorden);
            
             foreach ($arraybyorden as $value) 
            {
             echo "<a href='ListaClientes?id=" . $value->getid() . "'>" . $value->getNome() . "</a>";     
             echo "<br/>";    
            }
        }

  }
         

}
      adicionadorlistaclientesacentendes($arraybyorden);

      $id = filter_input(INPUT_GET, "id");

 if(isset($id))
 {
       if($id)
       {
           if($id != NULL)
           {
             $id_cliente = $id;
               foreach($arraybyorden as $cliente)
                   {
                if($id_cliente == $cliente->getid())
                     {
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
              if(get_class($cliente) == 'Projeto2\Clientes\Types\ClientePF'){
                  echo "CPF: " . $cliente->getcpf();
              }
          if(get_class($cliente) == 'Projeto2\Clientes\Types\ClientePJ'){
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
            
         
             if($id){
                      echo  "<a href='ListaClientes' class='btn btn-primary btn-xs'>";
						echo	"<i class='glyphicon glyphicon-arrow-up'>"."</i>";
                            echo "Limpar";
					echo
                    	"</a>";
                     
                                       }       
               
                          ?>
					</th>
 </div> 
 </div>


    
