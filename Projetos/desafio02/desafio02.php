<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="desafio02.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php 
                echo "Gerando um número aleatório entre 0 e 100.";
                $min = 0;
                $max = 100;
                $numeroAleatorio = mt_rand($min, $max);
                echo "<br>O valor gerado foi <b>$numeroAleatorio<b>.";
            ?>
        </p>
        <button onclick="location.reload();">🔄Gerar outro.</button>

    </main>
    
</body>
</html>