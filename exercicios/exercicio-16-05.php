<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio para entrega</title>
</head>
<body>
    <h1>Exercicio para entrega dia 16/05</h1>
    <hr>

     <!--     Faça a programação de processamento do formulário considerando o envio/recebimento dos dados via POST. Os dados devem ser exibidos no HTML usando as tags de sua preferência (parágrafos, listas, divs etc).                  -->

     <?php
     if ( ! empty( $_POST ) ){
         $nome = $_POST['nome-produto'];
         $fabricantes = $_POST['fabricantes'];
         $preco = $_POST['preco'];
         $quantidade = $_POST['quantidade'];
         $descricao = $_POST['mensagem'];
         
     }
     
     ?>
     
     
     <?php
     if( empty($_POST["nome-produto"]) || empty($_POST["fabricantes"]) || empty($_POST["preco"]) || empty($_POST["quantidade"]) || empty($_POST["mensagem"]) ){?>
         <p style="color:red"><b> Dados Incompletos.</p>
     <?php
     }else {?>
         <p style="color:green">Seus dados foram enviados corretamente!!</p>
     <?php
     }  
     ?>
     
         
         <ul>
             <li>Nome do produto: <?=$nome?> </li>
             <li>Fabricante do produto: <?=$fabricantes?> </li>
             <li>preço do produto: <?=$preco?></li>
             <li>Quantidade de produtos: <?=$quantidade?> </li>
             <li>Descrição do produto: <?=$descricao?> </li>
         </ul>
         
      <!-- Desafio: pesquise sobre funções de filtros de sanitização e validação de campos de formulário e tente aplicar pelo menos um desses filtros em algum campo.  -->
     
     <?php
       $nome = filter_input(INPUT_POST, 'nome-produto', FILTER_SANITIZE_SPECIAL_CHARS);  
       $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS); 
       ?>
       <!-- Demais campos não é necessário utilizar Filter_Sanitize, por aceitar somente números -->
    
    <a href="exercicio-para-entrega.php">Voltar</a>
</body>
</html>