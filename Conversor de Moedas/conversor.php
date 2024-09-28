<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas em PHP</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
        <h2>Cotação via API do Banco Central</h2>
    </header>
    <section>
    <?php
        // Cotação vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $real = $_REQUEST["numero"] ?? 0;
        $dolar = $real / $cotacao;

        //Biblioteca intl (Internallization PHP) 
        $padrao = numfmt_create("pr-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        echo "<p>Valor do dolar $cotacao.</p>"
    ?>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>