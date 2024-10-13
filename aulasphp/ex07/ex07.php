<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritiméticas</title>
</head>
<body>
    <h1>Expressões Aritiméticas</h1>
    <?php 
        //Hoje vamos aprender sobre expresssões aritiméticas
        $res = 5 + 2/2;
        echo "O resultado é $res";
         //maiores ordens de precedencia nas operações
        /*
        1° (), parênteses 
        2° ** (potência);
        3° *, /, % (multiplicação, divisão e resto da divisão);
        4° + e - (adição e subtração);
         */
        //Mudamos a ordem de precedencia usando parênteses

        $res = 50/2+3**2;
        echo "<br>O resultado é $res"

    ?>
</body>
</html>