<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Exercicio 26 de Março</h1>

    <?php
    
    $nome = "Gabriel";
    $cidade = "São Paulo";
    /* $data = "26/04/2022"; Segunda opção abaixo */ 
    $data = date("d/m/Y"); /* Y maiusculo aparece 2022 minusculo 22 */
/*     $idade = 26  Segunda opção abaixo */
    $idade = date ("Y") - 1995;

    /* echo "<p>$nome</p>";
    echo "<p>$cidade</p>";
    echo "<p>$data</p>";
    echo "<p>$idade</p>"; *//* Echo pode ser substituido ex <?=$idade?> */
    ?>


    <p> Hoje é <?=$data?>. <?=$nome?> tem <?=$idade?> anos e nasceu na cidade de <?=$cidade?> </p>

</body>
</html>