<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</head>

 <!-- Estilos-->
<style>

  table, th, td {
	border: 1px solid black;
	width: 800px;
	position: relative;
  }

</style>

<body id="body" style="	
                margin:0;
	              color:#0a0b0f;
	              background: rgba(255, 230, 192, 0.966);
	              font:600 16px/18px 'Open Sans',sans-serif;">

     <center>
 <!-- contenedor principal-->
   <div id="prin">

      <!-- contenedor de imagen-->
       <div id="img">
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
            <a class="nav-link" href="../vista/admin.php">Actas</a>
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

       <li class="nav-item">
            <a class="nav-link" href="../vista/editor.php">Usuarios</a>
       </li>

          <form method="POST">
       <input class="form-control mr-sm-2" type="text"  name="buscar" placeholder="Numero de ficha">
    <button class="btn btn-outline-warning" type="submit" value="buscar">Buscar</button>
</form>
</ul>
</nav>

          <!-- contenedor titulo-->
          <div id="tit" style="	
                        background-color: chocolate; 
	                      border-color: black;
                        color: black;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                       	margin-top: 110px;">
           <h1>Consulta Ficha</h1>

            <!-- contenedor formulario consulta-->
           <div id="consul" style="	
                            background-color: #e49c3e; 
                          	border-color: black;
                            color: black;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
	                          margin-top: 40px;">
            
<!-- conexion a base de datos para consulta-->
<?php
include '../controlador/conexion.php';

if (isset($_POST['buscar'])){

    if ($_POST['buscar']!="") {
         
   $busqueda=$_POST['buscar'];

    $consul= $conn->query("SELECT * FROM ficha like '%$busqueda%'");
   
    if ($consul->num_rows > 0) {
       while  ($row =$consul->fetch_array()){?>
      

<!-- contenedor de tabla de la consulta-->
 <div class="inter prod" id="tab">

    <html>
      <table  style="background-color:chocolate;
                    margin: 0 278 0 272;
                    margin-top: -22px;">

        <tr>
           <th>idFicha</th>
           <th>FILectiva</th>
           <th>FFLectiva</th>
           <th>FTFicha</th>
           <th>Programa</th>
           <th>Nivel de formacion</th>
        </tr>

        <tr>
           <td><?php echo $row['idFICHA'];?></td>
           <td><?php echo $row['FILectiva'];?></td>
           <td><?php echo $row['FFLectiva'];?></td>
           <td><?php echo $row['FTFicha'];?></td>
           <td><?php echo $row['Programa_idPrograma'];?></td>
           <td><?php echo $row['Programa_Nivel Formacion_idNivel Formacion'];?></td>
        </tr>

      </table>
             
    </html>

     <!-- cierre contenedor de tabla de la consulta-->
    </div>


     <!-- alerta de "no se encontro el registro"-->
<?php
               }      
      } else {
        echo "No se encontro el registro";
      }
   
    }   
  }
?>


            <!-- cierre contenedor formulario consulta-->
           </div>

            <!-- cierre  contenedor de imagen-->
          </div> 

           <!-- cierre contenedor titulo-->
         </div>
     <center>

<br><br><br>

<!--if(isset($_POST['enviar'])){
    $busqueda = $_POST['enviar'];


    $consulta = $conn-> query("SELECT * FROM aprendices WHERE cedula LIKE '%$busqueda%'");
   if($consulta->num_rows>0){
        while ($row=$consulta->fetch_array()){
        echo $row['cedula'];
    }
   }
   
}*/-->



 <!-- cierre contenedor principal-->
</div>


<!-- footer-->
   <footer style="
        background-color: chocolate; 
        color: black;    
        font-size: 12px;
        margin:0;
        width: 1050px;
        height: 130px;
        position: relative;
        left: 10px;
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

</body>

</html>