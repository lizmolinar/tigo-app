<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["ID"]) and !empty($_POST["nombre"]) and !empty($_POST["propiedad"]) and !empty($_POST["cedula"]) and !empty($_POST["celular"]) and !empty($_POST["cargo"]) and !empty($_POST["costos"]) and !empty($_POST["logistico"]) and !empty($_POST["sede"]) and !empty($_POST["direccion"]) and !empty($_POST["ubicacion"]) and !empty($_POST["jefe"]) and !empty($_POST["gerencia"]) and !empty($_POST["usuario_red"]) and !empty($_POST["modalidad"]) and !empty($_POST["operativas"]) and !empty($_POST["contrato"])) {
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
        $sql=$conexion->query(" update datosdeusuario set ID='$ID', nombre='$nombre', propiedad='$propiedad', cedula='$cedula', celular='$celular', cargo='$cargo', costos='$costos', logistico='$logistico', sede='$sede', direccion='$direccion', ubicacion='$ubicacion', jefe='$jefe', gerencia='$gerencia', usuario_red='$usuario_red', modalidad='$modalidad', operativas='$operativas', contrato='$contrato' where ID=$ID ");
        if ($sql==1) {
           header("location:crearusuario.php");
        } else {
            echo "<div class='alert alert-danger'>error al modificar usuario</div>";
        }
    }else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
    
}

