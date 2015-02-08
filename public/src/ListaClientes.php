<div class="span10">
    <div class="well"><h1> Listagem de clientes </h1>

        <hr/>
        <p>

            <?php
            session_start();


            require_once("../Autoload.php");
            use Projeto2\Clientes\Types\ClientePF;
            use Projeto2\Clientes\Types\ClientePJ;
            use Projeto2\BD\conexaoDB;


            $conectar = new ConexaoDB("mysql:host=localhost;charset=utf8", "teste", "root", "root");

            $pdo = $conectar->getConnection();


            $listaPF = $pdo->query("SELECT * FROM clientepf  ")->fetchAll(\PDO::FETCH_ASSOC);
            $listaPJ = $pdo->query("SELECT * FROM clientepj  ")->fetchAll(\PDO::FETCH_ASSOC);


            $clientes = array_merge($listaPF, $listaPJ);


            $_SESSION['clientes'] = $clientes;


            $arraybyorden = $_SESSION['clientes'];


            $order = filter_input(INPUT_GET, "order");

            if (isset($order) && $order == 'desc') {
                $_SESSION['ordem'] = "desc";
                krsort($arraybyorden);

            }


            if (isset($_GET['order']) && $_GET['order'] == 'asc') {
                $_SESSION['ordem'] = "asc";
                ksort($arraybyorden);

            }


            function adicionadorlistaclientesacentendes($arraybyorden)
            {
                if (isset($_SESSION['ordem'])) {

                    if ($_SESSION['ordem'] == "desc") {
                        krsort($arraybyorden);

                        foreach ($arraybyorden as $value) {
                            echo "<a href='ListaClientes?id=" . $value['id'] . "'>" . $value['Nome'] . "</a>";
                            echo "<br/>";
                        }

                    }
                    if ($_SESSION['ordem'] == "asc") {

                        ksort($arraybyorden);

                        foreach ($arraybyorden as $value) {
                            echo "<a href='ListaClientes?id=" . $value['id'] . "'>" . $value['Nome'] . "</a>";
                            echo "<br/>";
                        }
                    }

                }


            }

            adicionadorlistaclientesacentendes($arraybyorden);

            $id = filter_input(INPUT_GET, "id");

            if (isset($id)) {
                if ($id) {
                    if ($id != NULL) {
                        $id_cliente = $id;
                        foreach ($arraybyorden as $cliente) {
                            if ($id_cliente == $cliente['id']) {
                                echo "Importancia Do Cliente :" . $cliente['starts'];
                                echo "<br/>";
                                echo "Tipo De Cliente :" . $cliente['TipoCliente'];
                                echo "<br/>";
                                echo "Nome :" . $cliente['Nome'];
                                echo "<br/>";
                                echo "Idade :" . $cliente['idade'];
                                echo "<br/>";
                                echo "Sexo :" . $cliente['sexo'];
                                echo "<br/>";
                                if (array_key_exists("cpf", $cliente)) {
                                    echo "CPF: " . $cliente['cpf'];
                                }
                                if (array_key_exists("cnpj", $cliente)) {
                                    echo "CNPJ: " . $cliente['cnpj'];
                                }
                                echo "<br/>";
                                echo "Endereço :" . $cliente['endereco'];
                                echo "<br/>";
                                echo "Telefone:" . $cliente['telefone'];
                                echo "<br/>";
                                echo "Endereço de cobrança:" . $cliente['InterfaceCobranca'];
                            }
                        }
                    }
                }
            }

            ?>

        </p>
        <hr/>

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


                        if ($id) {
                            echo "<a href='ListaClientes' class='btn btn-primary btn-xs'>";
                            echo "<i class='glyphicon glyphicon-arrow-up'>" . "</i>";
                            echo "Limpar";
                            echo
                            "</a>";

                        }

                        ?>
                    </th>
        </div>
    </div>


    
