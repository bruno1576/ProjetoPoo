<?php

class Clientesarray {
  public $items = array();
  public $count = 0;

  

  public function add($value) {
    $this->items[$this->count++] = $value;
  }




 public function adicionadorlistaclientesacentendes($arraybyorden)
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
if( $_SESSION['ordem'] =="asc"){
         
         ksort($arraybyorden);
            
         foreach ($arraybyorden as $value) {
          echo "<a href='ListaClientes?id=" . $value->getid() . "'>" . $value->getNome() . "</a>";     
          echo "<br/>";    
     }


  }

  }
         

     }
     public function botaovoltarinfo(){
         
             if(isset($_GET['id'])){
                      echo  "<a href='ListaClientes' class='btn btn-primary btn-xs'>";
						echo	"<i class='glyphicon glyphicon-arrow-up'>"."</i>";
                            echo "Limpar";
					echo
                    	"</a>";
 
                                       }       

     }
}     


?>