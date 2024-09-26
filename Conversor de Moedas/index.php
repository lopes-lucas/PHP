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
        <h1>
            Conversor de Moedas v1.0
        </h1>
    </header>
    <section>
        <form action="conversor.php" method="get">
            <label for="numero">Digite um valor de R$:</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>