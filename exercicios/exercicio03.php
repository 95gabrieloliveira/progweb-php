<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <h1>Exercicio 03</h1>
    <hr>

<?php

/* Crie o arquivo exercicio03.php e programe nele recursos que permitam avaliar o valor de um salário e calcular um novo valor de salário baseado nos seguintes critérios:

    Se salário menor que 500, calcule um aumento de 15%
    Senão, se salário menor ou igual a 1000, calcule um aumento de 10%
    Senão calcule um aumento de 5%

Mostre no HTML uma mensagem informando o valor do salário antigo (antes do reajuste) e do novo salário (após o reajuste).

DESAFIO: existe uma função nativa do PHP que permite mudar a forma como números são exibidos na tela. Descubra qual é esta função e a utilize para exibir os salários com o sinal de "." para separador de milhar e "," para separador de casa decimal com duas casas decimais. */

$salario = 400;
$reajuste = ($salario);


    if($salario <=500){
        echo  $reajuste * 1.15;
    } elseif ($salario <= 1000) {
       echo  $reajuste * 1.10;
    } else {
      echo "<p>$reajuste * 1.05</p>";
   }

 

   ?>

<!-- Correção/atualização -->
<h2>Correção</h2>
<?php

    $salario = 500; // Entrada de qualquer valor

    // Declarar esta váriavel inicialmente é algo opcional
    $novoSalario = 0;

    if($salario < 500){
        $novoSalario = $salario *1.5;
    } elseif ($salario <= 5000) {
        $novoSalario = $salario *1.10;
    } else {$novoSalario = $salario *1.05;}

    echo "Salário antigo $salario e Salário novo $novoSalario";
?>

<!-- 
    number_format (
        valor,
        quantidade de casas decimais,
        "separador de casa decimais"
        "separador de milhar"
    )
 -->

<!-- Recomendado utilizar o HTML para facilitar o Back-End -->
<p>R$ <?=number_format($salario,2,",",".")?> e 
<?=number_format($novoSalario,2,",",".")?></p>


</body>
</html>