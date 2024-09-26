<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $number = $_GET["numero"];
            $antecessor = $number - 1;
            $sucessor = $number + 1;
            $multiplica = $number * 2;
            $divisor = $number / 2;

            echo "Seu número digitado é <strong>$number</strong><br>";
            echo "<br>";
            echo "O seu antecessor é $antecessor <br>";
            echo "<br>";
            echo "O seu sucessor é $sucessor. <br>";
            echo "<br>";
            echo "Seu número multiplicado por 2 é igual $multiplica. <br>";
            echo "<br>";
            echo "Seu número dividido por 2 é igual $divisor."
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior.</a></p>
    </main>
</body>
</html>