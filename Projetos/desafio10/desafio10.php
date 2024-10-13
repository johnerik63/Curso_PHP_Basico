<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="desafio10.css">
</head>
<body>
    <?php 
    $ano = $_GET["ano"] ?? 0;
    $ano_atual = $_GET["ano_atual"] ?? 0;
    
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
        <label for="ano">Em que ano você nasceu?</label>
        <input type="number" name="ano" id="ano" value="<? $ano ?>">
        <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em <strong>2024</strong>).</label>
        <input type="number" name="ano_atual" id="ano_atual" value="<? $ano_atual ?>">
        <input type="submit" value="Qual será sua idade?">
        </form>
        <section id="resultado">
            <h1>Resultado</h1>
            <?php 
            $idade = $ano_atual - $ano;
            if ($ano_atual > $ano){
                echo "Quem nasceu em $ano vai ter <strong>$idade anos</strong> em $ano_atual."; 
            }elseif($ano_atual == $ano){
                echo "Se a pessoa nasceu em $ano, em $ano_atual ela irá nascer.";

            }else{
                echo "A segunda data precisa ser maior que a primeira.";
            }
            ?>
        </section>
        
    </main>
    
</body>
</html>