<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Final</title>
    <link rel="stylesheet" href="desafio13.css">
</head>
<body>
    <main>
        <?php 
        $saque = (int) $_GET["saque"] ?? 0;
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="entrada">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" value="<?$saque?>" step="5">
            <small><p>*Notas disponiveis: R$100, R$ 50, R$ 10 e R$ 5</p></small>
            <input type="submit" value="Sacar">
        </form>
        <section id="resultado">
        <h1> <?php echo "Saque de R$". number_format($saque, 2, ",", "."). " realizado." ?> </h1>
            <?php 
            $notas_100 = intdiv($saque, 100);
            $resto = $saque - (100*$notas_100);
            $notas_50 = intdiv($resto, 50);
            $resto_2 = $saque - (100*$notas_100) - (50*$notas_50);
            $notas_10 = intdiv($resto_2, 10);
            $resto_3 = $saque - (100*$notas_100) - (50*$notas_50) - (10*$notas_10);
            $notas_5 = intdiv($resto_3, 5);
            
    
            echo "O caixa eletrônico vai entregar as seguintes notas:";
            ?>
            <ul>
                <li><img src="nota_100.jpg" alt="nota100" width="100px"><?php echo " x $notas_100"?></li>
                <li><img src="nota_50.jpg" alt="nota100" width="100px"><?php echo " x $notas_50"?></li>
                <li><img src="nota_10.jpg" alt="nota100" width="100px"><?php echo " x $notas_10"?></li>
                <li><img src="nota_5.jpg" alt="nota100" width="100px"><?php echo " x $notas_5"?></li>
            </ul>  
        </section>
    </main>
    
</body>
</html>