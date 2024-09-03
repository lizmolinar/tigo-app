<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador por Serial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/acta.css">
</head>

<body>
    <div>
        <form action="" method="get" class="col-12 p-2">
            <h1 class="text-center text-secundary">Busca aqui</h1>
            <?php
            include 'modelo/conexion.php';
            include "controlador/crear_acta.php";

            ?>
            <br>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingInput" name="buscaserial">
                <label for="floatingInput">Serial del equipo</label>
            </div>
            <h4 class="text-center text-secundary">O tambien por:</h4>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="buscacedula">
                <label for="floatingPassword">Numero de identificación</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="btnbuscar" value="ok">Buscar</button>
        </form>

        <td>
            <a href=".php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i
                    class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="crearusuario.php?id=<?= $datos->ID ?>"
                class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
        
        <tr>
            <td>
                <center><img src="Imagenes/Logo_colsubsidio.svg" class="imagen2"></center>
            </td>
        </tr>
        <table>

            <form id="formulario0" onsubmit="return validarCheckbox()">
                <tr>
                    <td rowspan="3">
                        <center><b><a class="z"><br>ANEXO DE ENTREGAS AL TRABAJADOR DE EQUIPOS, HERRAMIENTAS Y
                                    FACILIDADES OPERATIVAS</center><BR></b>
                    </td>
                    <td style="width: 460px;"><b> Asignación<input type="checkbox" name="asignacion"></option>
                            Renovación<input type="checkbox" name="renovacion"></option>
                            Retiro<input type="checkbox" name="retiro"></option>
                            Prestamo<input type="checkbox" name="prestamo"></option>
                    </td></b>
                <tr>
                    <td style="width: 460px;"><b> Ciudad: </b><input type="text" name="ciudad" class="p_red"
                            style="width: 155px;"
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))"
                            maxlength="10" autocomplete="off"></td>
                </tr>
                <td style="width: 460px;"><b> Oc o Ticket: </b><input type="text" name="ticket" class="p_red"
                        style="width: 155px;"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))"
                        maxlength="10" autocomplete="off"></td>
                </tr>

        </table>
        <table style="margin-top: -10px;">
            <tr>
                <center>
                    <h2>DATOS DEL USUARIO</h2>
                </center>
            </tr>
        </table>
        <table style="margin-top: -10px;">

            <tr>
                <td colspan="1" style='width: 140px;'><b>Fecha: </b><input type="text" name="fecha" class="fecha"
                        onkeypress="return ((event.charCode === 47) || (event.charCode >= 48 && event.charCode <= 57))"
                        maxlength="10" autocomplete="off" placeholder="dd/mm/yyyy" required></td>
                <td colspan="5" style='width: 560px;'><b>Nombre del Usuario: </b><input type="text" class="nombre"
                        name="nombre"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))"
                        maxlength="60" autocomplete="off" required></td>
            </tr>

            <tr>
                <td colspan="1"><b>Propiedad del Equipo: </b><select class="propiedad" name="propiedad">
                        <option>Seleccionar</option>
                        <option>Colsubsidio</option>
                        <option>PCCOM</option>
                        <option>Otro</option>
                    </select></td>
                <td colspan="2" style='width: 290px;'><b># Identificación: </b><input type="text" class="cedula"
                        name="cedula" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                        autocomplete="off" required></td>
                <td colspan="3"><b># Celular: </b><input type="text" class="celular" name="celular"
                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="12"
                        autocomplete="off" required></td>
            </tr>
            <tr>
                <td colspan="1"><b>Cargo: </b><input type="text" class="cargo" name="cargo"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))"
                        maxlength="60" autocomplete="off" required></td>
                <td colspan="2"><b>Centro de costos: </b><input type="text" class="costos" name="costos"
                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="9"
                        autocomplete="off" required></td>
                <td colspan="3"><b>Centro Logistico: </b><input type="text" name="logistico" class="logistico"
                        onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || event.charCode === 32 || event.charCode === 47)"
                        maxlength="10" autocomplete="off"></td>
            </tr>
            <tr>
                <td colspan="1"><b>Sede: </b><input type="text" name="sede" class="sede"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))"
                        maxlength="60" autocomplete="off" required></td>
                <td colspan="2" style='width: 180px;'><b>Dirección: </b><input type="text" name="direccion"
                        class="direccion"
                        onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                        maxlength="60" autocomplete="off" required></td>
                <td colspan="3"><b>Ubicación: </b><input type="text" name="ubicacion" class="ubicacion"
                        onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                        maxlength="60" autocomplete="off" required></td>
            </tr>
            <tr>
                <td colspan="1" style='width: 340px;'><b>Jefe Inmediato: </b><input type="text" name="jefe" class="jefe"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))"
                        maxlength="60" autocomplete="off"></td>
                <td colspan="2"><b>Gerencia: </b><input type="text" class="gerencia" name="gerencia"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))"
                        maxlength="60" autocomplete="off" required></td>
                <td colspan="3"><b>Usuario de red: </b><input type="text" class="red" name="usuario_red"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90))" maxlength="10"
                        autocomplete="off" required></td>
            </tr>
            <tr>
                <td colspan="6"><b>Modalidad de trabajo: </b><select class="modalidad" name="modalidad">
                        <option>Seleccionar</option>
                        <option>Presencial</option>
                        <option>Teletrabajo autonomo</option>
                        <option>Teletrabajo suplementario</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="6"><b>facilidades operativas que se entregan: </b><select class="operativas"
                        name="operativas">
                        <option>Seleccionar</option>
                        <option>Carnet</option>
                        <option>Tarjeta de acceso</option>
                        <option>otros</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="6"><b>Tipo de contrato del usuario: </b><select class="contrato" name="contrato">
                        <option>Seleccionar</option>
                        <option>Trabajador</option>
                        <option>Estudiante en práctica</option>
                        <option>Contratista</option>
                    </select></td>
            </tr>

        </table>

        <table style="margin-top: -10px;">
            <tr>
                <center>
                    <h2>DATOS EQUIPOS, CELULARES Y HERRAMIENTAS DE TRABAJO</h2>
                    <h2>DATOS DEL EQUIPO NUEVO</h2>
                </center>
            </tr>
        </table>
        <table style="margin-top: -10px;">
            <form id="formularion" onsubmit="return validarCheckbox()">
                <tr colspan="1">
                    <td rowspan="3" style='width: 240px;'><b>
                            <center>Tipo de Elemento:</center>
                        </b>
                        <p style="margin-left: 30px;"><b>
                                <center><br>
                                    <required>
                                        Escritorio: <input type="checkbox" name="desktop_n"><br>
                                        Portatil: <input type="checkbox" name="laptop_n"><br>
                                        Tablet: <input type="checkbox" name="tablet_n"><br>
                        </p>
                        </center>
                    </td></b>
                    <td><b> Placa: </b></td>
                    <td><b><input class="imput_in" type="text" name="placa_n"
                                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                autocomplete="off" required></b>
                    <td><b>Marca: </b>
                    <td><b><select class="marca_n" name="marca_n">
                                <option></option>
                                <option>HEWLETT-PACKARD</option>
                                <option>LENOVO</option>
                                <option>ASUS</option>
                                <option>ACER</option>
                                <option>DELL</option>
                                <option>TOUCH DYNAMIC</option>
                                <option>APPLE</option>
                            </select></td>

                    <td><b>Disco Duro: (GB) </b>
                    <td><b><input class="imput_in" type="text" name="disco_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                </tr>
                <tr>
                    <td><b> S/N: </b></td>
                    <td><b><input class="imput_in" type="text" name="serial_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                    <td><b>Modelo: </b>
                    <td><b><input class="imput_in" type="text" name="modelo_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                    <td><b>Memoria RAM: </b>
                    <td><b><input class="imput_in" type="text" name="memoria_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                </tr>
                <tr>
                    <td><b> Nombre de Maquina: </b></td>
                    <td><b><input class="imput_in" type="text" name="nombre_equipo_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                    <td><b>MAC: </b>
                    <td><b><input class="imput_in" ty pe="text" name="mac_n"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off" required></b>
                    <td><b>Dirección IP: </b>
                    <td><b><input class="imput_in" type="text" name="ip_n"
                                onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"
                                maxlength="20" autocomplete="off"></b>
                </tr>
                <td rowspan="2" style='width: 240px;'><b>
                        <center>Monitor:</center>
                    </b></td>
                <td><b> Placa: </b></td>
                <td><b><input class="imput_in" type="text" name="placamon_n"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                            autocomplete="off"></b>
                <td><b>Marca: </b>
                <td><b><select class="marca_n" name="marcamon_n">
                            <option></option>
                            <option>HEWLETT-PACKARD</option>
                            <option>LENOVO</option>
                            <option>ASUS</option>
                            <option>ACER</option>
                            <option>DELL</option>
                            <option>TOUCH DYNAMIC</option>
                            <option>APPLE</option>
                        </select></td>

                <td><b>Punto de red: </b>
                <td><b><input class="imput_in" type="text" name="puntored_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                    <tr>
                        <td><b> S/N: </b></td>
                        <td><b><input class="imput_in" type="text" name="serialmon_n"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td><b>Modelo: </b>
                        <td><b><input class="imput_in" type="text" name="modelomon_n"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td colspan="2" style="width: 460px;"><b>
                                <center>ACCESORIOS ASIGNADOS: </center>
                            </b>
                    <tr>
                        <td rowspan="2" style='width: 240px;'><b>
                                <center>Otros Dispositivos: (Si fue asignado celular, relacione numero) Celular:
                                    <input class="imput_in" type="text" name="otroscelular_n" placeholder="Escribir...">
                                </center>
                            </b></td>
                        <td><b> Placa: </b></td>
                        <td><b><input class="imput_in" type="text" name="placaotros_n"
                                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                    autocomplete="off"></b>
                        <td><b>Marca: </b>
                        <td><b><select class="marca_n" name="marcaotros_n"
                                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                    autocomplete="off">
                                    <option></option>
                                    <option>HEWLETT-PACKARD</option>
                                    <option>LENOVO</option>
                                    <option>ASUS</option>
                                    <option>ACER</option>
                                    <option>DELL</option>
                                    <option>TOUCH DYNAMIC</option>
                                    <option>APPLE</option>
                                </select></td>

                        <td colspan="2" rowspan="2" style="width: 460px;"><b>
                                Maletín: <input type="checkbox" name="maletin_n"></option>
                                Base: <input type="checkbox" name="base_n"></option>
                                Teclado: <input type="checkbox" name="teclado_n"></option>
                                Cámara: <input type="checkbox" name="cam_n"></option>
                                Diadema: <input type="checkbox" name="diadema_n"></option>
                                Adaptador: <input type="checkbox" name="adaptador_n"></option>
                                Guaya: <input type="checkbox" name="guaya_n"></option>
                                Docking: <input type="checkbox" name="docking_n"></option>
                                Mouse: <input type="checkbox" name="raton_n"></option>
                                Otro: <input class="imput_in" type="text" name="otros_n" placeholder="Escribir...">
                                </option>
                        </td></b>

                    <tr>
                        <td><b> S/N: </b></td>
                        <td><b><input class="imput_in" type="text" name="serialotros_n"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td><b>Modelo: </b>
                        <td><b><input class="imput_in" type="text" name="modelootros_n"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"> </b>
                    <tr>
                        <td colspan="1" style='width: 240px;'><b>
                                <center>Observaciones: (Estado del equipo asignado por parte del usuario)</center>
                            </b></td>
                        <td colspan="6"><input type="text" name="observacion_n" class="observacion"
                                placeholder="OBSERVACIONES:" autocomplete="off"></td>

                    </tr>


        </table>

        <center>
            <h2>DATOS DEL EQUIPO ANTERIOR (RENOVACIÓN O DEVOLUCIÓN)</h2>
        </center>

        <table style="margin-top: -10px;">
            <form id="formulario+" onsubmit="return validarCheckbox()">
                <tr colspan="1">
                    <td rowspan="3" style='width: 240px;'><b>
                            <center>Tipo de Elemento:</center>
                        </b>
                        <p style="margin-left: 30px;"><b>
                                <center><br>
                                    Escritorio: <input type="checkbox" name="desktop_a"><br>
                                    Portatil: <input type="checkbox" name="laptop_a"><br>
                                    Tablet: <input type="checkbox" name="tablet_a"><br>
                        </p>
                        </center>
                    </td></b>
                    <td><b> Placa: </b></td>
                    <td><b><input class="imput_in" type="text" name="placa_a"
                                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                autocomplete="off"></b>
                    <td><b>Marca: </b>
                    <td><b><select class="marca_n" name="marca_a"
                                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                autocomplete="off">
                                <option></option>
                                <option>HEWLETT-PACKARD</option>
                                <option>LENOVO</option>
                                <option>ASUS</option>
                                <option>ACER</option>
                                <option>DELL</option>
                                <option>TOUCH DYNAMIC</option>
                                <option>APPLE</option>
                            </select></td>

                    <td><b>Disco Duro: (GB) </b>
                    <td><b><input class="imput_in" type="text" name="disco_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                </tr>
                <tr>
                    <td><b> S/N: </b></td>
                    <td><b><input class="imput_in" type="text" name="serial_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                    <td><b>Modelo: </b>
                    <td><b><input class="imput_in" type="text" name="modelo_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                    <td><b>Memoria RAM: </b>
                    <td><b><input class="imput_in" type="text" name="memoria_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                </tr>
                <tr>
                    <td><b> Nombre de Maquina: </b></td>
                    <td><b><input class="imput_in" type="text" name="nombre_equipo_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                    <td><b>MAC: </b>
                    <td><b><input class="imput_in" type="text" name="mac_a"
                                onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                maxlength="60" autocomplete="off"></b>
                    <td><b>Dirección IP: </b>
                    <td><b><input class="imput_in" type="text" name="ip_a"
                                onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"
                                maxlength="20" autocomplete="off"></b>
                </tr>
                <td rowspan="2" style='width: 240px;'><b>
                        <center>Monitor:</center>
                    </b></td>
                <td><b> Placa: </b></td>
                <td><b><input class="imput_in" type="text" name="placamon_a"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                            autocomplete="off"></b>
                <td><b>Marca: </b>
                <td><b><select class="marca_n" name="marcamon_a"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                            autocomplete="off">
                            <option></option>
                            <option>HEWLETT-PACKARD</option>
                            <option>LENOVO</option>
                            <option>ASUS</option>
                            <option>ACER</option>
                            <option>DELL</option>
                            <option>TOUCH DYNAMIC</option>
                            <option>APPLE</option>
                        </select></td>

                <td><b>Punto de red: </b>
                <td><b><input class="imput_in" type="text" name="puntored_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                    <tr>
                        <td><b> S/N: </b></td>
                        <td><b><input class="imput_in" type="text" name="serialmon_a"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td><b>Modelo: </b>
                        <td><b><input class="imput_in" type="text" name="modelomon_a"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td colspan="2" style="width: 460px;"><b>
                                <center>ACCESORIOS RETIRADOS: </center>
                            </b>
                    <tr>
                        <td rowspan="2" style='width: 240px;'><b>
                                <center>Otros Dispositivos: (Si fue asignado celular, relacione numero) Celular:
                                    <input class="imput_in" type="text" name="otroscelular_a" placeholder="Escribir...">
                                </center>
                            </b></td>
                        <td><b> Placa: </b></td>
                        <td><b><input class="imput_in" type="text" name="placaotros_a"
                                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14"
                                    autocomplete="off"></b>
                        <td><b> Marca: </b>
                        <td><b><select class="marca_n" name="marcaotros_a"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off">
                                    <option></option>
                                    <option>HEWLETT-PACKARD</option>
                                    <option>LENOVO</option>
                                    <option>ASUS</option>
                                    <option>ACER</option>
                                    <option>DELL</option>
                                    <option>TOUCH DYNAMIC</option>
                                    <option>APPLE</option>
                                </select></td>
                        <td colspan="2" rowspan="2" style="width: 460px;"><b>
                                Maletín: <input type="checkbox" name="maletin_a"></option>
                                Base: <input type="checkbox" name="base_a"></option>
                                Teclado: <input type="checkbox" name="teclado_a"></option>
                                Cámara: <input type="checkbox" name="cam_a"></option>
                                Diadema: <input type="checkbox" name="diadema_a"></option>
                                Adaptador: <input type="checkbox" name="adaptador_a"></option>
                                Guaya: <input type="checkbox" name="guaya_a"></option>
                                Docking: <input type="checkbox" name="docking_a"></option>
                                Mouse: <input type="checkbox" name="raton_a"></option>
                                Otro: <input class="imput_in" type="text" name="otros_a" placeholder="Escribir...">
                                </option>
                        </td></b>

                    <tr>
                        <td><b> S/N: </b></td>
                        <td><b><input class="imput_in" type="text" name="serialotros_a"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"></b>
                        <td><b>Modelo: </b>
                        <td><b><input class="imput_in" type="text" name="modelootros_a"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                                    maxlength="60" autocomplete="off"> </b>
                    <tr>
                        <td colspan="1" style='width: 240px;'><b>
                                <center>Observaciones: (Estado del equipo asignado por parte del usuario)</center>
                            </b></td>
                        <td colspan="6"><input type="text" name="observacion_a" class="observacion"
                                placeholder="OBSERVACIONES:" autocomplete="off"></td>
                    </tr>

        </table>

        <table style="margin-top: -10px;">
            <tr rowspan="5"><b>
                    <td colspan="2" style='width: 240px;'><b>
                            <center>SOFTWARE</center>
                        </b>
                    <td colspan="1.5" style='width: 240px;'><b>
                            <center>EQUIPO ANTERIOR</center>
                        </b>
                    <td colspan="1.5" style='width: 240px;'><b>
                            <center>EQUIPO NUEVO</center>
                        </b>
                    <td colspan="2" style='width: 240px;'><b>
                            <center>Datos, Correo e Internet</center>
                        </b>
                    <td colspan="2" style='width: 240px;'><b>
                            <center>Tamaño</center>
                        </b>
            </tr>
            <tr rowspan="5">
                <td colspan="2" style="width: 460px;"><b> Sistema Operativo: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="sistema_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="sistema_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b><input class="imput_in" type="text" name="datos"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b><input class="imput_in" type="text" name="tamaño1"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
            </tr>
            <tr rowspan="5">
                <td colspan="2" style="width: 460px;"><b> Activación (Windows / office): </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="activ_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="activ_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b>
                        <center>Tamaño Total de las Unidades de Disco</center>
                    </b>
                <td colspan="2"><b>
                        <center>Tamaño </center>
                    </b>
            </tr>
            <tr rowspan="5">
                <td colspan="2" style="width: 460px;"><b> Versionamiento Office: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="version_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="version_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b> C: <input class="imput_in" name="C"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b><input class="imput_in" type="text" name="tamaño2"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
            </tr>
            <tr rowspan="5">
                <td colspan="2" style="width: 460px;"><b> Agente Antivirus: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="antivirus_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="antivirus_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b> D: <input class="imput_in" name="D"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="2"><b><input class="imput_in" type="text" name="tamaño3"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
            </tr>
            <tr rowspan="5">
                <td colspan="2" style="width: 460px;"><b> Agente system center configuration Manager: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="system_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="system_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="4"><b>
                        <center> PRUEBAS ADICIONALES </center>
                    </b>
            </tr>
            <tr rowspan="7">
                <td colspan="2" style="width: 460px;"><b> Agente Remote Control Viewer: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="remote_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="remote_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1"><b>Ingreso a la Red</b>
                <td colspan="1"><b><input type="checkbox" name="ingresored"></b>
                <td colspan="1"><b>Acceso a OneDrive</b>
                <td colspan="1"><b><input type="checkbox" name="onedrive"></b>
            </tr>
            <tr rowspan="7">
                <td colspan="2" style="width: 460px;"><b> Directiva de Grupo Controlador de Dominio: </b></td>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="dominio_a"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1.5"><b><input class="imput_in" type="text" name="dominio_n"
                            onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))"
                            maxlength="60" autocomplete="off"></b>
                <td colspan="1"><b>Correo Electronico</b>
                <td colspan="1"><b><input type="checkbox" name="email"></b>
                <td colspan="1"><b>Acceso Voice Mail</b>
                <td colspan="1"><b><input type="checkbox" name="voice"></b>
            </tr>
            <tr rowspan="7">
                <td colspan="4.5"></td>
                <td colspan="1"><b>Unidades Mapeadas</b>
                <td colspan="1"><b><input type="checkbox" name="mapeo"></b>
                <td colspan="1"><b>Acceso a Impresora:</b>
                <td colspan="1"><b><input type="checkbox" name="impresora"></b>
            </tr>
            <tr rowspan="7">
                <td colspan="4.5"></td>
                <td colspan="1"><b>Acceso VPN:</b>
                <td colspan="1"><b><input type="checkbox" name="vpn"></b>
                <td colspan="1"><b>Puertos USB:</b>
                <td colspan="1"><b><input type="checkbox" name="usb"></b>
            </tr>
            <tr rowspan="7">
                <td colspan="4.5"></td>
                <td colspan="1"><b>Acceso a SAP</b>
                <td colspan="1"><b><input type="checkbox" name="sap"></b>
                <td colspan="2"><b></b>
            </tr>
            <tr rowspan="5">
                <td colspan="4.5"></td>
                <td colspan="1"><b>Conexiones de Red:</b>
                <td colspan="4"><b><input type="text" class="imput_in" name="conexion" placeholder="Escribir..."></b>
            </tr>
            <tr rowspan="2">
                <td colspan="4"><b>
                        <center>OBSERVACIONES DE LAS APLICACIONES</center>
                    </b>
                <td colspan="4"><b>
                        <center>ELEMENTOS PENDIENTES POR DEVOLVER<center>
                    </b></td>
            <tr>
                <td colspan="4"><input type="text" name="observacionapli" class="observacion"
                        placeholder="OBSERVACIONES:" autocomplete="off"></td>
                <td colspan="4" style="width: 460px;"><b>
                        Maletin: <input type="checkbox" name="maletin_d"></option>
                        Guaya: <input type="checkbox" name="guaya_d"></option>
                        Docking: <input type="checkbox" name="docking_d"></option>
                        Mouse: <input type="checkbox" name="mouse_d"></option>
                        Base: <input type="checkbox" name="base_d"></option>
                        Teclado: <input type="checkbox" name="teclado_d"></option>
                        Cámara: <input type="checkbox" name="camara_d"></option>
                        Diadema: <input type="checkbox" name="diadema_d"></option>
                        Adaptador: <input type="checkbox" name="adaptador_d"></option>
                        Otro: <input class="imput_in" type="text" name="otros_d" placeholder="Escribir..."></option>
                </td></b>
            <tr>></td>
            </tr>
        </table>
        <table>
            <th colspan="10" style="font-size: 13px;"><br>
                El trabajador entiende y acepta con la firma de este documento las siguientes
                clausulas de responsabilidad:
            </th>
            </tr>
            <tr>
                <th colspan="10" style="font-size: 13px;"><br>
                    <a style="color: #DA1C09;">-Responsabilidad en cuanto al cuidado de las herramientas de
                        trabajo:</a><br>
                    Declaro que los elementos determinados anteriormente y que me entrega la empresa como equipos,
                    herramientas y facilidades operativas, salvo observaciones, se encuentran en perfecto estado y
                    estan bajo mi responsabilidad directa y personal. Por lo tanto, en caso de daño, extravio o
                    pérdida total o parcial por causa imputable a mi responsabilidad, por descuido, uso indebido y/o
                    malos tratamientos, pagaré a nombre de CAJA COLOMBIANA DE SUBSIDIO FAMILIAR COLSUBSIDIO el valor
                    correspondiente, de acuerdo con la tasación y valores de referencia comercial determinados por
                    la Corporación. El pago se hará efectivo por las sumas que mediante el pago de salarios y demás
                    derechos laborales me correspondan. En caso de terminar la relación laboral con la Corporación,
                    me comprometo a hacer entrega de los elementos determinados anteriormente en buen estado, salvo
                    por el desgaste normal por uso. En caso contrario, asumiré el costo del equipo, para lo cual
                    autorizo a CAJA COLOMBIANA DE SUBSIDIO FAMILIAR COLSUBSIDIO para que descuente de cualquier
                    derecho laboral que me pueda corresponder, sea de naturaleza salarial, prestacional,
                    indemnizatoria, vacaciones, etc., la totalidad del valor determinado por la Caja, conforme a los
                    articulos 59 y 149 en sus numerales 1 del codigo sustantivo de trabajo, este ultimo modificado
                    por la Ley 1429 de 2010, articulos 18 y 19.<br><br>
                    <a style="color: #DA1C09;">-Responsabilidad en cuanto a medidas de seguridad:</a><br>
                    Comprendo que las herramientas de trabajo estan destinadas para propositos propios de la
                    organización, por tanto, esta prohibido instalar aplicativos personales en estos o realizar
                    sobre las mismas modificaciones sin previa autorización expresa y escrita de la CORPORACIÓN, a
                    través de su área de informática. Aquellos requerimientos especiales para aplicaciones no
                    estándares deben estar acompañados por una justificación de negocio y deben ser manejados solo
                    por personal del área de informática debidamente autorizada. Igualmente, que está prohibido el
                    uso de equipos y software instalado en estos, referido en el párrafo anterior, para crear, bajar
                    en internet o distribuir material ofensivo, inmoral y en general inapropiado. Me comprometo a
                    utilizar los datos de carácter personal a los que tenga acceso, única y exclusivamente para
                    cumplir con las obligaciones laborales y a mantener la confidencialidad de toda la información
                    que llegue a mi conocimiento en virtud del contrato suscrito, comprometiéndome a no comunicar a
                    terceros, ni usar en mi propio provecho, las informaciones de naturaleza reservada que tenga o
                    llegue a conocer y cuya divulgación puede ocasionar perjuicios a la Corporación. Lo anterior,
                    tambien aplica al uso adecuado de claves de usuario a sistemas de información y del software
                    corporativo.<br><br>
                    <a style="color: #DA1C09;">-Responsabilidad en cuanto a medidas de Salud y Seguridad en el
                        trabajo:</a><br>
                    Sé que debo cumplir las condiciones especiales sobre la prevención de riesgos laborales que se
                    encuentran definidas en el Sistema de Seguridad y Salud en el trabajo y hacen parte integral de
                    este documento, las cuales declaro conocer porque me han sido debidamente informadas por parte
                    de la Corporación. por lo tanto, me comprometo igualmente a cumplir con todas las medidas de
                    seguridad y previsión de riesgos y normas de SGSST en relación con el uso de las herramientas de
                    trabajo. Para las personas que estén bajo la modalidad de teletrabajo, el puesto de trabajo en
                    el domicilio o dirección alterna registrada deberá contar con las siguientes condiciones
                    minimas:<br><br>
                    - Contar con un lugar tranquilo, silencioso, preferiblemente con iluminación natural y adecuada
                    ventilación.<br>
                    - Se deben evitar sombras o zonas de penumbra sobre la superficie de trabajo.<br>
                    - Dimensiones sugeridas para la superficie de trabajo: minimo 120 cm. de ancho, 60 cm. de
                    profundidad, 73 -74 cm. de alto.<br>
                    - El espacio por debajo de la superficie debe estar libre de objetos que puedan restringir la
                    movilidad de las piernas.<br>
                    - Superficie de trabajo con acabado mate. No se recomienda vidrio o en piedra.<br>
                    - La silla debe ser de material transpirable, con asiento graduable en altura, espaldar con
                    apoyo dorsolumbar, que permita un adecuado balance corporal y soporte de espalda, muslos y
                    glúteos durante la postura sedente.<br>
                    - Si ha de emplear un equipo portatil, debe contar con teclado y mouse auxiliar a fin de elevar
                    la altura de la pantalla.<br>
                    - La pantalla debe ubicarse de frente al trabajador (no de lado).<br>
                    - El borde superior de la pantalla debe ubicarse al mismo nivel de los ojos y a una distancia
                    entre 50-60 cm. del trabajador.<br>
                    - Debe contar con un apoyo para las muñecas y parte del antebrazo de minimo 15 cm. por delante
                    del teclado y mouse.<br>
                    - El teclado y mouse deben estar a la misma altura y profundidad sobre la superficie de
                    trabajo.<br>
                    - Contar con conexión eléctrica cerca al puesto de teletrabajo, a fin de evitar el uso de
                    extensiones.<br>
                    - Evitar el uso de multitomas sobrecargadas y organizar el cableado por debajo de la superficie
                    de trabajo.<br>
                    - El acceso al puesto de trabajo debe estar libre de cualquier obstaculo.<br>
                </th>
            </tr>
            <tr>
                <td colspan="3" style="color: #DA1C09; font-size: 16px;">Cláusula de tratamiento de datos: </th>
                <td colspan="3"><b><input type="checkbox" name="autorizacion"> Autorizo para recolectar, almacenar y
                        tratar los datos personales suministrados a través de este anexo, conforme lo dispuesto en
                        la ley y demás normatividad aplicable. Igualmente, autorizo la administración de mis datos
                        personales para poder ser contactado para eventos de soporte técnico o consulta de los
                        equipos asignados.</th></b>
            </tr>
            <table>
                <tr>
                    <th style="font-size: 15px;">
                        <center>USUARIO</center>
                    </th>
                    <th style="font-size: 15px;">
                        <center>REPRESENTANTE SOPORTE TI</center>
                    </th>
                </tr>
                <tr>
                    <th style="color: #DA1C09; height: 100px;">Firma: </th>
                    <th style="color: #DA1C09; height: 100px;">Firma: </th>
                </tr>
                <tr>
                    <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmausuario"
                            class="f_usu"
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                            maxlength="60" autocomplete="off" required></th>
                    <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmatecnico"
                            class="f_tec"
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                            maxlength="60" autocomplete="off" required></th>
                </tr>
                <tr>
                    <th style="font-size: 15px;">
                        <center>ATENCIÓN AL TRABAJADOR</center>
                    </th>
                    <th style="font-size: 15px;">
                        <center>JEFE INMEDIATO</center>
                    </th>
                </tr>
                <tr>
                    <th style="color: #DA1C09; height: 100px;">Firma: </th>
                    <th style="color: #DA1C09; height: 100px;">Firma: </th>
                </tr>
                <tr>
                    <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text"
                            name="firmaatencion" class="f_usu"
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                            maxlength="60" autocomplete="off"></th>
                    <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmajefe"
                            class="f_tec"
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))"
                            maxlength="60" autocomplete="off"></th>
                </tr>

                <tr>
            </table>
            <table>
                <th colspan="10" style="font-size: 13px;"><br>
                    <a style="color: #DA1C09;" border-color: transparent;>INSTRUCCIONES: </a><br><br>
                    Los trabajadores bajo la modalidad de trabajo de teletrabajo autónomo que cuenten con equipos y
                    herramientas de propiedad de proveedores deben ser relacionadas en la presente acta.<br>
                    Colsubsidio asigna a cada trabajador a través de su jefe inmediato mediante el presente anexo
                    formal de entrega, las herramientas de trabajo que considere necesarias para garantizar el
                    desarrollo de las funciones o acordará con este el desarrollo de las mismas con sus propios
                    medios segun la modalidad de trabajo y cargo, siguiendo para ello los lineamientos establecidos
                    por la Corporación. A continuación, se encuentran los lineamientos establecidos para el
                    diligenciamiento de la presente acta:<br>
                    1. El trabajador deberá suscribir la presente acta de entrega de equipos, herramientas y
                    facilidades operativas diligenciando todos los campos por escrito.
                    2. El área de TI acompañara al jefe inmediato en la entrega de los equipos y/o herramientas
                    solicitadas por el jefe inmediato firmando la presente acta por medio de su representante.<br>
                    3. El jefe inmediato es el responsable de garantizar la entrega de los equipos, herramientas y
                    facilidades operativas al trabajador.<br>
                    4. El jefe inmediato cargará en el Share Point ACTAS DE ENTREGA FACILIDADES OPERATIVAS; La
                    dependencia de atención al trabajador se encargará del control, chequeo y archivo en hoja de
                    vida.<br><br>
                    <a style="color: #DA1C09;">Teletrabajo autónomo: </a><a>Modalidad en la cual el trabajador
                        labora el 100% de su jornada laboral en su domicilio principal o alterno reportado ante
                        Colsubsidio, dentro de la ciudad en la cual fue vinculado como sede de trabajo.<br>
                        <a style="color: #DA1C09;">Teletrabajo suplementario: </a><a>Modalidad en la cual el
                            trabajador alterna su jornada laboral con trabajo presencial en la sede de Colsubsidio y
                            el domicilio del trabajador registrado.<br>
                            <br>
                            </tr>
            </table>
    </div>
    </div>
