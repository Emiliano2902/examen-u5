<html>
<head>
    <title>Mi Programa</title>
</head>
<body>
<?php
function retornarColorHexa($amarillo, $rosa, $blanco) {
    $color = sprintf("#%02X%02X%02X", $amarrillo, $rosa, $blanco);
    return $color;
}

$nombreColor = retornarColorHexa(255, 0, 0);  // Red background
$numeroColor = retornarColorHexa(0, 255, 0);  // Green background
?>
<table>
    <tr>
        <td bgcolor="<?php echo $nombreColor ?>">Carlos Emiliano Salgado Plata</td>
        <td bgcolor="<?php echo $numeroColor ?>">21091094</td>
    </tr>
</table>
</body>
</html>