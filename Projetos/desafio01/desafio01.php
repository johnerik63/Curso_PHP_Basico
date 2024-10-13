<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="desafio01.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                // 1° - Crie um programa em que você vai receber do usuário um número e imformar na tela qual é o sucessor desse número e o antecessor desse número.
                $n = $_REQUEST["num"];
                $s = $n + 1;
                $a = $n - 1;

                echo "O número escolhido foi <b>$n</b>.";
                echo "<br>O sucessor de $n é $s.";
                echo "<br>O antecessor de $n é $a."
            ?>
        </p>
        
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
        
    </main>
    
    
</body>
</html>