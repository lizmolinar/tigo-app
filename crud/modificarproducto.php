<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from firmas where idfirma=$id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <h3 class="text-center text-secundary">Modificar Usuarios</h3>
        <?php

        while ($datos = $sql->fetch_object()) { ?>

            <div class="tabla-contenedor">
                <table>
                    <tr>
                        <th class="center">USUARIO</th>
                        <th class="center">REPRESENTANTE SOPORTE TI</th>
                    </tr>
                    <tr>
                        <td class="highlight">Firma: </td>
                        <td class="highlight">Firma: </td>
                    </tr>
                    <tr>
                        <td class="highlight">Nombre completo:
                            <input type="text" name="firmausuario" class="f_usu"
                                onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                                maxlength="60" autocomplete="off" required>
                        </td>
                        <td class="highlight">Nombre completo:
                            <input type="text" name="firmatecnico" class="f_tec"
                                onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                                maxlength="60" autocomplete="off" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="center">ATENCIÓN AL TRABAJADOR</th>
                        <th class="center">JEFE INMEDIATO</th>
                    </tr>
                    <tr>
                        <td class="highlight">Firma: </td>
                        <td class="highlight">Firma: </td>
                    </tr>
                    <tr>
                        <td class="highlight">Nombre completo:
                            <input type="text" name="firmaatencion" class="f_usu"
                                onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                                maxlength="60" autocomplete="off">
                        </td>
                        <td class="highlight">Nombre completo:
                            <input type="text" name="firmajefe" class="f_tec"
                                onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                                maxlength="60" autocomplete="off">
                        </td>
                    </tr>
                </table>
            </div>
        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Crear</button>
    </form>
</body>

</html>