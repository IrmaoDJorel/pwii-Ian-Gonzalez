<!DOCTYPE html>
<html>
<body>
<?php
    $valorproduto = 100;
    $valorcomacrescimo = $valorproduto * 1.16;
    $valorparcela = $valorcomacrescimo / 10;

    echo "Valor total da compra: R$ $valorcomacrescimo <br>";
    echo "Valor de cada parcela: R$ $valorparcela";
?>
</body>
</html>