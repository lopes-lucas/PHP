<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? '';
        $p1 = $_GET['p1'] ?? '';
        $v2 = $_GET['v2'] ?? '';
        $p2 = $_GET['p2'] ?? '';

    ?>
    <main>
        <h1>Infome um Número</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>" required min="1">
            <label for="valor1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>" required>
            <label for="valor1">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>" required>
            <label for="valor1">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>" required min="1">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $simples = ($v1 + $v2) / 2;
            $ponderada = ($v1 * $p1 + $v2 * $p2)/($p1 + $p2);
        ?>
        <h1>Resultado Final</h1>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A Média Aritmétrica <strong>Simples</strong> entre os valores é igual a <?=number_format($simples, 2, ",", ".")?>.</li>
            <li>A Média Aritmétrica <strong>Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=number_format($ponderada, 2, ",", ".")?>.</li>
        </ul>

    </section>

</body>
</html>