<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="desafio05.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>
            <?php 
            $real = $_REQUEST["number"] ?? 0;
            $r = intdiv($real, 1);
            $decimal = $real - $r;
            

            echo "<p>Analisando o número <strong>
            ". number_format($real, 3, ",", ".")."</strong> informado pelo usuário.</p>";
            echo "<ul><li>A parte inteira do número é <strong>$r.</strong></li><li>A parte fracionária do número é <strong>".number_format($decimal, 3, ","). ".</strong></li><u>";
            

            
            ?>
        </p>
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"</a></p>
    </main>
    
</body>
</html>