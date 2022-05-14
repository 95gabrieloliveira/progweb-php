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

    <form action="" method="post">
    <p>
        <label for="nome-produto">Nome do Produto:</label>
        <input required type="text" name="nome-produto" id="nome-produto">
    </p>

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

    <p>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" min="100" max="1000">
    </p>
    
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
    
</body>
</html>