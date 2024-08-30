<?php

if (!empty($_POST["btnregistrar"])) {
    // Verifica que todos los campos estén completos
    if (!empty($_POST["ID"]) && !empty($_POST["nombre"]) && !empty($_POST["propiedad"]) && !empty($_POST["cedula"]) && !empty($_POST["celular"]) && !empty($_POST["cargo"]) && !empty($_POST["costos"]) && !empty($_POST["logistico"]) && !empty($_POST["sede"]) && !empty($_POST["direccion"]) && !empty($_POST["ubicacion"]) && !empty($_POST["jefe"]) && !empty($_POST["gerencia"]) && !empty($_POST["usuario_red"]) && !empty($_POST["modalidad"]) && !empty($_POST["operativas"]) && !empty($_POST["contrato"])) {
        
        $ID = $_POST['ID'];
        $nombre = $_POST['nombre'];
        $propiedad = $_POST['propiedad'];
        $cedula = $_POST['cedula'];
        $celular = $_POST['celular'];
        $cargo = $_POST['cargo'];
        $costos = $_POST['costos'];
        $logistico = $_POST['logistico'];
        $sede = $_POST['sede'];
        $direccion = $_POST['direccion'];
        $ubicacion = $_POST['ubicacion'];
        $jefe = $_POST['jefe'];
        $gerencia = $_POST['gerencia'];
        $usuario_red = $_POST['usuario_red'];
        $modalidad = $_POST['modalidad'];
        $operativas = $_POST['operativas'];
        $contrato = $_POST['contrato'];

        $sql=$conexion->query("insert into datosdeusuario(ID, nombre, propiedad, cedula, celular, cargo, costos, logistico, sede, direccion, ubicacion, jefe, gerencia, usuario_red, modalidad, operativas, contrato)values('$ID', '$nombre', '$propiedad', '$cedula', '$celular', '$cargo', '$costos', '$logistico', '$sede', '$direccion', '$ubicacion', '$jefe', '$gerencia', '$usuario_red', '$modalidad', '$operativas', '$contrato') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar usuario</div>';
        }

    } else {
        echo '<div class="alert alert-warning">ALGUNO DE LOS CAMPOS ESTÁ VACÍO</div>';
    }
}

?>