</body>
<tbody>
    <?php

    if(isset($_GET['btnbuscar'])) {
        $buscaserial = $_GET['buscaserial'];

        $sql = $conexion->query(" select * from datosdeusuario, equiponuevo, equipoanterior, where placa_n, placa_a like '%$buscaserial' ");

        while ($row = $sql->fetch_object()) { ?>
    
        <tr>
            <td><?= $datos->asignacion ?></td>
            <td><?= $datos->renovacion ?></td>
            <td><?= $datos->retiro ?></td>
            <td><?= $datos->prestamo ?></td>
            <td><?= $datos->ciudad ?></td>
            <td><?= $datos->ticket ?></td>
            <td><?= $datos->fecha ?></td>
            <td><?= $datos->nombre ?></td>
            <td><?= $datos->propiedad ?></td>
            <td><?= $datos->cedula ?></td>
            <td><?= $datos->celular ?></td>
            <td><?= $datos->cargo ?></td>
            <td><?= $datos->costos ?></td>
            <td><?= $datos->logistico ?></td>
            <td><?= $datos->sede ?></td>
            <td><?= $datos->direccion ?></td>
            <td><?= $datos->ubicacion ?></td>
            <td><?= $datos->jefe ?></td>
            <td><?= $datos->gerencia ?></td>
            <td><?= $datos->usuario_red ?></td>
            <td><?= $datos->presencial ?></td>
            <td><?= $datos->autonomo ?></td>
            <td><?= $datos->suplementario ?></td>
            <td><?= $datos->carnet ?></td>
            <td><?= $datos->tarjeta ?></td>
            <td><?= $datos->codigo ?></td>
            <td><?= $datos->otros ?></td>
            <td><?= $datos->trabajador ?></td>
            <td><?= $datos->estudiante ?></td>
            <td><?= $datos->contratista ?></td>
            <td><?= $datos->desktop_n ?></td>
            <td><?= $datos->laptop_n ?></td>
            <td><?= $datos->tablet_n ?></td>
            <td><?= htmlspecialchars($datos->placa_n) ?></td>
            <td><?= htmlspecialchars($datos->marca_n) ?></td>
            <td><?= htmlspecialchars($datos->disco_n) ?></td>
            <td><?= htmlspecialchars($datos->serial_n) ?></td>
            <td><?= htmlspecialchars($datos->modelo_n) ?></td>
            <td><?= htmlspecialchars($datos->memoria_n) ?></td>
            <td><?= htmlspecialchars($datos->nombre_equipo_n) ?></td>
            <td><?= htmlspecialchars($datos->mac_n) ?></td>
            <td><?= htmlspecialchars($datos->ip_n) ?></td>
            <td><?= htmlspecialchars($datos->placamon_n) ?></td>
            <td><?= htmlspecialchars($datos->marcamon_n) ?></td>
            <td><?= htmlspecialchars($datos->puntored_n) ?></td>
            <td><?= htmlspecialchars($datos->serialmon_n) ?></td>
            <td><?= htmlspecialchars($datos->modelomon_n) ?></td>
            <td><?= htmlspecialchars($datos->otroscelular_n) ?></td>
            <td><?= htmlspecialchars($datos->placaotros_n) ?></td>
            <td><?= htmlspecialchars($datos->marcaotros_n) ?></td>
            <td><?= $datos->maletin_n ?></td>
            <td><?= $datos->base_n ?></td>
            <td><?= $datos->teclado_n ?></td>
            <td><?= $datos->cam_n ?></td>
            <td><?= $datos->diadema_n ?></td>
            <td><?= $datos->adaptador_n ?></td>
            <td><?= $datos->guaya_n ?></td>
            <td><?= $datos->docking_n ?></td>
            <td><?= $datos->raton_n ?></td>
            <td><?= htmlspecialchars($datos->otros_n) ?></td>
            <td><?= htmlspecialchars($datos->serialotros_n) ?></td>
            <td><?= htmlspecialchars($datos->modelootros_n) ?></td>
            <td><?= htmlspecialchars($datos->observacion_n) ?></td>
            <td><?= $datos->desktop_a ?></td>
            <td><?= $datos->laptop_a ?></td>
            <td><?= $datos->tablet_a ?></td>
            <td><?= htmlspecialchars($datos->placa_a) ?></td>
            <td><?= htmlspecialchars($datos->marca_a) ?></td>
            <td><?= htmlspecialchars($datos->disco_a) ?></td>
            <td><?= htmlspecialchars($datos->serial_a) ?></td>
            <td><?= htmlspecialchars($datos->modelo_a) ?></td>
            <td><?= htmlspecialchars($datos->memoria_a) ?></td>
            <td><?= htmlspecialchars($datos->nombre_equipo_a) ?></td>
            <td><?= htmlspecialchars($datos->mac_a) ?></td>
            <td><?= htmlspecialchars($datos->ip_a) ?></td>
            <td><?= htmlspecialchars($datos->placamon_a) ?></td>
            <td><?= htmlspecialchars($datos->marcamon_a) ?></td>
            <td><?= htmlspecialchars($datos->puntored_a) ?></td>
            <td><?= htmlspecialchars($datos->serialmon_a) ?></td>
            <td><?= htmlspecialchars($datos->modelomon_a) ?></td>
            <td><?= htmlspecialchars($datos->otroscelular_a) ?></td>
            <td><?= htmlspecialchars($datos->placaotros_a) ?></td>
            <td><?= htmlspecialchars($datos->marcaotros_a) ?></td>
            <td><?= $datos->maletin_a ?></td>
            <td><?= $datos->base_a ?></td>
            <td><?= $datos->teclado_a ?></td>
            <td><?= $datos->cam_a ?></td>
            <td><?= $datos->diadema_a ?></td>
            <td><?= $datos->adaptador_a ?></td>
            <td><?= $datos->guaya_a ?></td>
            <td><?= $datos->docking_a ?></td>
            <td><?= $datos->raton_a ?></td>
            <td><?= htmlspecialchars($datos->otros_a) ?></td>
            <td><?= htmlspecialchars($datos->serialotros_a) ?></td>
            <td><?= htmlspecialchars($datos->modelootros_a) ?></td>
            <td><?= htmlspecialchars($datos->observacion_a) ?></td>
            <td><?= htmlspecialchars($datos->sistema_a) ?></td>
            <td><?= htmlspecialchars($datos->sistema_n) ?></td>
            <td><?= htmlspecialchars($datos->datos) ?></td>
            <td><?= htmlspecialchars($datos->tamaño1) ?></td>
            <td><?= htmlspecialchars($datos->activ_a) ?></td>
            <td><?= htmlspecialchars($datos->activ_n) ?></td>
            <td><?= htmlspecialchars($datos->version_a) ?></td>
            <td><?= htmlspecialchars($datos->version_n) ?></td>
            <td><?= htmlspecialchars($datos->C) ?></td>
            <td><?= htmlspecialchars($datos->tamaño2) ?></td>
            <td><?= htmlspecialchars($datos->antivirus_a) ?></td>
            <td><?= htmlspecialchars($datos->antivirus_n) ?></td>
            <td><?= htmlspecialchars($datos->D) ?></td>
            <td><?= htmlspecialchars($datos->tamaño3) ?></td>
            <td><?= htmlspecialchars($datos->system_a) ?></td>
            <td><?= htmlspecialchars($datos->system_n) ?></td>
            <td><?= htmlspecialchars($datos->remote_a) ?></td>
            <td><?= htmlspecialchars($datos->remote_n) ?></td>
            <td><?= $datos->ingresored ?></td>
            <td><?= $datos->onedrive ?></td>
            <td><?= htmlspecialchars($datos->dominio_a) ?></td>
            <td><?= htmlspecialchars($datos->dominio_n) ?></td>
            <td><?= $datos->email ?></td>
            <td><?= $datos->voice ?></td>
            <td><?= $datos->mapeo ?></td>
            <td><?= $datos->impresora ?></td>
            <td><?= $datos->vpn ?></td>
            <td><?= $datos->usb ?></td>
            <td><?= $datos->sap ?></td>
            <td><?= htmlspecialchars($datos->conexion2) ?></td>
            <td><?= htmlspecialchars($datos->observacionapli) ?></td>
            <td><?= $datos->maletin_d ?></td>
            <td><?= $datos->guaya_d ?></td>
            <td><?= $datos->docking_d ?></td>
            <td><?= $datos->mouse_d ?></td>
            <td><?= $datos->base_d ?></td>
            <td><?= $datos->teclado_d ?></td>
            <td><?= $datos->camara_d ?></td>
            <td><?= $datos->diadema_d ?></td>
            <td><?= $datos->adaptador_d ?></td>
            <td><?= htmlspecialchars($datos->otros_d) ?></td>
            <td><?= htmlspecialchars($datos->firmausuario) ?></td>
            <td><?= htmlspecialchars($datos->firmatecnico) ?></td>
            <td><?= htmlspecialchars($datos->firmaatencion) ?></td>
            <td><?= htmlspecialchars($datos->firmajefe) ?></td>

        </tr>
    <?php }
    }
    ?>

</tbody>

</html>