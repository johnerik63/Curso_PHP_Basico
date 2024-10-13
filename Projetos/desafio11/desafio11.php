<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="desafio11.css">
</head>
<body>
    <?php 
        $preco = (int) $_GET["preço"] ?? 0;
        $reajuste = $_GET["reajuste"] ??0;
        $reajuste_percentual = $reajuste/100 ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preço" id="preço" step="0.01" value="<? $preco ?>">
            <label for="porcentagem">Qual será a porcentagem do ajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudavalor()">
            <input type="submit" value="Ajustar">
        </form>
        <section>
            <h1>Resultado do Reajuste</h1>
            <?php 
            $preco_ajust = $preco + ($preco*$reajuste_percentual);
            echo "O produto que custava R$".number_format($preco, 2, ",", ".").", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$". number_format($preco_ajust, 2, ",", ".")."</strong> a partir de agora.";
            ?>
        </section>
        <script>
            mudavalor();
            function mudavalor(){
                p.innerText = reajuste.value;
            }
        </script>
    </main>   
</body>
</html>