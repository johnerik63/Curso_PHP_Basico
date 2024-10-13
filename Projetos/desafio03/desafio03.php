<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="desafio03.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas Simples</h1>
        <p>
            <?php
                $valor = $_REQUEST["din"];
                //5.49
                $convertido = $valor/5.49;

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                //Formatação tradicional
                //echo "Seus R\$".number_format($valor, 2, ",", ".")." equivalem a U\$". number_format($convertido, 2, ",", ".")
                //formatação de moedas com internacionalização.


                echo "Seus ".numfmt_format_currency($padrao, $valor, "BRL"). "equivalem a <strong>".numfmt_format_currency($padrao, $convertido, "USD");

                echo "<br>Cotação fixa de U$5,49</strong> informada diretamente no código.";
            ?>
        </p>
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
    </main>      
</body>
</html>
