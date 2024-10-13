<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="desafio04.css">
</head>
<body>
    <main>
        <h1>Conversr de Moedas 2.0</h1>
        <p><?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $cotação = $dados["value"][0]['cotacaoCompra'];

            $valor = $_REQUEST["number"];
            $convert = $valor / $cotação;
            $padrão = numfmt_create("pt-br", NumberFormatter::CURRENCY);


            echo "Seus ".numfmt_format_currency($padrão, $valor, "BRL"). " equivalem a <strong>" .numfmt_format_currency($padrão, $convert, "USD");
            echo "<p></strong><br>*<small>Cotação obtida diretamente do site do <strong>Banco Central.</small></strong></p>";
        ?></p>
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
    </main>
    
</body>
</html>