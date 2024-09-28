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
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <section>
    <?php
        $cotacao = "5.17";
        $real = $_REQUEST["numero"] ?? 0;
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pr-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
    ?>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>
