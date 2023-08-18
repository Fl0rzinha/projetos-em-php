<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <style>
        .destaque {
            color: red;
        }
        .cu{
            color: gray
        }
        .sexo{
            color: green
        }
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p>Programador: Richard Alves da Silva</p>
    <hr>


    <?php
    echo "Chama CBUM !";

    echo "<h2>Gerando <span class='destaque'>porra</span> através do rabo. </h2>";
    echo "<h2>Gerando <span class=\"cu\">desemprego</span> através do PHP. </h2>";
    echo "<h2>Gerando <span class=\"sexo\">desemprego</span> através do PutoHomosexualPiroquinha. </h2>";

    ?>

    <h1>HTML e PHP </h1>
    <p>Lorem ipsum APENAS!</p>

    <?php
        $cu = "&#160 CA &#160 CO.";
    ?>

    <p>MA <?=$cu?> </p>
    
</body>
</html>