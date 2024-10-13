<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Manipulação de Strings em PHP</h1>
    <?php 
        //Manipulação de Strings
        /*Existem quatro formatos de Strings:
            1 - double quoted ("")
            2 - single quoted ('')
            3 - Heredoc
            4 - howdoc
            o operador '.' é o operador de concatenação. 
            Uma grande diferença entre o single quoted e o double quoted. Veja abaixo:
            */
            echo "PHP\u{1F418}<br>";//Imprime o emoji
            echo'PHP\u{1F418}<br>';//Não imprime o emoji

            //outro exemplo
            $nome = "Pedro";
            echo 'Olá $nome!<br>';
            echo "Olá $nome!<br>";

            //interpolar é substituir uma variável pelo conteúdo da variável.
            //quando fazemos com constantes, mesmo sendo aspas duplas ele não faz a interpolação.

            const ESTADO = "PA";
            echo "Moro no ESTADO<br>";

            //para constantes devemos usar o operador de concatenação.

            echo "Moro no ".ESTADO;
            echo "<br>Estamos no ano de ".date('Y');
            
            //Se quisermos formar a seguinte frase Rodrigo "Minotauro" Nogueira, com variáveis devemos usar outro recurso.

            $nom = "Rodrigo";
            $sNome = "Nogueira";
            echo "<br>$nome \"Minotauro\" $sNome<br>";//sequencia de escape
            /*Existem varias sequencias de escape para aspas duplas:
            \n noba linha
            \t tabulação horizontal
            \\ barra invertida
            \$ sinal cifrão
            \u{} codepoint unicode
            */

            $Nome = "Pedro";
            $Sobrenome = "Henrique";
            $Apelido = "Pedrinho";

            echo "$Nome $Apelido $Sobrenome<br>";

            //Sintaxe Heredoc (Tem interpretação das variáveis)
            // $curso = "PHP";
            // $ano = date('Y');
            // echo <<< FRASE
            //     Estou estudando
            //         $curso em $ano
            //     FRASE;
            //Nowdoc (Não tem interpretação das variáveis)
            $curso = "PHP";
            $ano = date('Y');
            echo <<< 'FRASE'
                Estou estudando
                    $curso em $ano
                FRASE;
            

    ?>
    
</body>
</html>