<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado:</h1>

    <?php

        $valor = $_GET["valor"];

        echo "O valor informado foi o $valor<br><br>";

        $raizq = sqrt($valor);
        $raizq = number_format($raizq, 2, '.', '');

        echo "A raiz de $valor é igual a = $raizq";

        ?>

   
</body>
</html>