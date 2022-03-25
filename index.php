<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="before">
        <?php
            $n1 = 4;
            $n2 = 5;
            echo "<h2>OS VALORES SÃO $n1 E $n2</h2>";
            $m  = ($n1 + $n2) / 2;
            echo "$n1 + $n2 = ".($n1 + $n2);
            echo "<br>$n1 - $n2 = ".($n1 - $n2);
            echo "<br>$n1 * $n2 = ".($n1 * $n2);
            echo "<br>$n1 / $n2 = ".($n1 / $n2);
            echo "<br>$n1<sup>$n2</sup> =".pow($n1, $n2);
            echo "<br> Média = $m";
            echo "<br>O valor Absoluto de $n1 e $n2 = ".abs($n1)." e ".abs($n2);
            echo "<br>A raiz de $n1 e $n2 é ".sqrt($n1)." e ".sqrt($n2);
            echo "<br>O valor arredondado de $n1 e $n2 é ".round($n1)." e ".round($n2);
            echo "<br>A parte inteira do nº $n1 e $n2 é ".intval($n1)." e ".intval($n2);
            echo "<br>O valor de $n1 e $n2 em moeda é R$".number_format($n1, 2, ",", ".")." e R$".number_format($n2, 2, ",", ".");
        ?>
    </div>
</body>
</html>