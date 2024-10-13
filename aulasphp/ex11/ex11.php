<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Retroalimentados</title>
    <link rel="stylesheet" href="ex11.css">
</head>
<body>
    <?php 
        //capturando os dados do formulário retroalimentado
        $valor1 = $_GET['num1'] ?? 0;
        $valor2 = $_GET['num2'] ?? 0;
    
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="num1" id="num1" value="<?=$valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="num2" id="num2" value="<?=$valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $soma = $valor1 + $valor2;

            echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma.</strong></p>";
        
        ?>
    </section>
    
</body>
</html>