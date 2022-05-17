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

    <form action="exercicio-para-entrega.php" method="POST">
    <p>
        <label for="nome-produto">Nome do Produto:</label>
        <input required type="text" name="nome-produto" id="nome-produto">
    </p>

    <!-- Transformar em SELECT com pelo menos 4 nome de fabricantes -->
    <?php
        $fabricantes = ["LG", "Microsoft", "Acer", "Samsung"];
    ?>

    <div> 
            <p>Fabricantes:

            <select name="fabricantes">
                <?php foreach ($fabricantes as $fabricante) { ?>
                    <option value="<?= $fabricante; ?>"> <?=$fabricante;?> </option>
                    <?php } ?>
           
            </select> 
        </p>
            
    </div>
<!-- Preços campo de número com valor mínimo de 100 e máximo de 10000, além de suporte à 2 casas decimais para os centavos  -->


    <p>
        <label for="preco">Preço: </label>
        <input type="number" step="0.010" name="preco" id="preco" min="100" max="10000">
    </p>

    <!-- step
Trabalha junto com os atributos min e max para limitar os incrementos em que valores numéricos ou datas podem ser alterados. Seu valor pode ser any ou um número de ponto flutuante positivo. Se o valor não for any, o controle aceita somente valores múltiplos valor do incremento maiores que o mínimo. -->
    
    <!-- Quantidade campo de número com valor mínimo de 0 e máximo de 50 -->
    <p>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" min="0" max="50">
    </p>

    <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar dados</button>


    </form>
    
    <?php
    if(isset($_POST['enviar'])):
    $erros = array ();
    
    $nome = filter_input (INPUT_POST,'nome-produto', FILTER_SANITIZE_SPECIAL_CHARS);
        
   
    endif;
    ?>
</body>
</html>