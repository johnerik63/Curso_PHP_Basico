<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="desafio12.css">
</head>
<body>
    <?php 
    $segundos = (int) $_GET["segundos"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="segundos">Qual é o tempo em segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?$segundos?>">
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h1>Totalizando Tudo</h1>
            <?php 
            $minuto = intdiv($segundos, 60);
            $hora = intdiv($minuto, 60);
            $dia = intdiv($hora, 24) ;
            $semana = intdiv($dia, 7);
           
            $dia_restante = $dia - ($semana*7);
            $hora_restante = $hora - $dia*24;
            $minuto_restante = $minuto - $hora*60;
            $segundo_restante = $segundos - $minuto*60;

            echo "Analisando o valor que você digitou, <strong> ".number_format($segundos, 0, ',','.')." segundos</strong> equivalem a um total de:
            <ul>
            <li> $semana semanas</li>
            <li> $dia_restante dias</li>
            <li> $hora_restante  horas</li>
            <li> $minuto_restante  minutos</li>
            <li>$segundo_restante segundos</li>
            
            </u>"
            ?>
        </section>
    </main>
</body>
</html>