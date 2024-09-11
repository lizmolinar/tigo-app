<?php
      session_start();
      require_once "modelo/conexion.php";
      $anterior=$_SERVER['HTTP_REFERER'];
      $usuario_red2 = $_SESSION['Red'];
      $contraseña = $_SESSION['Contraseña'];
      $activar = new conexion();
      $conexion = $activar->conectar();
      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ACTA DE INVENTARIO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/CrearActa.css">

        <script>
        function validarCheckbox() {
            var Asignación = document.getElementsByName("asignacion")[0];
            var Renovación = document.getElementsByName("renovacion")[0];
            var Retiro = document.getElementsByName("retiro")[0];
            var Prestamo = document.getElementsByName("prestamo")[0];
            var presencial = document.getElementsByName("presencial")[0];
            var autonomo = document.getElementsByName("autonomo")[0];
            var suplementario = document.getElementsByName("suplementario")[0];
            var Carnet = document.getElementsByName("carnet")[0];
            var TarjetadeAcceso = document.getElementsByName("tarjeta")[0];
            var Otros = document.getElementsByName("otros")[0];
            var Trabajador = document.getElementsByName("trabajador")[0];
            var Estudianteenpráctica = document.getElementsByName("estudiante")[0];
            var Contratista = document.getElementsByName("contratista")[0];
            var Escritorion = document.getElementsByName("desktop_n")[0];
            var Portatiln = document.getElementsByName("laptop_n")[0];
            var Tabletn = document.getElementsByName("tablet_n")[0];
            var Escritorioa = document.getElementsByName("desktop_a")[0];
            var Portatila = document.getElementsByName("laptop_a")[0];
            var Tableta = document.getElementsByName("tablet_a")[0];
            
            if (presencial.checked || autonomo.checked || suplementario.checked) {
                return true; 
            } else {    
                alert("Por favor, selecciona al menos una modalidad de trabajo.");
                return false; 
            }
        }
        </script>

      </head>
      <body>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

          <table>
              <tr>
                <td class="a"><a href="sesion.php"><input type="button" name="cerrar" class="btn-em-c" value="  "></a><b style="margin-left: 60px; font-family: cursive; font-size: 15px;">Bienvenid@! <?php echo $usuario_red2;?></b></td>
                <td class="b" style="width: 100px;"><a href="index.html"><input type="button" class="btn-em-r" name="" value="   Regresar"></a>
                <input type="submit" class="Guardar" name="Guardar" value="   Guardar"></td>
              </tr>
          </table>


            <tr>
                  <td><center><img src="Imagenes/Logo_colsubsidio.svg" class="imagen2"></center></td>
            </tr>
          <table>
            <form id="formulario0" onsubmit="return validarCheckbox()">
            <tr>
              <td rowspan="3"><center><b><a class="z"><br>ANEXO DE ENTREGAS AL TRABAJADOR DE EQUIPOS, HERRAMIENTAS Y FACILIDADES OPERATIVAS</center><BR></b></td>
              <td style="width: 460px;"><b> Asignación<input type="checkbox" name="asignacion" ></option>
                        Renovación<input type="checkbox" name="renovacion" ></option>
                        Retiro<input type="checkbox" name="retiro" ></option>
                        Prestamo<input type="checkbox" name="prestamo" ></option></td></b>
              <tr>
              <td style="width: 460px;"><b> Ciudad: </b><input type="text" name="ciudad" class="p_red"  style="width: 155px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
              </tr>
              <td style="width: 460px;"><b> Oc o Ticket: </b><input type="text" name="ticket" class="p_red"  style="width: 155px;"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
              </tr>
        
          </table>
          <center>
            <h2>DATOS DEL USUARIO</h2>
          </center>

          <table style="margin-top: -10px;">
              <tr>
                <td colspan="1" style='width: 140px;'><b>Fecha: </b><input type="text" name="fecha" class="fecha" onkeypress="return ((event.charCode === 47) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off" placeholder="dd/mm/yyyy" required></td>
                <td colspan="5" style='width: 560px;'><b>Nombre del Usuario: </b><input type="text" class="nombre" name="nombre" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
              </tr>

              <tr>
                <td colspan="1"><b>Propiedad del Equipo: </b><select class="propiedad" name="propiedad" >
                    <option>Seleccionar</option>
                    <option>Colsubsidio</option>
                    <option>PCCOM</option>
                    <option>Otro</option>
                    </select></td>
                <td colspan="2" style='width: 290px;'><b># Identificación: </b><input type="text" class="cedula" name="cedula" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" required></td>
                <td colspan="3"><b># Celular: </b><input type="text" class="celular" name="celular"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="12" autocomplete="off" required></td>
              </tr>
              <tr>
                <td colspan="1"><b>Cargo: </b><input type="text" class="cargo" name="cargo"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
                <td colspan="2"><b>Centro de costos: </b><input type="text" class="costos" name="costos"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="9" autocomplete="off" required></td>
                <td colspan="3"><b>Centro Logistico: </b><input type="text" name="logistico" class="logistico"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || event.charCode === 32 || event.charCode === 47)" maxlength="10" autocomplete="off"></td>
              </tr>
              <tr>
                <td colspan="1"><b>Sede: </b><input type="text" name="sede" class="sede"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
                <td colspan="2" style='width: 180px;'><b>Dirección: </b><input type="text" name="direccion" class="direccion" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" required></td>
                <td colspan="3"><b>Ubicación: </b><input type="text" name="ubicacion" class="ubicacion" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" required></td>
              </tr>
              <tr>  
                <td colspan="1" style='width: 340px;'><b>Jefe Inmediato: </b><input type="text" name="jefe" class="jefe"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off"></td>
                <td colspan="2"><b>Gerencia: </b><input type="text" class="gerencia" name="gerencia"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
                <td colspan="3"><b>Usuario de red: </b><input type="text" class="red" name="usuario_red"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90))" maxlength="10" autocomplete="off" required></td>
              </tr>
              <tr>
                <td colspan="6"><b>Modalidad de trabajo: </b><select class="modalidad" name="modalidad" >
                    <option>Seleccionar</option>
                    <option>Presencial</option>
                    <option>Teletrabajo autonomo</option>
                    <option>Teletrabajo suplementario</option>
                    </select></td>
              </tr>
              <tr>
                <td colspan="6"><b>facilidades operativas que se entregan: </b><select class="operativas" name="operativas" >
                    <option>Seleccionar</option>
                    <option>Carnet</option>
                    <option>Tarjeta de acceso</option>
                    <option>otros</option>
                    </select></td>
              </tr>
              <tr>
                <td colspan="6"><b>Tipo de contrato del usuario: </b><select class="contrato" name="contrato" >
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
              <td rowspan="3" style='width: 240px;'><b><center>Tipo de Elemento:</center></b>
                <p style="margin-left: 30px;"><b><center><br><required>
                Escritorio: <input type="checkbox" name="desktop_n"><br>
                Portatil: <input type="checkbox" name="laptop_n"><br>
                Tablet: <input type="checkbox" name="tablet_n"><br>
                </p></center></td></b>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placa_n"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" required></b>
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
              <td><b><input class="imput_in" type="text" name="disco_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              </tr>
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serial_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelo_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Memoria RAM: </b>
              <td><b><input class="imput_in" type="text" name="memoria_n" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              </tr>
              <tr>
              <td><b> Nombre de Maquina: </b></td>
              <td><b><input class="imput_in" type="text" name="nombre_equipo_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>MAC: </b>
              <td><b><input class="imput_in" ty pe="text" name="mac_n" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"  ></b>
              <td><b>Dirección IP: </b>
              <td><b><input class="imput_in" type="text" name="ip_n" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46" maxlength="20" autocomplete="off" ></b>
              </tr>
              <td rowspan="2" style='width: 240px;'><b><center>Monitor:</center></b></td>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placamon_n" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" ></b>
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
              <td><b><input class="imput_in" type="text" name="puntored_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"></b>
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serialmon_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelomon_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2" style="width: 460px;"><b><center>ACCESORIOS ASIGNADOS: </center></b>
              <tr>
              <td rowspan="2" style='width: 240px;'><b><center>Otros Dispositivos: (Si fue asignado celular, relacione numero) Celular: <input class="imput_in" type="text" name="otroscelular_n" placeholder="Escribir..."></center></b></td>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placaotros_n" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off"></b>
              <td><b>Marca: </b>
              <td><b><select class="marca_n" name="marcaotros_n"onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" >
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
                        Maletín: <input type="checkbox" name="maletin_n" ></option>
                        Base: <input type="checkbox" name="base_n" ></option>
                        Teclado: <input type="checkbox" name="teclado_n" ></option>
                        Cámara: <input type="checkbox" name="cam_n"></option>
                        Diadema: <input type="checkbox" name="diadema_n"></option>
                        Adaptador: <input type="checkbox" name="adaptador_n"></option>
                        Guaya: <input type="checkbox" name="guaya_n"></option>
                        Docking: <input type="checkbox" name="docking_n"></option>
                        Mouse: <input type="checkbox" name="raton_n"></option>
                        Otro: <input class="imput_in" type="text" name="otros_n" placeholder="Escribir..."></option></td></b>
              
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serialotros_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelootros_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"> </b>
              <tr>
              <td colspan="1" style='width: 240px;'><b><center>Observaciones: (Estado del equipo asignado por parte del usuario)</center></b></td>
              <td colspan="6"><input type="text" name="observacion_n" class="observacion" placeholder="OBSERVACIONES:" autocomplete="off"></td>
                
            </tr>
            
                
          </table>

          <center>
            <h2>DATOS DEL EQUIPO ANTERIOR (RENOVACIÓN O DEVOLUCIÓN)</h2>
          </center>

          <table style="margin-top: -10px;">
          <form id="formulario+" onsubmit="return validarCheckbox()">
            <tr colspan="1">
              <td rowspan="3" style='width: 240px;'><b><center>Tipo de Elemento:</center></b>
                <p style="margin-left: 30px;"><b><center><br>
                Escritorio: <input type="checkbox" name="desktop_a"><br>
                Portatil: <input type="checkbox" name="laptop_a"><br>
                Tablet: <input type="checkbox" name="tablet_a"><br>
                </p></center></td></b>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placa_a" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off"  ></b>
              <td><b>Marca: </b>
              <td><b><select class="marca_n" name="marca_a"onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" >
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
              <td><b><input class="imput_in" type="text" name="disco_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              </tr>
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serial_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelo_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Memoria RAM: </b>
              <td><b><input class="imput_in" type="text" name="memoria_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              </tr>
              <tr>
              <td><b> Nombre de Maquina: </b></td>
              <td><b><input class="imput_in" type="text" name="nombre_equipo_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>MAC: </b>
              <td><b><input class="imput_in" type="text" name="mac_a" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Dirección IP: </b>
              <td><b><input class="imput_in" type="text" name="ip_a" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46" maxlength="20" autocomplete="off" ></b>
              </tr>
              <td rowspan="2" style='width: 240px;'><b><center>Monitor:</center></b></td>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placamon_a"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" ></b>
              <td><b>Marca: </b>
              <td><b><select class="marca_n" name="marcamon_a" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" >
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
              <td><b><input class="imput_in" type="text" name="puntored_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serialmon_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelomon_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2" style="width: 460px;"><b><center>ACCESORIOS RETIRADOS: </center></b>
              <tr>
              <td rowspan="2" style='width: 240px;'><b><center>Otros Dispositivos: (Si fue asignado celular, relacione numero) Celular: <input class="imput_in" type="text" name="otroscelular_a" placeholder="Escribir..."></center></b></td>
              <td><b> Placa: </b></td>
              <td><b><input class="imput_in" type="text" name="placaotros_a" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" ></b>
              <td><b> Marca: </b>
              <td><b><select class="marca_n" name="marcaotros_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" >
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
                        Maletín: <input type="checkbox" name="maletin_a" ></option>
                        Base: <input type="checkbox" name="base_a" ></option>
                        Teclado: <input type="checkbox" name="teclado_a" ></option>
                        Cámara: <input type="checkbox" name="cam_a"></option>
                        Diadema: <input type="checkbox" name="diadema_a"></option>
                        Adaptador: <input type="checkbox" name="adaptador_a"></option>
                        Guaya: <input type="checkbox" name="guaya_a"></option>
                        Docking: <input type="checkbox" name="docking_a"></option>
                        Mouse: <input type="checkbox" name="raton_a"></option>
                        Otro: <input class="imput_in" type="text" name="otros_a" placeholder="Escribir..."></option></td></b>
              
              <tr>
              <td><b> S/N: </b></td>
              <td><b><input class="imput_in" type="text" name="serialotros_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td><b>Modelo: </b>
              <td><b><input class="imput_in" type="text" name="modelootros_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" > </b>
              <tr>
              <td colspan="1" style='width: 240px;'><b><center>Observaciones: (Estado del equipo asignado por parte del usuario)</center></b></td>
              <td colspan="6"><input type="text" name="observacion_a" class="observacion" placeholder="OBSERVACIONES:" autocomplete="off"></td>
              </tr>
                    
          </table>
          
          <table style="margin-top: -10px;">
          <tr rowspan="5"><b>
              <td colspan="2" style='width: 240px;'><b><center>SOFTWARE</center></b>
              <td colspan="1.5" style='width: 240px;'><b><center>EQUIPO ANTERIOR</center></b>
              <td colspan="1.5" style='width: 240px;'><b><center>EQUIPO NUEVO</center></b>
              <td colspan="2" style='width: 240px;'><b><center>Datos, Correo e Internet</center></b>
              <td colspan="2" style='width: 240px;'><b><center>Tamaño</center></b>
          </tr>    
          <tr rowspan="5">
              <td colspan="2" style="width: 460px;"><b> Sistema Operativo: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="sistema_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="sistema_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b><input class="imput_in" type="text" name="datos"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b><input class="imput_in" type="text" name="tamaño1"    onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
          </tr>
          <tr rowspan="5">
              <td colspan="2" style="width: 460px;"><b> Activación (Windows / office): </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="activ_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="activ_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b><center>Tamaño Total de las Unidades de Disco</center></b>
              <td colspan="2"><b><center>Tamaño </center></b>
          </tr>
          <tr rowspan="5">
              <td colspan="2" style="width: 460px;"><b> Versionamiento Office: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="version_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="version_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b> C: <input class="imput_in" name="C"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b><input class="imput_in" type="text" name="tamaño2"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off"   ></b>
          </tr>
          <tr rowspan="5">  
              <td colspan="2" style="width: 460px;"><b> Agente Antivirus: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="antivirus_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="antivirus_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b> D: <input class="imput_in" name="D"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="2"><b><input class="imput_in" type="text" name="tamaño3"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
          </tr>
          <tr rowspan="5">
              <td colspan="2" style="width: 460px;"><b> Agente system center configuration Manager: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="system_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="system_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="4"><b><center> PRUEBAS ADICIONALES </center></b>
          </tr>
          <tr rowspan="7">    
              <td colspan="2" style="width: 460px;"><b> Agente Remote Control Viewer: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="remote_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="remote_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1"><b>Ingreso a la Red</b>
              <td colspan="1"><b><input type="checkbox" name="ingresored"></b>
              <td colspan="1"><b>Acceso a OneDrive</b>
              <td colspan="1"><b><input type="checkbox" name="onedrive"></b>
          </tr>
          <tr rowspan="7">
              <td colspan="2" style="width: 460px;"><b> Directiva de Grupo Controlador de Dominio: </b></td>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="dominio_a"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1.5"><b><input class="imput_in" type="text" name="dominio_n"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" ></b>
              <td colspan="1"><b>Correo Electronico</b>
              <td colspan="1"><b><input type="checkbox" name="email"></b>
              <td colspan="1"><b>Acceso  Voice Mail</b>
              <td colspan="1"><b><input type="checkbox" name="voice"></b>
          </tr>
          <tr rowspan="7">
              <td colspan="4.5"></td>
              <td colspan="1"><b>Unidades Mapeadas</b>
              <td colspan="1"><b><input type="checkbox" name="mapeo" ></b>
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
              <td colspan="4"><b><center>OBSERVACIONES DE LAS APLICACIONES</center></b>
              <td colspan="4"><b><center>ELEMENTOS PENDIENTES POR DEVOLVER<center></b></td>
          <tr>
              <td colspan="4"><input type="text" name="observacionapli" class="observacion" placeholder="OBSERVACIONES:" autocomplete="off"></td>
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
                        Otro: <input class="imput_in" type="text" name="otros_d" placeholder="Escribir..."></option></td></b>
              <tr>></td> 
          </tr>
          </table>
          <table>
            <tr>
              <th colspan="6">El trabajador entiende y acepta con la firma de este documento las siguientes clausulas de responsabilidad:</th>
            </tr>
            <tr>
              <th colspan="6" style="font-size: 13px;"><br>
                  <a style="color: #DA1C09;">-Responsabilidad en cuanto al cuidado de las herramientas de trabajo:</a><br> 
                  Declaro que los elementos determinados anteriormente y que me entrega la empresa como equipos, herramientas y facilidades operativas, salvo observaciones, se encuentran en perfecto estado y estan bajo mi responsabilidad directa y personal. Por lo tanto, en caso de daño, extravio o pérdida total o parcial por causa imputable a mi responsabilidad, por descuido, uso indebido y/o malos tratamientos, pagaré a nombre de CAJA COLOMBIANA DE SUBSIDIO FAMILIAR COLSUBSIDIO el valor correspondiente, de acuerdo con la tasación y valores de referencia comercial determinados por la Corporación. El pago se hará efectivo por las sumas que mediante el pago de salarios y demás derechos laborales me correspondan. En caso de terminar la relación laboral con la Corporación, me comprometo a hacer entrega de los elementos determinados anteriormente en buen estado, salvo por el desgaste normal por uso. En caso contrario, asumiré el costo del equipo, para lo cual autorizo a CAJA COLOMBIANA DE SUBSIDIO FAMILIAR COLSUBSIDIO para que descuente de cualquier derecho laboral que me pueda corresponder, sea de naturaleza salarial, prestacional, indemnizatoria, vacaciones, etc., la totalidad del valor determinado por la Caja, conforme a los articulos 59 y 149 en sus numerales 1 del codigo sustantivo de trabajo, este ultimo modificado por la Ley 1429 de 2010, articulos 18 y 19.<br><br>
                  <a style="color: #DA1C09;">-Responsabilidad en cuanto a medidas de seguridad:</a><br>
                  Comprendo que las herramientas de trabajo estan destinadas para propositos propios de la organización, por tanto, esta prohibido instalar aplicativos personales en estos o realizar sobre las mismas modificaciones sin previa autorización expresa y escrita de la CORPORACIÓN, a través de su área de informática. Aquellos requerimientos especiales para aplicaciones no estándares deben estar acompañados por una justificación de negocio y deben ser manejados solo por personal del área de informática debidamente autorizada. Igualmente, que está prohibido el uso de equipos y software instalado en estos, referido en el párrafo anterior, para crear, bajar en internet o distribuir material ofensivo, inmoral y en general inapropiado. Me comprometo a utilizar los datos de carácter personal a los que tenga acceso, única y exclusivamente para cumplir con las obligaciones laborales y a mantener la confidencialidad de toda la información que llegue a mi conocimiento en virtud del contrato suscrito, comprometiéndome a no comunicar a terceros, ni usar en mi propio provecho, las informaciones de naturaleza reservada que tenga o llegue a conocer y cuya divulgación puede ocasionar perjuicios a la Corporación. Lo anterior, tambien aplica al uso adecuado de claves de usuario a sistemas de información y del software corporativo.<br><br>
                  <a style="color: #DA1C09;">-Responsabilidad en cuanto a medidas de Salud y Seguridad en el trabajo:</a><br>
                  Sé que debo cumplir las condiciones especiales sobre la prevención de riesgos laborales que se encuentran definidas en el Sistema de Seguridad y Salud en el trabajo y hacen parte integral de este documento, las cuales declaro conocer porque me han sido debidamente informadas por parte de la Corporación. por lo tanto, me comprometo igualmente a cumplir con todas las medidas de seguridad y previsión de riesgos y normas de SGSST en relación con el uso de las herramientas de trabajo. Para las personas que estén bajo la modalidad de teletrabajo, el puesto de trabajo en el domicilio o dirección alterna registrada deberá contar con las siguientes condiciones minimas:<br><br>
                  - Contar con un lugar tranquilo, silencioso, preferiblemente con iluminación natural y adecuada ventilación.<br>
                  - Se deben evitar sombras o zonas de penumbra sobre la superficie de trabajo.<br>
                  - Dimensiones sugeridas para la superficie de trabajo: minimo 120 cm. de ancho, 60 cm. de profundidad, 73 -74 cm. de alto.<br>
                  - El espacio por debajo de la superficie debe estar libre de objetos que puedan restringir la movilidad de las piernas.<br>
                  - Superficie de trabajo con acabado mate. No se recomienda vidrio o en piedra.<br>
                  - La silla debe ser de material transpirable, con asiento graduable en altura, espaldar con apoyo dorsolumbar, que permita un adecuado balance corporal y soporte de espalda, muslos y glúteos durante la postura sedente.<br>
                  - Si ha de emplear un equipo portatil, debe contar con teclado y mouse auxiliar a fin de elevar la altura de la pantalla.<br>
                  - La pantalla debe ubicarse de frente al trabajador (no de lado).<br>
                  - El borde superior de la pantalla debe ubicarse al mismo nivel de los ojos y a una distancia entre 50-60 cm. del trabajador.<br>
                  - Debe contar con un apoyo para las muñecas y parte del antebrazo de minimo 15 cm. por delante del teclado y mouse.<br>
                  - El teclado y mouse deben estar a la misma altura y profundidad sobre la superficie de trabajo.<br>
                  - Contar con conexión eléctrica cerca al puesto de teletrabajo, a fin de evitar el uso de extensiones.<br>
                  - Evitar el uso de multitomas sobrecargadas y organizar el cableado por debajo de la superficie de trabajo.<br>
                  - El acceso al puesto de trabajo debe estar libre de cualquier obstaculo.<br>
              </th>
              </tr>
              <tr>
                <td colspan="3" style="color: #DA1C09; font-size: 16px;">Cláusula de tratamiento de datos: </th> 
                <td colspan="3"><b><input type="checkbox" name="autorizacion">    Autorizo para recolectar, almacenar y tratar los datos personales suministrados a través de este anexo, conforme lo dispuesto en la ley y demás normatividad aplicable. Igualmente, autorizo la administración de mis datos personales para poder ser contactado para eventos de soporte técnico o consulta de los equipos asignados.</th></b>
              </tr>
              <table>
              <tr>
                <th style="font-size: 15px;"><center>USUARIO</center></th>
                <th style="font-size: 15px;"><center>REPRESENTANTE SOPORTE TI</center></th>
              </tr>
              <tr>
                <th style="color: #DA1C09; height: 100px;">Firma: </th>
                <th style="color: #DA1C09; height: 100px;">Firma: </th>
              </tr>
              <tr>
              <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmausuario" class="f_usu"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off" required></th>
              <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmatecnico" class="f_tec"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off" required></th>
              </tr>
              <tr>
                <th style="font-size: 15px;"><center>ATENCIÓN AL TRABAJADOR</center></th>
                <th style="font-size: 15px;"><center>JEFE INMEDIATO</center></th>
              </tr>
              <tr>
                <th style="color: #DA1C09; height: 100px;">Firma: </th>
                <th style="color: #DA1C09; height: 100px;">Firma: </th>
              </tr>
              <tr>
              <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmaatencion" class="f_usu"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off"></th>
              <th style="color: #DA1C09; font-size: 15px;">Nombre completo: <input type="text" name="firmajefe" class="f_tec"  onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off"></th>
              </tr>
            
              <tr>
              </table>
              <table>
              <th colspan="6" style="font-size: 13px;"><br>   
                  <a style="color: #DA1C09;" border-color: transparent; >INSTRUCCIONES: </a><br><br>
                  Los trabajadores bajo la modalidad de trabajo de teletrabajo autónomo que cuenten con equipos y herramientas de propiedad de proveedores deben ser relacionadas en la presente acta.<br>
                  Colsubsidio asigna a cada trabajador a través de su jefe inmediato mediante el presente anexo formal de entrega, las herramientas de trabajo que considere necesarias para garantizar el desarrollo de las funciones o acordará con este el desarrollo de las mismas con sus propios medios segun la modalidad de trabajo y cargo, siguiendo para ello los lineamientos establecidos por la Corporación. A continuación, se encuentran los lineamientos establecidos para el diligenciamiento de la presente acta:<br>
                  1. El trabajador deberá suscribir la presente acta de entrega de equipos, herramientas y facilidades operativas diligenciando todos los campos por escrito.
                  2. El área de TI acompañara al jefe inmediato en la entrega de los equipos y/o herramientas solicitadas por el jefe inmediato firmando la presente acta por medio de su representante.<br>
                  3. El jefe inmediato es el responsable de garantizar la entrega de los equipos, herramientas y facilidades operativas al trabajador.<br>
                  4. El jefe inmediato cargará en el Share Point ACTAS DE ENTREGA FACILIDADES OPERATIVAS; La dependencia de atención al trabajador se encargará del control, chequeo y archivo en hoja de vida.<br><br>
                  <a style="color: #DA1C09;">Teletrabajo autónomo: </a><a>Modalidad en la cual el trabajador labora el 100% de su jornada laboral en su domicilio principal o alterno reportado ante Colsubsidio, dentro de la ciudad en la cual fue vinculado como sede de trabajo.<br>
                  <a style="color: #DA1C09;">Teletrabajo suplementario: </a><a>Modalidad en la cual el trabajador alterna su jornada laboral con trabajo presencial en la sede de Colsubsidio y el domicilio del trabajador registrado.<br>
                  <br>       
              </tr>
              </table>    
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          
            <?php

  date_default_timezone_set("America/Bogota");
  $fecha = date("d-m-Y H:i:s");

  ?>
  
  
 <?php


