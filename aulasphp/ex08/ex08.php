<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas</title>
</head>
<body>
    <h1>Funções Aritiméticas em PHP</h1>
    <?php 
        //abs() retorna o valor absoluto de um número
        $n = -98;
        $a = abs(-98);
        echo "O valor absoluto de $n é $a.";
        //base_convert() faz mudança de base de numeros de decimal pra octal e por ai vai..

        $r = base_convert(254, 10, 8);
        echo("<br>A resposta é $r.");
        $b = base_convert(254, 10, 2);
        echo("<br>A resposta é $b.");

        //Temos as funções ceil(), floor() e round()
        /*A função ceil() arredonda para cima. a função floor() arredonda pra baixo e round() arredonda aritimeticamente */
        // A função hypot() calcula a hipotenusa de um triangulo retangulo
        // a função intdiv() me da o resultado inteiro da divisão de dois numeros.
        $r = intdiv(5, 2);
        print("<br>O resultado é $r");
        $ca = 3;
        $co = 4;
        $h = hypot($ca, $co);
        print("<br>A hipotenusa do triângulo de lados 3 e 4 é $h;");
        //Temos também as funções min() e max() que fornecem os valores minimos e máximos, respectivamente entre os valores fornecidos.
        $min = min(5, 6, 8, 1);
        $max = max(5, 6, 8, 1);
        print("<br>O valor minimo e máximo dentre os numeros (5, 6, 8, 1) é, respectivamente $min e $max.")
        //Temos a função trigonométricas sin(), cos(), tan()
        //temos a função sqrt() que calcula a raiz quadrada de um numero.
    ?>
    <?php 
        $r = sqrt(9); //podemos fazer também $r = 9**(1/3)
        print("<br>A raiz quadrada de 9 é $r.");
    ?>
</body>
</html>