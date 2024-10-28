<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../estilo/style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="valor" value=<?=$saque?> step="1" required>

            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, $2, $1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        $sobra = $saque;

        $n200 = floor($sobra / 200) ?? 0;
        $sobra %= 200;

        $n100 = floor($sobra / 100) ?? 0;
        $sobra %= 100;

        $n50 = floor($sobra / 50) ?? 0;
        $sobra %= 50;

        $n20 = floor($sobra / 20) ?? 0;
        $sobra %= 20;

        $n10 = floor($sobra / 10) ?? 0;
        $sobra %= 10;

        $n5 = floor($sobra / 5) ?? 0;
        $sobra %= 5;

        $n2 = floor($sobra / 2) ?? 0;
        $sobra %= 2;

        $n1 = floor($sobra / 1) ?? 0;
        $sobra %= 1;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai ter entregar as seguintes notas:</p>
        <ul style="columns: 2;">
            <li><img src="img/200-reais.jpg" alt="Nota de 200" class="nota"> x<?=$n200?></li>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$n100?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$n50?></li>
            <li><img src="img/20-reais.jpg" alt="Nota de 20" class="nota"> x<?=$n20?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$n10?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$n5?></li>
            <li><img src="img/2-reais.jpg" alt="Nota de 2" class="nota"> x<?=$n2?></li>
            <li><img src="img/1-real.jpg" alt="Nota de 1" class="nota"> x<?=$n1?></li>
        </ul>
    </section>
</body>
</html>