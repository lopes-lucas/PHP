<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $salario_minimo = 1412;
    ?>
    <main>
        <h1>Infome seu Salário</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="sal" value="<?=$salario?>">
            <p>Considerando o salário mínimo de R$<?=number_format($salario_minimo, 2, ",", ".")?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $calculo =  $salario / $salario_minimo;
            //echo "$calculo";
            $resto = fmod($salario, $salario_minimo);
            echo "Seu salário de R$ ". number_format($salario, 2, ",", ".") ." é igual a ". number_format($calculo, 0) ." salários mínimos + R$ ". number_format($resto, 2, ",", ".") .".";
        ?>
    </section>

</body>
</html>