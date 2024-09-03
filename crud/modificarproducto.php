<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from datosdeusuario where ID=$id ");

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
        <h3 class="text-center text-secundary"> Modificar Usuarios</h3>
        <?php
        include "controlador/modificar_producto.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id</label>
                <input type="text" class="form-control" name="ID" value="<?= $datos->ID ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="propiedad" class="form-label">Propiedad</label>
                <select class="form-select" name="propiedad" id="propiedad" value="<?= $datos->propiedad ?>">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Colsubsidio</option>
                    <option value="opcion2">PCCOM</option>
                    <option value="opcion3">Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">identificación</label>
                <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular" value="<?= $datos->celular ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" value="<?= $datos->cargo ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Centro de costos</label>
                <input type="text" class="form-control" name="costos" value="<?= $datos->costos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Centro logistico</label>
                <input type="text" class="form-control" name="logistico" value="<?= $datos->logistico ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sede</label>
                <input type="text" class="form-control" name="sede" value="<?= $datos->sede ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" value="<?= $datos->direccion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ubicación</label>
                <input type="text" class="form-control" name="ubicacion" value="<?= $datos->ubicacion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jefe Inmediato</label>
                <input type="text" class="form-control" name="jefe" value="<?= $datos->jefe ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gerencia</label>
                <input type="text" class="form-control" name="gerencia" value="<?= $datos->gerencia ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario de Red</label>
                <input type="text" class="form-control" name="usuario_red" value="<?= $datos->usuario_red ?>">
            </div>
            <div class="mb-3">
                <label for="modalidad" class="form-label">Modalidad de trabajo</label>
                <select class="form-select" name="modalidad" id="modalidad" value="<?= $datos->modalidad ?>">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Presencial</option>
                    <option value="opcion2">Teletrabajo Autonomo</option>
                    <option value="opcion3">Teletrabajo suplementario</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="operativas" class="form-label">Facilidades operativas</label>
                <select class="form-select" name="operativas" id="operativas" value="<?= $datos->operativas ?>">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Carnet</option>
                    <option value="opcion2">Tarjeta de acceso</option>
                    <option value="opcion3">Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="contrato" class="form-label">Tipo de contrato del usuario</label>
                <select class="form-select" name="contrato" id="contrato" value="<?= $datos->contrato ?>">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Trabajador</option>
                    <option value="opcion2">Estudiante en practica</option>
                    <option value="opcion3">Contratista</option>
                </select>
            </div>
            
        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>

    </form>
</body>

</html>