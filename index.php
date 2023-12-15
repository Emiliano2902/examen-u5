<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
        function retornarColorHexa($amarillo, $rosa, $blanco)
        {
            $color = sprintf("#%02X%02X%02X", $amarillo, $rosa, $blanco);
            return $color;
        }

        // Modifica esto con tu nombre y número de control
        $mi_nombre = "emiliano";
        $mi_numero_de_control = "21091094";

        $color_nombre = retornarColorHexa(255, 0, 0);  // amarillo
        $color_numero_de_control = retornarColorHexa(0, 0, 255);  // rosa
    ?>
    
    <table>
        <tr>
            <td bgcolor="<?php echo $color_nombre; ?>">Nombres</td>
            <td bgcolor="<?php echo retornarColorHexa(0, 255, 0); ?>">Apellidos</td>
            <td bgcolor="<?php echo $color_numero_de_control; ?>">No. De control</td>
        </tr>
    </table>
</body>
</html>
