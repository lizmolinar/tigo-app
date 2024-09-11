<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buscador por Serial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/acta.css">
    </head>

    <body>
        <form method="POST" action="">
            <label for="serial_n">Buscar por Serial:</label>
            <input type="text" name="serial_n" id="serial_n" required>
            <input type="submit" class="btn-em-b" name="Buscar" value=" Buscar">
            <a href = './index.php'><input type="button" name="btn-em-r" class="btn-em-r" value="    Regresar"></a>  
        </form>
        <p></p>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Buscar'])) {
    
            $where = "";
            $serial = $_POST['serial_n'];
    
            if (!empty($serial)) {
            $where = "WHERE equiponuevo.serial_n LIKE '$serial_n'";
            }
        
            $activar = new conexion();
            $conexion = $activar->conectar();

        ?>

        <>
        <table>
            <thead>
            <tr>
             <td><center><img src="../Imagenes/Logo_colsubsidio.svg" class="imagen2"></center></td>
      </tr>
 

    <table>
        <tr>
          <td colspan="6"><a class="z">ANEXO DE ENTREGAS AL TRABAJADOR DE EQUIPOS, HERRAMIENTAS Y FACILIDADES OPERATIVAS</center></a></td>
          <tr>  
            <td  style='width: 160px;'><b>CIUDAD: </b><input type="text" name="ciudad" class="ciudad" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode === 32 || event.charCode === 193 || event.charCode === 201 || event.charCode === 205 || event.charCode === 211 || event.charCode === 218  || event.charCode === 46)" maxlength="20" placeholder="Escribir..." autocomplete="off" required></td>
            <td style='width: 160px;'><b>TIPO DE ACCIÓN: </b><select class="accion" name="accion" required>
              <option>Seleccionar</option>
              <option>Actualizacion</option>
              <option>Asignacion</option>
              <option>Renovacion</option>
              <option>Prestamo</option>
              <option>Devolucion</option>
              </select></td>
            <td style='width: 140px;'><b>N° TICKET: </b><input type="text" name="ticket" class="ticket" placeholder="Escribir..." onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57)" maxlength="12" autocomplete="off"></td>
          </tr>
        </tr>
    </table>

    <center>
      <h2>DATOS DEL USUARIO</h2>
    </center>

    <table style="margin-top: -10px;">
        <tr>
          <td colspan="1" style='width: 140px;'><b>FECHA: </b><input type="text" name="fecha" class="fecha" onkeypress="return ((event.charCode === 47) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off" placeholder="dd/mm/yyyy" required></td>
          <td colspan="5" style='width: 560px;'><b>NOMBRE USUARIO: </b><input type="text" class="nombre" name="nombre" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
        </tr>

        <tr>
          <td colspan="1"><b>PROPIEDAD: </b><select class="propiedad" name="propiedad" required>
              <option>Seleccionar</option>
              <option>Colsubsidio</option>
              <option>PCCOM</option>
              <option>Otro</option>
              </select></td>
          <td colspan="2" style='width: 290px;'><b>IDENTIFICACION: </b><input type="text" class="cedula" name="cedula" placeholder="Escribir..." onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="14" autocomplete="off" required></td>
          <td colspan="3"><b>CELULAR: </b><input type="text" class="celular" name="celular" placeholder="Escribir..." onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="12" autocomplete="off"></td>
        </tr>
        <tr>
          <td colspan="1"><b>CARGO: </b><input type="text" class="cargo" name="cargo" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
          <td colspan="2"><b>CENTRO DE COSTOS: </b><input type="text" class="costos" name="costos" placeholder="Escribir..." onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="9" autocomplete="off" required></td>
          <td colspan="3"><b>CENTRO LOGISTICO: </b><input type="text" name="logistico" class="logistico" placeholder="Escribir..." onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || event.charCode === 32 || event.charCode === 47)" maxlength="10" autocomplete="off"></td>
        </tr>
        <tr>
          <td colspan="1"><b>SEDE: </b><input type="text" name="sede" class="sede" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
          <td colspan="2" style='width: 180px;'><b>DIRECCIÓN: </b><input type="text" name="direccion" class="direccion" placeholder="Escribir..." onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || (event.charCode === 32) || (event.charCode === 35) || (event.charCode === 45) || (event.charCode === 46) || (event.charCode === 44))" maxlength="60" autocomplete="off" required></td>
          <td colspan="3"><b>UBICACIÓN: </b><input type="text" name="ubicacion" class="ubicacion" placeholder="Escribir..." onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 48 && event.charCode <= 57 || event.charCode === 32)" maxlength="10" autocomplete="off"></td>
        </tr>
        <tr>
          <td colspan="1" style='width: 340px;'><b>JEFE: </b><input type="text" name="jefe" class="jefe" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off"></td>
          <td colspan="2"><b>GERENCIA: </b><input type="text" class="gerencia" name="gerencia" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32))" maxlength="60" autocomplete="off" required></td>
          <td colspan="3"><b>USUARIO DE RED: </b><input type="text" class="red" name="usuario_red" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90))" maxlength="10" autocomplete="off" required></td>
        </tr>
        <tr>
          <td colspan="6" style='width: 160px;'><b>MODALIDAD DE TRABAJO: </b><select class="modalidad" name="" required>
            <option>Seleccionar</option>
            <option>Presencial</option>
            <option>Presencial</option>
            <option>Teletrabajo Autonomo:</option>
            <option>Trabajo Supementario</option>
            </select></td>
        </tr>
        <tr>
          <td colspan="6" style='width: 160px;'><b>FACILIDADES OPERATIVAS QUE SE ENTREGAN: </b><select class="f_operativas" name="" required>
            <option>Seleccionar</option>
            <option>Presencial</option>
            <option>Teletrabajo Autonomo:</option>
            <option>Trabajo Supementario</option>
            </select></td>
        </tr>
        
        <tr>
        <td colspan="6" style='width: 160px;'><b>TIPO DEL CONTRATO DEL USUARIO: </b><select class="t_contrato" name="" required>
            <option>Seleccionar</option>
            <option>Presencial</option>
            <option>Teletrabajo Autonomo:</option>
            <option>Trabajo Supementario</option>
            </select></td>
        
          
        </tr>

        
    </table>

    <table style="margin-top: -20.6px;">
        <tr>
          
          
        </tr>
    </table>

    <center>
      <h2>DATOS EQUIPO NUEVO, ASIGNAR O EN PRÉSTAMO</h2>
    </center>

    <table style="margin-top: -10px;">
      <tr>
      <td rowspan="5" style='width: 240px;'><b>TIPO DE EQUIPO </b><select class="accion1" name="equipo_n" style="font-size: 15.3px; width: 100px;">
          <p style="margin-left: 30px;">
          <option></option>
          <option>Portatil</option>
          <option>Escritorio</option>
          <option>Tablet</option>
          <option>Pos micros</option>
          </select></p></td>
          <td rowspan="2" style='width: 460px;' >
    <b>PLACA: </b><input type="text" name="placa_n" class="placa_n" style="width: 200px;" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td rowspan="2"><b>MARCA: </b><select class="marca_n" name="marca_n">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
         
         <td style="width: 460px;"><b>DISCO DURO: </b><input type="text" name="disco" class="disco" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <tr>
         <td style="width: 460px;"><b>MEMORIA: </b><input type="text" name="memoria" class="memoria" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         </tr>
 
        </tr>
      

      <tr>
        
        <td rowspan="2"><a><b>SERIAL: </b><input type="text" name="serial_n" class="serial_n"  style="width: 200px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="18" autocomplete="off"></a></td>
        <td rowspan="2"><a><b>MODELO: </b><input type="text" name="modelo_n" class="modelo_n"  style="width: 200px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>DIRECCION IP: </b><input type="text" name="" class="ip"  style="width: 165px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <tr>
         <td style="width: 460px;"><b>PUNTO DE RED: </b><input type="text" name="" class="p_red"  style="width: 155px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         </tr>
      </tr>

      <tr>
      <td>
    <a><b>NOMBRE DE EQUIPO: </b><input type="text" name="nombre_equipo_n" class="nombre_equipo_n" style="width: 170px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="15" autocomplete="off"></a> </td>
        <td><a><b>MAC: </b><input type="text" name="mac_n" class="mac_n" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 45))" maxlength="18" autocomplete="off"></a></td>
        <td class="accesorios" style="width: 460px;"><b>ACCESORIOS ASIGNADOS</b></td>    

      </tr>

      <tr>
        
       
        <td rowspan="2"><a><b>MONITOR: </b><input type="text" name="" class="monitor" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>PLACA: </b><input type="text" name="" class="placa_m" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td><b>MARCA: </b><select class="marca_m" name="">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
         
        <tr>
         <td style="width: 460px;"><b>SERIAL: </b><input type="text" name="" class="serial_m" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <td style="width: 460px;"><b>MODELO: </b><input type="text" name="" class="modelo_m" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td> 
        </tr>
      </tr>


      <tr>
        
       
        <td rowspan="2"><a><b>OTROS DISPOSITIVOS:(si fue asignado celilar, relacionar numero) CELULAR: </b><input type="text" name="" class="otro_dispositivo"  style="width: 200px;"onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>PLACA: </b><input type="text" name="" class="placa_o" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td><b>MARCA: </b><select class="marca_o" name="">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
        <tr>
         <td style="width: 460px;"><b>SERIAL: </b><input type="text" name="" class="serial_o" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <td style="width: 460px;"><b>MODELO: </b><input type="text" name="" class="modelo_o" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td> 
        </tr>
      </tr>
         
      <td colspan="6"><input type="text" name="observacion" class="observacion" placeholder="OBSERVACIONES:" autocomplete="off"></td>
      
    </table>

    <center>
      <h2>DATOS EQUIPO ANTIGUO O A RETIRAR</h2>
    </center>

    <table style="margin-top: -10px;">
      <tr>
        <td rowspan="5" style='width: 240px;'><b>TIPO DE EQUIPO </b><select class="accion2" name="equipo_v" style="font-size: 15.3px; width: 100px;">
          <p style="margin-left: 30px;">
          <option></option>
          <option>Portatil</option>
          <option>Escritorio</option>
          <option>Tablet</option>
          <option>Pos micros</option>
          </select></p></center></td>
          <td rowspan="2" style='width: 460px;' >
    <b>PLACA: </b><input type="text" name="placa_v" class="placa_v" style="width: 200px;" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td rowspan="2"><b>MARCA: </b><select class="marca_v" name="marca_v">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
         
         <td style="width: 460px;"><b>DISCO DURO: </b><input type="text" name="disco_v" class="disco_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <tr>
         <td style="width: 460px;"><b>MEMORIA: </b><input type="text" name="memoria_v" class="memoria_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         </tr>
 
        </tr>
      

      <tr>
        
        <td rowspan="2"><a><b>SERIAL: </b><input type="text" name="serial_v" class="serial_v"  style="width: 200px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="18" autocomplete="off"></a></td>
        <td rowspan="2"><a><b>MODELO: </b><input type="text" name="modelo_v" class="modelo_v"  style="width: 200px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>DIRECCION IP: </b><input type="text" name="ip_v" class="ip_v"  style="width: 165px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <tr>
         <td style="width: 460px;"><b>PUNTO DE RED: </b><input type="text" name="p_red_v" class="p_red_v"  style="width: 155px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         </tr>
      </tr>

      <tr>
      <td>
    <a><b>NOMBRE DE EQUIPO: </b><input type="text" name="nombre_equipo_v" class="nombre_equipo_v" style="width: 170px;" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="15" autocomplete="off"></a> </td>
        <td><a><b>MAC: </b><input type="text" name="mac_v" class="mac_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 45))" maxlength="18" autocomplete="off"></a></td>
        <td  class="accesorios"style="width: 460px;"><b>ACCESORIOS RETIRADOS</b></td>    

      </tr>

      <tr>

       
        <td rowspan="2"><a><b>MONITOR: </b><input type="text" name="" class="monitor_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>PLACA: </b><input type="text" name="" class="placa_m_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td><b>MARCA: </b><select class="marca_m_v" name="">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
         
        <tr>
         <td style="width: 460px;"><b>SERIAL: </b><input type="text" name="" class="serial_m_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <td style="width: 460px;"><b>MODELO: </b><input type="text" name="" class="modelo_m_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td> 
        </tr>
      </tr>


      <tr>
        
       
        <td rowspan="2"><a><b>OTROS DISPOSITIVOS:(si fue asignado celilar, relacionar numero) CELULAR: </b><input type="text" name="" class="otro_dispositivo_v"  style="width: 200px;"onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57) || (event.charCode === 32))" maxlength="30" autocomplete="off"></a></td>
        <td style="width: 460px;"><b>PLACA: </b><input type="text" name="" class="placa_o_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
        <td><b>MARCA: </b><select class="marca_o_v" name="">
          <option></option>
          <option>HEWLETT-PACKARD</option>
          <option>LENOVO</option>
          <option>ASUS</option>
          <option>ACER</option>
          <option>DELL</option>
          <option>TOUCH DYNAMIC</option>
          <option>APPLE</option>
         </select></td>
        <tr>
         <td style="width: 460px;"><b>SERIAL: </b><input type="text" name="" class="serial_o_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td>
         <td style="width: 460px;"><b>MODELO: </b><input type="text" name="" class="modelo_o_v" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" autocomplete="off"></td> 
        </tr>
      </tr>
         
      <td colspan="6"><input type="text" name="observacion" class="observacion_v" placeholder="OBSERVACIONES" autocomplete="off"></td>
      
    </table>

    <table>
      <tr>
      <td><input type="text" name="observacion" class="observacion" placeholder="OBSERVACIONES:" autocomplete="off"></td>
      </tr>
      <tr>
        <th>El trabajador entiende y acepta con la firma de este documento las siguientes clausulas de responsabilidad:</th>
      </tr>
      <tr>
        <th style="font-size: 13px;">El trabajador entiende y acepta con la firma de este documento las siguientes clausulas de responsabilidad:<br>
            <a style="color: #DA1C09;">1.</a> Los elementos o activos de TI relacionados anteriormente, son de propiedad de 
            Colsubsidio y por tanto el trabajador tendrá la obligación de devolverlos a su Jefe Inmediato cuando se le 
            solicite o de manera inmediata al momento de terminación de su contrato de trabajo por cualquier causal.<br>
            <a style="color: #DA1C09;">2.</a> El Trabajador declara que recibe los elementos o activos de TI 
            relacionados en buen estado y óptimo funcionamiento y por tal motivo se compromete a darle un adecuado uso para 
            las actividades propias de su cargo.<br>
            <a style="color: #DA1C09;">3.</a> El Trabajador será el responsable del cuidado y custodia de los elementos o 
            activos de TI y de los daños parciales o totales que se causen al activo de TI, como consecuencia de su conducta 
            culposa, dolorosa o de confianza; se buscará mutuo consenso para la reposición del valor del activo cuando se uso 
            indebido y en todo caso se autoriza desde ya y de manera irrevocable a Colsubsidio para que deduzca de su salario, 
            prestaciones sociales o bonificaciones, en vigencia del contrato y ante la terminación del mismo por cualquier causal 
            de retiro, en su liquidación, el valor de la reposición de la pérdida del elemento, cuando la conducta sea dolosa o de confianza.
            Siempre en caso de perdida el trabajador debe entregar a su Jefe Inmediato el denuncio penal colocado ante la Fiscalia 
            General de la Nación o las entidades competentes, junto con los demás documentos que soporten dicho evento.<br>
            <a style="color: #DA1C09;">4.</a> El uso de los elementos o activos de TI deben ser EXCLUSIVAMENTE para trabajo y labores 
            asociadas como trabajador de la Corporación.<br>
            <a style="color: #DA1C09;">5.</a> El Jefe Inmediato del TRABAJADOR es el responsable de adelantar la correspondiente 
            investigación frente a cualquier hecho de pérdida o daño y reportarlo ante Relaciones Laborales.<br>
            <a style="color: #DA1C09;">6.</a> Es deber del Trabajador informar a través de los canales habilitados por Colsubsidio, 
            sobre cualquier traslado de la ubicación original relacionada en la presente acta, de un piso, edificio sede o ciudad a otra.<br>
            <a style="color: #DA1C09;">7.</a> El cumplimiento de culaquiera de las obligaciones contenidas en el presente documento se 
            constituye como una falta grave y una omisión a las obligaciones y prohibiciones que rigen el contrato de trabajo suscrito con 
            la Corporación, en atención a lo establecido en el literal a) del articulo 7 del Decreto Ley 2351 de 1965, norma que subrogó el 
            articulo 62 del C.S.T., y podría generar la terminación de contrato de trabajo con justa causa.<br>
            <a style="color: #DA1C09;">8.</a> La entrega, el uso y el beneficio derivado o que pueda derivarse para el trabajador con la 
            entrega de los elementos referenciados anyeriormente, no constituyen salario ni constituirá factor salarial para ningún efecto laboral, 
            prestacional, indemnizatorio ni parafiscal, de conformidad con lo establecido en los Articulos 15 y 16 de la Ley 59 de 1990 y Articulo 
            17 de la Ley 344 de 1966 o demás normas que las modifiquen o aclaren.
          </th>
        </tr>
        <tr>
          <th style="font-size: 13px;"><center>Cláusula de tratamiento de datos: Autorizo para recolectar, almacenar y tratar los datos personales 
            suministrados a través de esta acta, conforme lo dispuesto en la ley y demás normatividad aplicable. Igualmente, autorizo la 
            administración de mis datos personales para poder ser contactado para eventos de soporte técnico o consulta de los equipos asignados.</center>
          </th>
        </tr>
        <tr>
          <th style="font-size: 13px;"><center>Este documento NO tiene valides si la firma solicitada a continuación no está a puño y letra.</center></th>
        </tr>
      </table>
      <table>
        <tr>
          <th style="font-size: 15px;"><center>USUARIO</center></th>
          <th style="font-size: 15px;"><center>ANALISTA</center></th>
        </tr>
        <tr>
          <th style="color: #DA1C09; height: 100px;">FIRMA: </th>
          <th style="color: #DA1C09; height: 100px;">FIRMA: </th>
        </tr>
        <tr>
        <th style="font-size: 15px;">NOMBRE COMPLETO: <input type="text" name="f_usu" class="f_usu" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off" required></th>
        <th style="font-size: 15px;">NOMBRE COMPLETO: <input type="text" name="f_tec" class="f_tec" placeholder="Escribir..." onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode === 32) || (event.charCode === 47))" maxlength="60" autocomplete="off" required></th>
        </tr>
      </table>
    </form>

