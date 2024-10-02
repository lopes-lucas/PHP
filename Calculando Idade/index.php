<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $ano_atual = date("Y");
        $nascimento = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $ano_atual;

    ?>
    <main>
        <h1>Infome um Número</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="mascimento">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nascimento?>" required min="1900" max="<?=($ano_atual-1)?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$ano_atual?>)</strong></label>
            <input type="number" name="ano" id="ano" value="<?=$ano_atual?>" required min="1900">

            <input type="submit" value="Qual será minha Idade?">
        </form>
    </main>
    <section>
        <?php 
            $calculo_idade = $ano - $nascimento; 
        ?>

        <h1>Resultado</h1>
        <p>você nasceu em <?=$nascimento?> vai ter <strong><?=$calculo_idade?> anos</strong> em <?=$ano_atual?> <??>.</p>


    </section>

</body>
</html>