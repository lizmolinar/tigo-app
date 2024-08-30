<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7830b54897.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Bienvenid@</h1>
    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h3 class="text-center text-secundary">Registro de Usuarios</h3>
            <?php
            include 'modelo/conexion.php';
            include 'controlador/registro_usuario.php';
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id</label>
                <input type="text" class="form-control" name="ID">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="propiedad" class="form-label">Propiedad</label>
                <select class="form-select" name="propiedad" id="propiedad" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Colsubsidio</option>
                    <option value="opcion2">PCCOM</option>
                    <option value="opcion3">Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">identificación</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Centro de costos</label>
                <input type="text" class="form-control" name="costos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Centro logistico</label>
                <input type="text" class="form-control" name="logistico">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sede</label>
                <input type="text" class="form-control" name="sede">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ubicación</label>
                <input type="text" class="form-control" name="ubicacion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jefe Inmediato</label>
                <input type="text" class="form-control" name="jefe">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gerencia</label>
                <input type="text" class="form-control" name="gerencia">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario de Red</label>
                <input type="text" class="form-control" name="usuario_red">
            </div>
            <div class="mb-3">
                <label for="modalidad" class="form-label">Modalidad de trabajo</label>
                <select class="form-select" name="modalidad" id="modalidad" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Presencial</option>
                    <option value="opcion2">Teletrabajo Autonomo</option>
                    <option value="opcion3">Teletrabajo suplementario</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="operativas" class="form-label">Facilidades operativas</label>
                <select class="form-select" name="operativas" id="operativas" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Carnet</option>
                    <option value="opcion2">Tarjeta de acceso</option>
                    <option value="opcion3">Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="contrato" class="form-label">Tipo de contrato del usuario</label>
                <select class="form-select" name="contrato" id="contrato" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="opcion1">Trabajador</option>
                    <option value="opcion2">Estudiante en practica</option>
                    <option value="opcion3">Contratista</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Crear</button>
        </form>
        <form class="col-3 p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Propiedad del equipo</th>
                        <th scope="col"># identificación</th>
                        <th scope="col"># Celular</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Centro de costos</th>
                        <th scope="col">Centro logístico</th>
                        <th scope="col">Sede</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Jefe Inmediato</th>
                        <th scope="col">Gerencia</th>
                        <th scope="col">Usuario de Red</th>
                        <th scope="col">Modalidad de trabajo</th>
                        <th scope="col">Facilidades operativas</th>
                        <th scope="col">Tipo de contrato</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select * from datosdeusuario ");

                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th><?php echo htmlspecialchars($datos->ID); ?></th>
                            <td><?php echo htmlspecialchars($datos->nombre); ?></td>
                            <td><?php echo htmlspecialchars($datos->propiedad); ?></td>
                            <td><?php echo htmlspecialchars($datos->cedula); ?></td>
                            <td><?php echo htmlspecialchars($datos->celular); ?></td>
                            <td><?php echo htmlspecialchars($datos->cargo); ?></td>
                            <td><?php echo htmlspecialchars($datos->costos); ?></td>
                            <td><?php echo htmlspecialchars($datos->logistico); ?></td>
                            <td><?php echo htmlspecialchars($datos->sede); ?></td>
                            <td><?php echo htmlspecialchars($datos->direccion); ?></td>
                            <td><?php echo htmlspecialchars($datos->ubicacion); ?></td>
                            <td><?php echo htmlspecialchars($datos->jefe); ?></td>
                            <td><?php echo htmlspecialchars($datos->gerencia); ?></td>
                            <td><?php echo htmlspecialchars($datos->usuario_red); ?></td>
                            <td><?php echo htmlspecialchars($datos->modalidad); ?></td>
                            <td><?php echo htmlspecialchars($datos->operativas); ?></td>
                            <td><?php echo htmlspecialchars($datos->contrato); ?></td>
                            <td>
                                <a href="modificarproducto.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="crearusuario.php?id=<?= $datos->ID ?>" Class="btn btn-small btn-danger"></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>