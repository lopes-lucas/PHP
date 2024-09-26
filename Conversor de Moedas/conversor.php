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
// Define a data que você deseja consultar (no formato dd-mm-yyyy)
$dataConsulta = '25-09-2024'; // Por exemplo, data de ontem

// Monta a URL com a data específica
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'' . $dataConsulta . '\'&$format=json';

// Inicializa a sessão cURL
$ch = curl_init();

// Configura as opções do cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desativa a verificação de certificado SSL (se necessário)

// Executa a requisição e armazena a resposta
$response = curl_exec($ch);

// Verifica se houve erros na requisição
if (curl_errno($ch)) {
    echo 'Erro cURL: ' . curl_error($ch);
} else {
    // Verifica o código de resposta HTTP
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if ($httpCode == 200) {
        // Decodifica o JSON para um array associativo
        $data = json_decode($response, true);

        // Verifica se existe algum valor retornado
        if (isset($data['value']) && !empty($data['value'])) {
            // Acessa a cotação do dólar
            $cotacaoDolar = $data['value'][0]['cotacaoCompra'];

            echo "A cotação do dólar em $dataConsulta é: R$ " . number_format($cotacaoDolar, 2, ',', '.');
        } else {
            echo "Nenhuma cotação encontrada para a data: $dataConsulta";
        }
    } else {
        echo "Erro ao acessar a API. Código HTTP: $httpCode";
    }
}

// Fecha a sessão cURL
curl_close($ch);
?>


        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>

$valor = $_GET["numero"];
            $dolar = $valor * 0.18;

            echo "Seu R$ $valor equivalem a US$ <strong>$dolar.</strong><br>";
            echo "<br>";
            echo "<strong>Cotação fixa de R$ 5.47</strong> informada diretamente no código.<br>";
            echo "<br>"