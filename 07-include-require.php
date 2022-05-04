<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
</head>
<body>
    <h1>Inclusão de recursos</h1>
    <hr>



<h2> <?=ESCOLA?> </h2>
<p>Estamos no curso de <?=$curso?></p>

<ul>
<?php foreach($tecnologias as $tecnologia){ ?>
    <li>
        <?=$tecnologia?>
   </li>
   <?php } ?>
</ul>

<p>Chapolin Colorado tem 20 anos e é <b><?=verificarIdade(20)?></b> de idade</p>
<p>Chaves tem 8 anos e é <b><?=verificarIdade(8)?></b> de idade</p>

<hr>

<article>
    <h2>Conteudo Qualquer ...</h2>
    <?php include "textos.php" ?> <!-- Caso estivesse com o require seria menos permissivo por que ele não perite erros e para as demais aplicações posteriores -->
</article>

<hr>

<h2>Qualquer outra coisa ...</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore minus sed labore ut quos aperiam recusandae qui libero esse, veniam eligendi, mollitia cumque. Voluptatibus enim id quod quibusdam modi.</p>



</body>
</html>