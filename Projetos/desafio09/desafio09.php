<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="desafio09.css">
</head>
<body>
    <?php 
    $primeiro_valor = (int) $_GET["primeiro_valor"] ?? 0;
    $primeiro_peso= (int) $_GET["primeiro_peso"] ?? 0;
    $segundo_valor = (int) $_GET["segundo_valor"] ?? 0;
    $segundo_peso= (int) $_GET["segundo_peso"] ?? 0;
    
    ?>
    <main>
    <h1>Médias Aritiméticas</h1>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
        <label for="primeiro_valor">1° Valor:</label>
        <input type="number" name="primeiro_valor" id="primeiro_valor" value="<?= $primeiro_valor ?>">
        <label for="primeiro_peso">1° Peso:</label>
        <input type="number" name="primeiro_peso" id="primeiro_peso" value="<?= $primeiro_peso?>">
        <label for="segundo_valor">2° Valor:</label>
        <input type="number" name="segundo_valor" id="segundo_valor" value="<?= $segundo_valor?> $">
        <label for="segundo_peso">2° Peso:</label>
        <input type="number" name="segundo_peso" id="segundo_peso" value="<?= $segundo_peso?>">
        <input type="submit" value="Calcular Médias">
    </form>
    <?php 
        $media_aritimetica = ($primeiro_valor + $segundo_valor) / 2;
        $media_aritimetica_pond = (($primeiro_valor*$primeiro_peso) + ($segundo_valor*$segundo_peso))/($primeiro_peso + $segundo_peso);

        echo "Analisando os valores $primeiro_valor e $segundo_valor:";

        echo "<ul>
                <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ".number_format($media_aritimetica, 2, '.'). ".</li>
                <li>A <strong>Média Aritimética Ponderada</strong> entre os valores é igual a ".number_format($media_aritimetica_pond, 2, '.')."</li>
            </ul>";
    ?>

    </main>
    
</body>
</html>