<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1>Dados do Servidor</h1>
    <?php
        date_default_timezone_set("America/Cuiaba");
        echo "Hoje é dia " . date("d/M/y");
        echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>