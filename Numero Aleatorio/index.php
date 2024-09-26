<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <header>
        <h1>Gerador de Números Aleatório com PHP</h1>
    </header>
    <main>
        <?php 

        $aletorio = mt_rand(0, 100);
        
        echo "Clique no botão a baixo para gerar um número aleatório entre 0 e 100. <br>";
        echo "<br>";
        echo "O valor gerado foi <estrong>$aletorio</estrong><br>";
        echo "<br>";
        ?>
        <button><a onclick="Refresh()">Gerar Outro Número</button>
    </main>
    <script>
        function Refresh(){
            window.location.reload();
            }
    </script>
</body>
</html>