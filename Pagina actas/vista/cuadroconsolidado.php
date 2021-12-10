<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> tabla informacion consolidada </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body  style=" margin:0;
               color:#0a0b0f;
               background: rgba(255, 230, 192, 0.966);
               font:600 16px/18px 'Open Sans',sans-serif;">

      <!-- Contenedor de todo -->
       <div id="wrapper"> 

     <!-- Contenedor de body hasta antes del footer -->
		   <div id="cen">

         <!-- Imagen -->
          <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
            <div class="container">
              <center>
                <img src="../img/headercenigraf.jpg" alt="cenigraf" >
              </center>
            </div>
        </div>
                  <!-- Barra de navegacion -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<!-- Nombre del rol -->   <!-- Logo administrador -->
 <img src="../img/avatar.png" alt="Avatar" class="avatar" style= " vertical-align: middle;
                                                                   width: 50px;
                                                                   height: 50px;
                                                                   border-radius: 50%;">  
  <a class="navbar-brand" href="../vista/admin.php" > ADMINISTRADOR</a>

<!-- Opciones de navegacion -->

<ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="#">Actas</a>
        </li>

       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Consulta</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="../vista/consultaAprendiz.php">Consulta Aprendiz</a>
            <a class="dropdown-item" href="../vista/consultaFicha.php">Consulta Ficha </a>
            </div>
       </li>
       
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Registro</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="../vista/ingresaraprendiz.php">Ingresar Aprendiz</a>
            <a class="dropdown-item" href="../vista/ingresarficha.php">Ingresar Ficha </a>
            </div>
       </li>

       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tablas consolidadas</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="../vista/cuadroconsolidado.php">Registro de actas</a>
            <a class="dropdown-item" href="../vista/reposteaprendices.php">Reporte de aprendices </a>
            </div>
       </li>
       
       <li class="nav-item">
            <a class="nav-link" href="../vista/editor.php">Usuarios</a>
       </li>
</ul>
</nav>

<!-- fomulario-->

<form>
    <center>
<div style="margin: -45px 0px 0px 0px; overflow: scroll;" class="jumbotron jumbotron-fluid">
  <!-- Contenedor 1 del cabecero del formato de acta-->

<div id="cont1">

    <!-- titulo-->
    <h1>Actas</h1>

<!-- Cierre contenedor 1 del cabecero del formato de acta-->
</div>


<!-- conexion a base de datos para consulta-->
<?php
include '../controlador/conexion.php';

$consul= $conn->query("SELECT * FROM acta");

if ($consul->num_rows > 0) {
       ?>

<!-- Contenedor 6 de tabla final
<div id="cont6">    
        contenedor formulario consulta
           <div id="consul">
            <form  method="post">
              <input type="text" name="buscar">
              <input type="submit" value="buscar">
            </form>
           </div>-->

<!-- Contenedor 6 de tabla final-->
<div id="cont6">    
 

  <table class="table table-hover" style="margin: 0px 0px -60px 0px;">
       <tr> 
        <thead>
        <center>
        <th nowrap>Codigo Acta</th>
        <th nowrap>Ciudad</th>
        <th nowrap>Fecha Acta</th>
        <th nowrap>Hora inicio</th>
        <th nowrap>Hora Final</th> 
        <th nowrap>Lugar/Enlace</th>
        <th nowrap>Agenda</th>                       
        <th nowrap>Objetivos Reunion</th>
        <th nowrap>Participantes</th>
        <th nowrap>ConFicha</th>
        <th nowrap>Verificacion Actas</th>
        <th nowrap>CeAcomite</th>
        <th nowrap>CeActualco</th>
        <th nowrap>Adestacar</th>
        <th nowrap>Id participantes</th>
        <th nowrap>Tipo de Falta</th>
        <th nowrap>Id instructor</th>
        <th nowrap>Editar/eliminar</th>
        </center>
        </thead>
      </tr>
      <tr>
    <tbody>
       <center>
          <?php while ($row =$consul->fetch_array()){?>
        <td nowrap> <center><?php echo $row['CodActa'];?> </center></td>
        <td nowrap> <center><?php echo $row['Ciudad'];?></center></td>
        <td nowrap> <center><?php echo $row['FechaActa'];?></center></td>
        <td nowrap> <center><?php echo $row['HoraInicio'];?></center></td>
        <td nowrap> <center><?php echo $row['HoraFinal'];?></center></td>
        <td nowrap> <center><?php echo $row['Lugar/Enlace'];?></center></center></td>
        <td nowrap> <center><?php echo $row['Agenda'];?></center></td>
        <td nowrap> <center><?php echo $row['ObjetivosReunion'];?></center></td>
        <td nowrap> <center><?php echo $row['Participantes'];?></center></td>
        <td nowrap> <center><?php echo $row['ConFicha'];?></center></td>
        <td nowrap> <center><?php echo $row['VerificacionActas'];?></center></td>
        <td nowrap> <center><?php echo $row['CeAcomite'];?></center></td>
        <td nowrap> <center><?php echo $row['CeActualco'];?></center></td>
        <td nowrap> <center><?php echo $row['Adestacar'];?></center></td>
        <td nowrap> <center><?php echo $row['Participantes_idParticipantes'];?></center></td>
        <td nowrap> <center><?php echo $row['Reporte_falta_TipoFalta_idTipoFalta'];?></center></td>
        <td nowrap> <center><?php echo $row['Reporte_falta_Instructor_idInstructor'];?></center></td>
        </center>
        <?php
          echo "<td> <a href='../vista/edit_acta.php?Id=".$mostrar['Id']."'> <button type='button' class='btn btn-outline-warning'>Editar</button></a> </td>";
          echo "<td> <a href='../controlador/eliminar_acta.php?Id=".$mostrar['Id']."'><button type='button' class='btn btn-outline-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      ?>
    </tbody>
  </tr>
<!-- alerta de "no se encontro el registro"-->

<?php      
     /*else {echo "No se encontro el registro";}*/         
     }  
    }
?>
  <!-- Cierre contenedor 6 de tabla final-->
</table>
</div>  

 <!--Cierre formulario-->
 </div>
 </center>
</form>

 <!-- Cierre contenedor de todo-->
 </div>

 <!--Footer-->
 <center>
<footer style="
        background-color: chocolate; 
        color: black;    
        font-size: 12px;
        margin:0;
        width: 1050px;
        height: 140px;
        position: relative;
        left: -3px;
        margin-top: 5px;
        margin-bottom: 10px;
        background-position: center;">


<p style="padding: 15px 0px 15px 60px;">
Servicio Nacional de Aprendizaje SENA- Centro para la industria de la Comunicación Gráfica Cenigraf - Regional Distrito Capital
<br>
Dirección: Calle 15 # 31 - 42 – Teléfonos: 546 1500 o 596 0100 Ext.: 15 463
<br>
Conmutador Nacional (57 1) 5461500 - Ext.: 15 463
<br>
Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m.
<br>
Atención al ciudadano: Bogotá (57 1) 3430111 - Línea gratuita y resto del país 018000 910270
<br>
Atención al empresario: Bogotá (57 1) 3430101 - Línea gratuita y resto del país 018000 910682
</p>

</footer>
</center>
 <!-- Cierre contenedor de todo-->
 </div>
</body>
</html>