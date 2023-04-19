<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
</head>
<body>

    <h1>Introdução ao PHP</h1>

    <?php

    echo "<b><mark>Olá Mundo!</mark></b><br><br>";

    //comentário de linha

    /* comentário
          em 
         bloco 
    */

    //todo var começa com $

    $nome = "Gabrielle";
    $idade = (int)17.5; //int para reconhecer como número inteiro

  /*  Typecast é como chamamos quando categorizamos a variavel


  */

    echo "Meu nome é $nome e minha idade $idade.<br><br>";
    echo "Meu nome é " .$nome. " e minha idade é " .$idade;



    ?>




    
</body>
</html>