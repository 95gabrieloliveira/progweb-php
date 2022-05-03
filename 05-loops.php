<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1> Loops (ou laços de repetição)</h1>
    <hr>

    <h2>while (enquanto)</h2>
<?php
$i = 1;
while($i <= 3){ // ou $i <4
    ?>
    <p><?=$i?> </p>
<?php
    $i++; // atualizar a variável de controle para n travar
}

?>

<h2>Do/while (faça/enquanto)</h2>
<?php
$j = 1;
do { 
?>
    <div style="border: solid 1px">
        <h3>Exemplo</h3>
    </div>
    <?php
$j++;
} while($j <=5);
?>

<h2>For</h2>
<?php
// Inicialização; condição; atualização
for ($i =1; $i <=3; $i++ ){
?>
<p>Valor de i é <b><?=$i?></b></p>
<?php
}
?>

<h2>Exercício Array e Loop</h2>
<p>Crie um array contendo os nomes dos 12 meses do ano</p>
<p>Usando um loop, faça o nome dos meses aparecer em uma lista ordenada</p>


<ol>
<?php

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

$k = 0 ;
do { 
?>
    <div>
       
           <li>
            <?=$meses[$k]?>
           </li>
       
    </div>
    <?php
$k++;
} while($k <12);
?>
</ol>

<!-- ****** CORREÇÃO ********************* -->

<!-- // Lista OL Iniciada e termina independentemente do PHP -->
<ol> <!-- Ideal colocar o for antes do for para a contagem acontecer -->
<?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    for($i = 0; $i < count($meses); $i++) {
        /* Itens da lista dependem do PHP For */
        ?>
        
            <li> <?=$meses[$i]?></li>
       
<?php    
    }

?>
 </ol>
<!-- Lista OL e LI inicia e termina dependendo do PHP -->

<?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
// Lista OL Iniciada e termina independentemente do PHP
    for($i = 0; $i < count($meses); $i++) {
        /* Itens da lista dependem do PHP For */
        ?>
        <ol> <!-- Errada -->
            <li> <?=$meses[$i]?></li>
        </ol>
<?php    
    }

?>


<h2>Foreach (Para cada)</h2>
<!-- Exclusivo para arrays -->
    <ol>
        <?php foreach($meses as $mes){ ?> <!-- "as" mesma coisa que como -->
        <li><?=$mes?></li>
       <?php }        
        ?>
    </ol>


<?php
// Array associativo (Formados por partes de chave =>valor)
   
    $curso= [
        //chave = (key)  => Valor (value)
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5
    ];

/*     foreach ($curso as $key => $value) {
        ?>
        <p><?=$value?> </p>
    
    <?php
    } */

    foreach ($curso as $chaves => $valores) {
        ?>
        <p><?=$valores?> </p>
    
    <?php
    }


?>
</body>
</html>