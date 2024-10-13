<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Entendendo a diferença entre variáveis e constantes
        $nome = "Pedro";
        $sobrenome = "Bello";
        const PAIS = "Brasil";
        //
        echo "Muito prazer $nome $sobrenome, você mora no ".PAIS;
        //
        //A diferença entre variavel e constante é que a constante não pode ser alterada, enquanto a variável sim.
        //Ao declarar constantes você usa letras maiusculas.
        //
        //Regras para nomes de identificadores
        //1- Variáveis sempre começam com simbolo $;
        //2- O segundo pode ser letra ou simbolo _;
        //3- Aceita caracteres [a-z],[A-Z],[0-9] e [_];
        //4- Aceita caracteres da tabela ASCII a partir de 128;
        //5- Aceita caracteres acentuados á, ç, õ;
        //6- A linguagem é case sensitive em relação a nomes;
        //7- Nomes especiais como $this nã podem ser usados;
        //
        //Para printar uma constante devemos concatenar ela, por exemplo: echo "alguma coisa ".const

    ?>
    
</body>
</html>