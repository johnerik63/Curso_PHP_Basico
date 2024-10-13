<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="desafio08.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.01" value="<? $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
        <section id="resultado">
            <h1>Resultado Final</h1>
            <?php 
                echo "Analisando o número <strong>$numero</strong>, temos:";
                $raiz_quadrada = sqrt($numero);
                $raiz_cubica = ($numero)**(1/3);
                echo "<ul>
                    <li>A raiz quadrada de $numero é <strong>". number_format($raiz_quadrada, 2, '.', ',')."</strong>.</li>
                    <li>A raiz cúbica de $numero é <strong>". number_format($raiz_cubica, 2, '.', ',')."</strong>.</li>
                    </ul>"
            ?>
        </section>
            

        
    </main> 
</body>
</html>