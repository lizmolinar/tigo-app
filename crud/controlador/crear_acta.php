<?php

if ($_POST["btnbuscar"]) {
    
    $asignacion = isset($_POST['asignacion']) ? 1 : 0;
    $renovacion = isset($_POST['renovacion']) ? 1 : 0;
    $retiro = isset($_POST['retiro']) ? 1 : 0;
    $prestamo = isset($_POST['prestamo']) ? 1 : 0;
    $ciudad = $_POST['ciudad'];
    $ticket = $_POST['ticket'];
    $fecha = $_POST['fecha'];
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
    $presencial = isset($_POST['presencial']) ? 1 : 0;
    $autonomo = isset($_POST['autonomo']) ? 1 : 0;
    $suplementario = isset($_POST['suplementario']) ? 1 : 0;
    $carnet = isset($_POST['carnet']) ? 1 : 0;
    $tarjeta = isset($_POST['tarjeta']) ? 1 : 0;
    $codigo = isset($_POST['codigo']);
    $otros = isset($_POST['otros']) ? 1 : 0;
    $trabajador = isset($_POST['trabajador']) ? 1 : 0;
    $estudiante = isset($_POST['estudiante']) ? 1 : 0;
    $contratista = isset($_POST['contratista']) ? 1 : 0;

    $desktop_n = isset($_POST['desktop_n']) ? 1 : 0;
    $laptop_n = isset($_POST['laptop_n']) ? 1 : 0;
    $tablet_n = isset($_POST['tablet_n']) ? 1 : 0;
    $placa_n = $_POST['placa_n'];
    $marca_n = $_POST['marca_n'];
    $disco_n = $_POST['disco_n'];
    $serial_n = $_POST['serial_n'];
    $modelo_n = $_POST['modelo_n'];
    $memoria_n = $_POST['memoria_n'];
    $nombre_equipo_n = $_POST['nombre_equipo_n'];
    $mac_n = $_POST['mac_n'];
    $ip_n = $_POST['ip_n'];
    $placamon_n = $_POST['placamon_n'];
    $marcamon_n = $_POST['marcamon_n'];
    $puntored_n = $_POST['puntored_n'];
    $serialmon_n = $_POST['serialmon_n'];
    $modelomon_n = $_POST['modelomon_n'];
    $otroscelular_n = $_POST['otroscelular_n'];
    $placaotros_n = $_POST['placaotros_n'];
    $marcaotros_n = $_POST['marcaotros_n'];
    $maletin_n = isset($_POST['maletin_n']) ? 1 : 0;
    $base_n = isset($_POST['base_n']) ? 1 : 0;
    $teclado_n = isset($_POST['teclado_n']) ? 1 : 0;
    $cam_n = isset($_POST['cam_n']) ? 1 : 0;
    $diadema_n = isset($_POST['diadema_n']) ? 1 : 0;
    $adaptador_n = isset($_POST['adaptador_n']) ? 1 : 0;
    $guaya_n = isset($_POST['guaya_n']) ? 1 : 0;
    $docking_n = isset($_POST['docking_n']) ? 1 : 0;
    $raton_n = isset($_POST['raton_n']) ? 1 : 0;
    $otros_n = $_POST['otros_n'];
    $serialotros_n = $_POST['serialotros_n'];
    $modelootros_n = $_POST['modelootros_n'];
    $observacion_n = $_POST['observacion_n'];

    $desktop_a = isset($_POST['desktop_a']) ? 1 : 0;
    $laptop_a = isset($_POST['laptop_a']) ? 1 : 0;
    $tablet_a = isset($_POST['tablet_a']) ? 1 : 0;
    $placa_a = $_POST['placa_a'];
    $marca_a = $_POST['marca_a'];
    $disco_a = $_POST['disco_a'];
    $serial_a = $_POST['serial_a'];
    $modelo_a = $_POST['modelo_a'];
    $memoria_a = $_POST['memoria_a'];
    $nombre_equipo_a = $_POST['nombre_equipo_a'];
    $mac_a = $_POST['mac_a'];
    $ip_a = $_POST['ip_a'];
    $placamon_a = $_POST['placamon_a'];
    $marcamon_a = $_POST['marcamon_a'];
    $puntored_a = $_POST['puntored_a'];
    $serialmon_a = $_POST['serialmon_a'];
    $modelomon_a = $_POST['modelomon_a'];
    $otroscelular_a = $_POST['otroscelular_a'];
    $placaotros_a = $_POST['placaotros_a'];
    $marcaotros_a = $_POST['marcaotros_a'];
    $maletin_a = isset($_POST['maletin_a']) ? 1 : 0;
    $base_a = isset($_POST['base_a']) ? 1 : 0;
    $teclado_a = isset($_POST['teclado_a']) ? 1 : 0;
    $cam_a = isset($_POST['cam_a']) ? 1 : 0;
    $diadema_a = isset($_POST['diadema_a']) ? 1 : 0;
    $adaptador_a = isset($_POST['adaptador_a']) ? 1 : 0;
    $guaya_a = isset($_POST['guaya_a']) ? 1 : 0;
    $docking_a = isset($_POST['docking_a']) ? 1 : 0;
    $raton_a = isset($_POST['raton_a']) ? 1 : 0;
    $otros_a = $_POST['otros_a'];
    $serialotros_a = $_POST['serialotros_a'];
    $modelootros_a = $_POST['modelootros_a'];
    $observacion_a = $_POST['observacion_a'];

    $sistema_a = $_POST['sistema_a'];
    $sistema_n = $_POST['sistema_n'];
    $datos = $_POST['datos'];
    $tamaño1 = $_POST['tamaño1'];
    $activ_a = $_POST['activ_a'];
    $activ_n = $_POST['activ_n'];
    $version_a = $_POST['version_a'];
    $version_n = $_POST['version_n'];
    $C = $_POST['C'];
    $tamaño2 = $_POST['tamaño2'];
    $antivirus_a = $_POST['antivirus_a'];
    $antivirus_n = $_POST['antivirus_n'];
    $D = $_POST['D'];
    $tamaño3 = $_POST['tamaño3'];
    $system_a = $_POST['system_a'];
    $system_n = $_POST['system_n'];
    $remote_a = $_POST['remote_a'];
    $remote_n = $_POST['remote_n'];
    $ingresored = isset($_POST['ingresored']) ? 1 : 0;
    $onedrive = isset($_POST['onedrive']) ? 1 : 0;
    $dominio_a = $_POST['dominio_a'];
    $dominio_n = $_POST['dominio_n'];
    $email = isset($_POST['email']) ? 1 : 0;
    $voice = isset($_POST['voice']) ? 1 : 0;
    $mapeo = isset($_POST['mapeo']) ? 1 : 0;
    $impresora = isset($_POST['impresora']) ? 1 : 0;
    $vpn = isset($_POST['vpn']) ? 1 : 0;
    $usb = isset($_POST['usb']) ? 1 : 0;
    $sap = isset($_POST['sap']) ? 1 : 0;
    $conexion2 = isset($_POST['conexion2']) ? $_POST['conexion2'] : '';
    $observacionapli = $_POST['observacionapli'];
    $maletin_d = isset($_POST['maletin_d']) ? 1 : 0;
    $guaya_d = isset($_POST['guaya_d']) ? 1 : 0;
    $docking_d = isset($_POST['docking_d']) ? 1 : 0;
    $mouse_d = isset($_POST['mouse_d']) ? 1 : 0;
    $base_d = isset($_POST['base_d']) ? 1 : 0;
    $teclado_d = isset($_POST['teclado_d']) ? 1 : 0;
    $camara_d = isset($_POST['camara_d']) ? 1 : 0;
    $diadema_d = isset($_POST['diadema_d']) ? 1 : 0;
    $adaptador_d = isset($_POST['adaptador_d']) ? 1 : 0;
    $otros_d = $_POST['otros_d'];

    $firmausuario = $_POST['firmausuario'];
    $firmatecnico = $_POST['firmatecnico'];
    $firmaatencion = $_POST['firmaatencion'];
    $firmajefe = $_POST['firmajefe'];

    $sql_datosdeusuario = "INSERT INTO datosdeusuario (asignacion, renovacion, retiro, prestamo, ciudad, ticket, fecha, nombre, propiedad, cedula, celular, cargo, costos, logistico, sede, direccion, ubicacion, jefe, gerencia, usuario_red, presencial, autonomo, suplementario, carnet, tarjeta, codigo, otros, trabajador, estudiante, contratista) VALUES ('$asignacion', '$renovacion', '$retiro', '$prestamo', '$ciudad', '$ticket', '$fecha', '$nombre', '$propiedad', '$cedula', '$celular', '$cargo', '$costos', '$logistico', '$sede', '$direccion', '$ubicacion', '$jefe', '$gerencia', '$usuario_red', '$presencial', '$autonomo', '$suplementario', '$carnet', '$tarjeta', '$codigo', '$otros', '$trabajador', '$estudiante', '$contratista')";
    mysqli_query($conexion, $sql_datosdeusuario);

    $sql_equiponuevo = "INSERT INTO equiponuevo (desktop_n, laptop_n, tablet_n, placa_n, marca_n, disco_n, serial_n, modelo_n, memoria_n, nombre_equipo_n, mac_n, ip_n, placamon_n, marcamon_n, puntored_n, serialmon_n, modelomon_n, otroscelular_n, placaotros_n, marcaotros_n, maletin_n, base_n, teclado_n, cam_n, diadema_n, adaptador_n, guaya_n, docking_n, raton_n, otros_n, serialotros_n, modelootros_n, observacion_n) VALUES ('$desktop_n', '$laptop_n', '$tablet_n', '$placa_n', '$marca_n', '$disco_n', '$serial_n', '$modelo_n', '$memoria_n', '$nombre_equipo_n', '$mac_n', '$ip_n', '$placamon_n', '$marcamon_n', '$puntored_n', '$serialmon_n', '$modelomon_n', '$otroscelular_n', '$placaotros_n', '$marcaotros_n', '$maletin_n', '$base_n', '$teclado_n', '$cam_n', '$diadema_n', '$adaptador_n', '$guaya_n', '$docking_n', '$raton_n', '$otros_n', '$serialotros_n', '$modelootros_n', '$observacion_n')";
    mysqli_query($conexion, $sql_equiponuevo);

    $sql_equipoanterior = "INSERT INTO equipoanterior (desktop_a, laptop_a, tablet_a, placa_a, marca_a, disco_a, serial_a, modelo_a, memoria_a, nombre_equipo_a, mac_a, ip_a, placamon_a, marcamon_a, puntored_a, serialmon_a, modelomon_a, otroscelular_a, placaotros_a, marcaotros_a, maletin_a, base_a, teclado_a, cam_a, diadema_a, adaptador_a, guaya_a, docking_a, raton_a, otros_a, serialotros_a, modelootros_a, observacion_a) VALUES ('$desktop_a', '$laptop_a', '$tablet_a', '$placa_a', '$marca_a', '$disco_a', '$serial_a', '$modelo_a', '$memoria_a', '$nombre_equipo_a', '$mac_a', '$ip_a', '$placamon_a', '$marcamon_a', '$puntored_a', '$serialmon_a', '$modelomon_a', '$otroscelular_a', '$placaotros_a', '$marcaotros_a', '$maletin_a', '$base_a', '$teclado_a', '$cam_a', '$diadema_a', '$adaptador_a', '$guaya_a', '$docking_a', '$raton_a', '$otros_a', '$serialotros_a', '$modelootros_a', '$observacion_a')";
    mysqli_query($conexion, $sql_equipoanterior);

    $sql_aplicaciones = "INSERT INTO aplicaciones (sistema_a, sistema_n, datos, tamaño1, activ_a, activ_n, version_a, version_n, C, tamaño2, antivirus_a, antivirus_n, D, tamaño3, system_a, system_n, remote_a, remote_n, ingresored, onedrive, dominio_a, dominio_n, email, voice, mapeo, impresora, vpn, usb, sap, conexion2, observacionapli  , maletin_d, guaya_d, docking_d, mouse_d, base_d, teclado_d, camara_d, diadema_d, adaptador_d, otros_d) VALUES ('$sistema_a', '$sistema_n', '$datos', '$tamaño1', '$activ_a', '$activ_n', '$version_a', '$version_n', '$C', '$tamaño2', '$antivirus_a', '$antivirus_n', '$D', '$tamaño3', '$system_a', '$system_n', '$remote_a', '$remote_n', '$ingresored', '$onedrive', '$dominio_a', '$dominio_n', '$email', '$voice', '$mapeo', '$impresora', '$vpn', '$usb', '$sap', '$conexion2', '$observacionapli', '$maletin_d', '$guaya_d', '$docking_d', '$mouse_d', '$base_d', '$teclado_d', '$camara_d', '$diadema_d', '$adaptador_d', '$otros_d')";
    mysqli_query($conexion, $sql_aplicaciones);

    $sql_firmas = "INSERT INTO firmas (firmausuario, firmatecnico, firmaatencion, firmajefe) VALUES ('$firmausuario', '$firmatecnico', '$firmaatencion', '$firmajefe')";
    mysqli_query($conexion, $sql_firmas);

    if ($sql == 1) {
        echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al registrar usuario</div>';
    }

} else {
    echo '<div class="alert alert-warning">ALGUNO DE LOS CAMPOS ESTÁ VACÍO</div>';
}


?>