<?php

  date_default_timezone_set("America/Bogota");
  $fecha_actual = date("d-m-Y H:i:s");

?>


    public function guardarDatos(){
          try {
            // Suprimir los mensajes de error y advertencias aquí
            error_reporting(0);
      
            $verificar = mysqli_query($this->conexion, "SELECT * FROM equipos, usuarios WHERE SERIAL = '$this->serial_n' AND CEDULA = '$this->cedula';");
            if($verificar->num_rows == 0){
                echo "<div class='mensaje'><center>Error, la cedula o el serial no existen en la base de datos.</center>
                  <a href = '$anterior'><input type='submit' class='btn-em-2' value='  Reintentar'></a></div>";
                
                // Si la CEDULA O EL SERIAL no existe, terminar aquí.
                return;
            }
        
            // Si el SERIAL O LA CEDULA existen en la base de datos, continuar con la inserción en la tabla actas.
            $sql = mysqli_query($this->conexion, "SELECT * FROM actas WHERE SERIAL_A = '$this->serial_n';");
            if($sql->num_rows > 0){
                echo "<div class='mensaje'><center>Error, los datos ya se encuentran en el sistema.</center>
                  <a href='$anterior'><input type='submit' class='btn-em-2' value='  Reintentar'></a></div>";
            } else {

              $guardado = mysqli_query($this->conexion, "INSERT INTO actas (CEDULA, FECHA, FECHA_MODIFICACION, CIUDAD, TIPO_DE_ACCION, 
              N_TICKET, NOMBRE_DEL_USUARIO, CELULAR, CENTRO_DE_COSTOS, GERENCIA, USUARIO_DE_RED, CARGO, SEDE, 
              UBICACION, CENTRO_LOGISTICO, SEGMENTO_DE_RED, DIRECCION, PROPIEDAD, JEFE, TIPO_EQUIPO_A, PLACA_A, 
              SERIAL_A, NOMBRE_EQUIPO_A, MARCA_A, MODELO_A, MAC_A, TIPO_EQUIPO_B, PLACA_B, SERIAL_B, NOMBRE_EQUIPO_B, 
              MARCA_B, MODELO_B, MAC_B, OBSERVACIONES, FIRMA_USUARIO, FIRMA_TECNICO) VALUES ('$this->cedula', 
                  '$this->fecha', '$this->fecha_actual', '$this->ciudad', '$this->accion', '$this->ticket', '$this->nombre', 
                  '$this->celular', '$this->costos', '$this->gerencia', '$this->usuario_red', '$this->cargo', 
                  '$this->sede', '$this->ubicacion', '$this->logistico', '$this->segmento', '$this->direccion', 
                  '$this->propiedad', '$this->jefe', '$this->equipo_n', '$this->placa_n', '$this->serial_n', 
                  '$this->nombre_equipo_n', '$this->marca_n', '$this->modelo_n', '$this->mac_n', '$this->equipo_v', 
                  '$this->placa_v', '$this->serial_v', '$this->nombre_equipo_v', '$this->marca_v', '$this->modelo_v', 
                  '$this->mac_v', '$this->observacion', '$this->firma_usu', '$this->firma_tec');");
                  if ($guardado) {
                    
                    echo "<div class='mensaje'><center>Los datos se han guardado correctamente.</center>
                    <a href='../Inicio.php'><input type='button' class='btn-em' value='    De acuerdo!'></a></div>";
                } else {
                    echo "Error  ".$guardado. "<br>" . mysqli_error($this->conexion);
                }
            }
        } catch (Exception $e) {
          echo "Hubo un error: " . $e->getMessage();
        } finally {
          mysqli_close($this->conexion);
        }
    }
  }
  $consultar = new GuardarVar();
  $consultar->setGuardar($conexion, $fecha, $fecha_actual, $ciudad, $accion, $ticket, $nombre, $cedula, $celular, 
  $costos, $gerencia, $usuario_red, $cargo, $sede, $ubicacion, $logistico, $segmento, $jefe, $direccion, 
  $propiedad, $equipo_n, $placa_n, $marca_n, $serial_n, $modelo_n, $nombre_equipo_n, $mac_n, $equipo_v, 
  $placa_v, $marca_v, $serial_v, $modelo_v, $nombre_equipo_v, $mac_v, $observacion, $firma_usu, $firma_tec);
  $consultar->guardarDatos();
}


</body>
</html>