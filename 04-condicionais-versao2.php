<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais versão 2</title>

    <style>
        .aprovado { color: blue; }
        .reprovado { color: red;}
        .recuperacao { color: orangered;}

    </style>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php 
    $numero = 5;
    $outroNumero = 1;

    /* Condicional simples somente com if */
    if ($numero > $outroNumero) {
        ?>
        <p><?=$numero?> é maior que <?=$outroNumero?>!</p>
        
    <?php
    }


    ?>
<h2>Composta</h2>
<?php 
    $nota1 = 8;
    $nota2 = 4;
    $media = ($nota1 + $nota2) / 2;
?>
  <p>Média: $media</p>
<?php
if( $media >= 7) {
    ?>
    <p class ='aprovado'>Aprovado</p> 
    <?php
} else { 
    ?>
   <p class="reprovado"> Reprovado </p> 
<?php
}
?>

<h2>Encadeada</h2>
<?php
if ($media >=7) { ?>
    <p class = "aprovado">Aprovado</p>;
    <?php
} elseif ($media >= 6 && ($media < 7 )){
    ?>
    <p class = "recuperacao">Recuperação</p>
    <?php   
} else {
    ?>
    <p class = "reprovado"> Reprovado </p>
<?php
}
?>

<h2>switch/case</h2>

<?php
$opcao = 2;

switch($opcao){
    case 1: $assunto = "Reclamação"; break;
    case 2: $assunto = "Elogio"; break;
    case 3: $assunto = "Informações"; break;
    default:$assunto = "Falar com um atendente"; break;
}
?>

<p> <?=$assunto?></p>


</body>
</html>

