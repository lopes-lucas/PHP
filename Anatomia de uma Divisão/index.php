<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anantomia de uma Divisão</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['div'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anantomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="div"  min="0" id="d2"  value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" min="1" id="d1" value="<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            $quociente = intdiv($dividendo, $divisor);
            $resto = fmod($dividendo, $divisor);

            //echo "<ul>";
            //echo "<li>Dividendo : $dividendo</li>";
            //echo "<li>Divisor: $divisor</li>";
            //echo "<li>Quociente: $quociente</li>";
            //echo "<li>Resto: $resto</li>";
            //echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>