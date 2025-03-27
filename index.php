<?php
include 'conf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de ajedrez</title>
</head>
<style>
    .white {
        background-color: white;
    }
    .black {
        background-color: black;
    }
    td {
        border: 1px solid black;
        padding: 10px;
        width: 10px;
        height: 10px;
    }
    .coordenada {
        border: none;
    }
</style>
<body>
    <h1>Tablero de Ajedrez</h1>
    <table>
        <?php
        //Filas
        echo "<tr>";
        foreach ($coordenadas as $coordenada) {
            echo '<td class="coordenada">', $coordenada,'</td>';
        }
        echo "</tr>";
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            //Columnas
            for ($j = 1; $j <= 8; $j++) {
                if (($j + $i) % 2 == 0) {
                    $color = 'white';
                } else {
                    $color = 'black';
                }
                echo '<td class="', $color,'"></td>';
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>