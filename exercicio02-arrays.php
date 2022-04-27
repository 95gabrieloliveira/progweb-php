<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-02</title>
</head>
<body>
    <!-- Crie um arquivo chamado exercicio02-arrays.php.

Nele, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome, idade, email e sexo.

Em seguida, mostre os valores de nome, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).

Desafio: destaque estes blocos de conteúdo usando CSS. -->

<?php

/* Array Numerico */
$nome = ["Joyce", "Pedro"];

$idade = [20,12];

$email = ["joyce123@hotmail.com", "pedrinho@hotmail.com"];


$sexo = ["Feminino","Masculino"];
?>

<section>
    <h2>O funcionário <?=$nome[1]?> possui o email <?=$email[1]?> e tem <?=$idade[1]?> anos</h2> 

</section>

<!-- Array Associativo -->
<?php 
    $pessoas= [
        "nome" => "Joyce",
        "idade" => 24,
        "e-mail" => "joyce123@hotmail.com",
        "sexo" => "Feminino"
    ];
?>
 
<article>
  
  <p> A funcionária <?=$pessoas["nome"]?> possui o email <?=$pessoas["e-mail"]?> e tem <?=$pessoas["idade"]?> anos</h2> </p> 
    
</article>

<style>
    section,article {
        color: red;
        font-size: solid 1px 2px;

    }

    article {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    section {
        font-family: 'Times New Roman', Times, serif
    }

</style>

</body>
</html>