##0.1.x##

##Cadastro de clientes##
>Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endere�o, etc.

>Crie um array de objetos de clientes, com 10 clientes dentro.

>Crie uma p�gina e fa�a a listagem geral dos clientes. Quando clicar sobre o cliente, voc� dever� mostrar os dados espec�ficos >do cliente selecionado.

>Nessa listagem voc� tamb�m dever� ter a op��o de ordenar os clientes pelo seu �ndice de forma ascendente e descendente.

>N�o se esque�a de caprichar na interface utilizando o twitter bootstrap.





##Tipos de clientes##

>Agora que voc� j� tem seu cadastro de cliente, voc� dever� tamb�m aceitar clientes Pessoa Jur�dica em sua listagem.

>N�o se esque�a de trabalhar com os modificadores de acesso e os getters e setters.

>No momento da listagem dos clientes, voc� deve indicar em uma das colunas se o cliente � pessoa f�sica ou jur�dica.

>Ambos os tipos devem implementar uma interface onde seja poss�vel classificar o grau de import�ncia do cliente para a empresa (ex: cliente 1,2,3,5 estrelas).

>Voc� tamb�m ter� a op��o de criar clientes que utiliz�o endere�o espec�fico de cobran�a, nesse caso, crie uma interface para que esses tipos de clientes possam implementar.





##Refatora��o##

>Refatore as classes utilizadas de seu projeto para que as mesmas trabalhem com namespaces.

>Verifique se dentro de seu projeto h� a necessidade de se trabalhar com classes abstratas.

>N�o se esque�a de criar a estrutura de diret�rios, nome de arquivos e classes seguindo a PSR-0 (www.php-fig.org).

>Fa�a a implementa��o do autoload para que voc� n�o precise mais trabalhar com require/include para a chamada de suas classes.

>Deixe todo o fonte de sua aplica��o no mesmo n�vel que o DocumentRoot do servidor web. Deixe a pasta que est� vis�vel para web (seu DocumentRoot) apenas com o index.php e os demais assets(css, javascript e imagens).


##Persistência de dados##

>Nessa última fase do projeto, você, ao invés de trabalhar com arrays, você deverá persistir essas informações no banco de dados.

>Em suas fixtures, você deverá criar uma classe com métodos específicos para persistirem dados no banco. Você terá que injetar no construtor dessa classe um objeto PDO (somente PDO).

>Crie um método chamado persist dentro dessa mesma classe; esse método deverá receber como dependência um objeto do tipo Cliente.

>E para finalizar, crie um método chamado flush. Quando o método for executado, os dados devem ser persistidos no banco de dados.

>Perceba que a responsabilidade de gravar os dados no banco são especificamente dessa classe, sem adicionar nenhuma outra responsabilidade a ela.

>Boa sorte!

>PS: Depois disso implementado, a listagem dos clientes devem ser chamadas a partir do banco de dados e não mais de um conjunto de arrays.



>O projeto precisa ser execultado por um servidor com a pasta publica,nele voc� podera encontrar uma listagem de clientes onde podera ser ordenada >de forma acendende ou descendente....foi implantado classes e o autoload...
>Deve se criar um banco chamado teste e execultar as funções da fixture que estão comentadas no listaClientes.php.....