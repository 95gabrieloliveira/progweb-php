<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>

<h1>Processamento de dados</h1>
    <hr>

    <?php
  
   /*  echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */
      // Capturando os dados enviados a partir do forulário
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $idade = $_POST["idade"];
      /* Se existir o $_POST["interesses"] o que for selecionado fica na variavel. Caso contário,
      deixe um array vazio na variavel.*/
      $interesses = $_POST["interesses"] ?? [];
      /* ?? chamase operador de coalescencia nula */
      $informativos = $_POST["informativos"];
      $mensagem = $_POST["mensagem"];
    ?>

    <h2> Dados</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <!-- Aqui usamos o operador de negação (!) para inverter a logica da função empty" -->
        <!-- Se interesses Não etiver vazio  -->
        <?php if( !empty($interesses)){?>
            <!-- Faça isso abaixo -->
        <li>Interesses: 
            <ul>
            <?php foreach ($interesses as $interesse){?>
                <li> <?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
       <?php }?> 
        <li>Informativos: <?=$informativos?></li>
        <li>Mensagem: <?=$mensagem?></li>
     </ul>
</body>
</html>