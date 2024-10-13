<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php 
        // como identificar os tipos primitivos da linguagem PHP
        // O PHP não é uma linguagem de tipagem forte.
        // Temos três categorias de tipos primitivos. São eles:
        // escalares, compostos e especiais.

        // $sobrenome = "Bello";//string
        // $idade = 30;//int ou integer
        // $casado = true;//bool ou boolean
        // $altura = 1.68;//float, double ou real
        // $num = 300;
       

        // echo "O valor da variável é $num.<br>";
        // echo "Prazer sr. $sobrenome, você tem $idade e tem $altura de altura. $casado."
        //O valor boleano para true é vazio

        // $v = (float)250;
        // var_dump($v);//mostra o valor da variável e o tipo primitivo.
        //podemos forçar a barra colocando o tipo primitivo que queremos entre parenteses antes do valor. coerção.

        // $num = (int)"960";
        // var_dump($num);

        //tipos primitivos compostos: Array e Object;
        //tipos '' '' especiais: Null, resource, callabe, mixed;

        // $vet = [6, 4, 3, 2, "Pablo"];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump(($p));
    ?>   
</body>
</html>