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
            use Projeto2\Clientes\Fixture;
            use Projeto2\Clientes\ConsultaClientePF;

            $conectar = new ConexaoDB();

            $fixture = new Fixture($conectar);

            $fixture->getConexao()->ConexaoDB();

            //$fixture->DeletandoTabela();
            //$fixture->CriarTabela();
            //$fixture->flush();

            $consulta = new ConsultaClientePF($conectar);


            $conectar = new ConexaoDB();

            $fixture = new Fixture($conectar);

            $fixture->getConexao()->ConexaoDB();

            $consulta = new ConsultaClientePF($conectar);

            $listaPF = $consulta->getConexao()->conexaoDB()->query("SELECT * FROM clientepf  ")->fetchAll();
            $listaPJ = $consulta->getConexao()->conexaoDB()->query("SELECT * FROM clientepj  ")->fetchAll();


            $fixture->Persist(new ClientePF($listaPF[0][0], $listaPF[0][1], $listaPF[0][2], $listaPF[0][3], $listaPF[0][4], $listaPF[0][5],
                $listaPF[0][6], $listaPF[0][7], $listaPF[0][8], $listaPF[0][9]),

                new ClientePF($listaPF[1][0], $listaPF[1][1], $listaPF[1][2], $listaPF[1][3], $listaPF[1][4], $listaPF[1][5],
                    $listaPF[1][6], $listaPF[1][7], $listaPF[1][8], $listaPF[1][9]),

                new ClientePF($listaPF[2][0], $listaPF[2][1], $listaPF[2][2], $listaPF[2][3], $listaPF[2][4], $listaPF[2][5],
                    $listaPF[2][6], $listaPF[2][7], $listaPF[2][8], $listaPF[2][9]),

                new ClientePF($listaPF[3][0], $listaPF[3][1], $listaPF[3][2], $listaPF[3][3], $listaPF[3][4],
                    $listaPF[3][5], $listaPF[3][6], $listaPF[3][7], $listaPF[3][8], $listaPF[3][9]),

                new ClientePF($listaPF[4][0], $listaPF[4][1], $listaPF[4][2], $listaPF[4][3], $listaPF[4][4], $listaPF[4][5],
                    $listaPF[4][6], $listaPF[4][7], $listaPF[4][8], $listaPF[4][9]),

                new ClientePJ($listaPJ[0][0], $listaPJ[0][1], $listaPJ[0][2], $listaPJ[0][3], $listaPJ[0][4], $listaPJ[0][5], $listaPJ[0][6],
                    $listaPJ[0][7], $listaPJ[0][8], $listaPJ[0][9]),

                new ClientePJ($listaPJ[1][0], $listaPJ[1][1], $listaPJ[1][2], $listaPJ[1][3], $listaPJ[1][4], $listaPJ[1][5],
                    $listaPJ[1][6], $listaPJ[1][7], $listaPJ[1][8], $listaPJ[1][9]),

                new ClientePJ($listaPJ[2][0], $listaPJ[2][1], $listaPJ[2][2], $listaPJ[2][3], $listaPJ[2][4], $listaPJ[2][5], $listaPJ[2][6],
                    $listaPJ[2][7], $listaPJ[2][8], $listaPJ[2][9]),

                new ClientePJ($listaPJ[3][0], $listaPJ[3][1], $listaPJ[3][2], $listaPJ[3][3], $listaPJ[3][4], $listaPJ[3][5], $listaPJ[3][6],
                    $listaPJ[3][7], $listaPJ[3][8], $listaPJ[3][9]),

                new ClientePJ($listaPJ[4][0], $listaPJ[4][1], $listaPJ[4][2], $listaPJ[4][3], $listaPJ[4][4], $listaPJ[4][5], $listaPJ[4][6],
                    $listaPJ[4][7], $listaPJ[4][8], $listaPJ[4][9])

            );


            $Clientes = array(
                $cliente1 = $fixture->getCliente1(),
                $cliente2 = $fixture->getCliente2(),
                $cliente3 = $fixture->getCliente3(),
                $cliente4 = $fixture->getCliente4(),
                $cliente5 = $fixture->getCliente5(),
                $cliente6 = $fixture->getCliente6(),
                $cliente7 = $fixture->getCliente7(),
                $cliente8 = $fixture->getCliente8(),
                $cliente9 = $fixture->getCliente9(),
                $cliente10 = $fixture->getCliente10()

            );


            $_SESSION['clientes'] = $Clientes;


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
                            echo "<a href='ListaClientes?id=" . $value->getid() . "'>" . $value->getNome() . "</a>";
                            echo "<br/>";
                        }

                    }
                    if ($_SESSION['ordem'] == "asc") {

                        ksort($arraybyorden);

                        foreach ($arraybyorden as $value) {
                            echo "<a href='ListaClientes?id=" . $value->getid() . "'>" . $value->getNome() . "</a>";
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
                            if ($id_cliente == $cliente->getid()) {
                                echo "Importancia Do Cliente :" . $cliente->getstarts();
                                echo "<br/>";
                                echo "Tipo De Cliente :" . $cliente->getTipoCliente();
                                echo "<br/>";
                                echo "Nome :" . $cliente->getNome();
                                echo "<br/>";
                                echo "Idade :" . $cliente->getidade();
                                echo "<br/>";
                                echo "Sexo :" . $cliente->getsexo();
                                echo "<br/>";
                                if (get_class($cliente) == 'Projeto2\Clientes\Types\ClientePF') {
                                    echo "CPF: " . $cliente->getcpf();
                                }
                                if (get_class($cliente) == 'Projeto2\Clientes\Types\ClientePJ') {
                                    echo "CNPJ: " . $cliente->getcnpj();
                                }
                                echo "<br/>";
                                echo "Endereço :" . $cliente->getendereco();
                                echo "<br/>";
                                echo "Telefone:" . $cliente->gettelefone();
                                echo "<br/>";
                                echo "Endereço de cobrança:" . $cliente->getInterfaceCobranca();
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


    
