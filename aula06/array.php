<!DOCTYPE html>
<html>
<body>

<?php
    $numero = array(2, 5, 7, 8 ,10, 18, 30, 37, 38, 60);

    for ($i = 0; $i < count($numero); $i++) {
        if ($numero[$i] % 2 == 0) {
            echo "$numero[$i] é par <br / >";
        }
        else {
            echo "$numero[$i] é impar <br / >";
        }
    }
?>

</body>
</html>