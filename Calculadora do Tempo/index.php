<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $total = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculdora do Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="calc">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$total?>" min="0" step="1" required>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total;
        //Total semana
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total de dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        //Total de horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        //Total de minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        //Total de segudos
        $segundo = $sobra;
    ?>
    <section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o valor que voce digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos </strong>equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundo</li>
        </ul>
    </section>
</body>
</html>