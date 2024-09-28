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
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anantomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="div" id="div"  value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $calculo = intdiv($dividendo, $divisor);
            $resto = fmod($dividendo, $divisor);

            echo "<p>Quociente é $calculo.</p>";
            echo "<p> O resto da divisão é $resto.</p>";
            echo "Verifique o resultado: $calculo x $divisor + $resto = $dividendo"

        ?>
    </section>
</body>
</html>