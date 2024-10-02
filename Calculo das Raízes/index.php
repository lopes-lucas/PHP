<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Infome um Número</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="num" id="sal" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <?php 
            $quadrada = sqrt($num);
            $cubica = pow($num, 1/3);

            //Calculo manual - sem utilizar função do PHP
            //$quadrar = $num ** (1/2);
            //$cubica = $num ** (1/3);
        ?>
        <ul>
            <li>A sua raíz quadradrada é <strong><?= number_format($quadrada, 3, ",", ".")?></strong></li>
            <li>A sua raíz cúbica é <strong><?= number_format($cubica, 3, ",", ".")?></strong></li>
        </ul>
    </section>

</body>
</html>