$conexion = mysqli_connect("localhost", "root", "", "pagina");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
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


    $firmausuario = $_POST['firmausuario'];
    $firmatecnico = $_POST['firmatecnico'];
    $firmaatencion = $_POST['firmaatencion'];
    $firmajefe = $_POST['firmajefe'];

    
    $sql_aplicaciones = "INSERT INTO aplicaciones (sistema_a, sistema_n, datos, tamaño1, activ_a, activ_n, version_a, version_n, C, tamaño2, antivirus_a, antivirus_n, D, tamaño3, system_a, system_n, remote_a, remote_n, ingresored, onedrive, dominio_a, dominio_n, email, voice, mapeo, impresora, vpn, usb, sap, conexion2, observacionapli  , maletin_d, guaya_d, docking_d, mouse_d, base_d, teclado_d, camara_d, diadema_d, adaptador_d, otros_d) VALUES ('$sistema_a', '$sistema_n', '$datos', '$tamaño1', '$activ_a', '$activ_n', '$version_a', '$version_n', '$C', '$tamaño2', '$antivirus_a', '$antivirus_n', '$D', '$tamaño3', '$system_a', '$system_n', '$remote_a', '$remote_n', '$ingresored', '$onedrive', '$dominio_a', '$dominio_n', '$email', '$voice', '$mapeo', '$impresora', '$vpn', '$usb', '$sap', '$conexion2', '$observacionapli', '$maletin_d', '$guaya_d', '$docking_d', '$mouse_d', '$base_d', '$teclado_d', '$camara_d', '$diadema_d', '$adaptador_d', '$otros_d')";
    mysqli_query($conexion, $sql_aplicaciones);

     
    $sql_datosdeusuario = "INSERT INTO datosdeusuario (asignacion, renovacion, retiro, prestamo, ciudad, ticket, fecha, nombre, propiedad, cedula, celular, cargo, costos, logistico, sede, direccion, ubicacion, jefe, gerencia, usuario_red, presencial, autonomo, suplementario, carnet, tarjeta, codigo, otros, trabajador, estudiante, contratista) VALUES ('$asignacion', '$renovacion', '$retiro', '$prestamo', '$ciudad', '$ticket', '$fecha', '$nombre', '$propiedad', '$cedula', '$celular', '$cargo', '$costos', '$logistico', '$sede', '$direccion', '$ubicacion', '$jefe', '$gerencia', '$usuario_red', '$presencial', '$autonomo', '$suplementario', '$carnet', '$tarjeta', '$codigo', '$otros', '$trabajador', '$estudiante', '$contratista')";
    mysqli_query($conexion, $sql_datosdeusuario);

 
    $sql_equipoanterior = "INSERT INTO equipoanterior (desktop_a, laptop_a, tablet_a, placa_a, marca_a, disco_a, serial_a, modelo_a, memoria_a, nombre_equipo_a, mac_a, ip_a, placamon_a, marcamon_a, puntored_a, serialmon_a, modelomon_a, otroscelular_a, placaotros_a, marcaotros_a, maletin_a, base_a, teclado_a, cam_a, diadema_a, adaptador_a, guaya_a, docking_a, raton_a, otros_a, serialotros_a, modelootros_a, observacion_a) VALUES ('$desktop_a', '$laptop_a', '$tablet_a', '$placa_a', '$marca_a', '$disco_a', '$serial_a', '$modelo_a', '$memoria_a', '$nombre_equipo_a', '$mac_a', '$ip_a', '$placamon_a', '$marcamon_a', '$puntored_a', '$serialmon_a', '$modelomon_a', '$otroscelular_a', '$placaotros_a', '$marcaotros_a', '$maletin_a', '$base_a', '$teclado_a', '$cam_a', '$diadema_a', '$adaptador_a', '$guaya_a', '$docking_a', '$raton_a', '$otros_a', '$serialotros_a', '$modelootros_a', '$observacion_a')";
    mysqli_query($conexion, $sql_equipoanterior);

    
    $sql_equiponuevo = "INSERT INTO equiponuevo (desktop_n, laptop_n, tablet_n, placa_n, marca_n, disco_n, serial_n, modelo_n, memoria_n, nombre_equipo_n, mac_n, ip_n, placamon_n, marcamon_n, puntored_n, serialmon_n, modelomon_n, otroscelular_n, placaotros_n, marcaotros_n, maletin_n, base_n, teclado_n, cam_n, diadema_n, adaptador_n, guaya_n, docking_n, raton_n, otros_n, serialotros_n, modelootros_n, observacion_n) VALUES ('$desktop_n', '$laptop_n', '$tablet_n', '$placa_n', '$marca_n', '$disco_n', '$serial_n', '$modelo_n', '$memoria_n', '$nombre_equipo_n', '$mac_n', '$ip_n', '$placamon_n', '$marcamon_n', '$puntored_n', '$serialmon_n', '$modelomon_n', '$otroscelular_n', '$placaotros_n', '$marcaotros_n', '$maletin_n', '$base_n', '$teclado_n', '$cam_n', '$diadema_n', '$adaptador_n', '$guaya_n', '$docking_n', '$raton_n', '$otros_n', '$serialotros_n', '$modelootros_n', '$observacion_n')";
    mysqli_query($conexion, $sql_equiponuevo);

    $sql_equiponuevo = "INSERT INTO firmas (firmausuario, firmatecnico, firmaatencion, firmajefe) VALUES ('$firmausuario', '$firmatecnico', '$firmaatencion', '$firmajefe')";
    mysqli_query($conexion, $sql_equiponuevo);

      
}
  

      mysqli_close($conexion);



?>

                                                                                                                     
</body> 
</form>             