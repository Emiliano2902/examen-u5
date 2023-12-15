<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
        function retornarColorHexa($rojo, $verde, $azul)
        {
            $color = sprintf("#%02X%02X%02X", $rojo, $verde, $azul);
            return $color;
        }
        
        // Modifica esto con tu nombre y número de control
        $mi_nombre = "ChatGPT";
        $mi_numero_de_control = "12345678";

        $color_nombre = retornarColorHexa(255, 0, 0);  // Rojo
        $color_numero_de_control = retornarColorHexa(0, 0, 255);  // Azul
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
