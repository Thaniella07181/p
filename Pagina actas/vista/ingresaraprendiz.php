<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
      <!-- contenedor principal-->
      <div id="princi"> 


       <!-- imagen baner-->
       <div style = "margin: 0 0 0 0;" class = "jumbotron jumbontron-fluid">
      
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
       
       <li class="nav-item">
            <a class="nav-link" href="../vista/editor.php">Usuarios</a>
       </li>
</ul>
</nav>

<br>

  <!-- Contenedor principal 2-->
  <div id="principal2" class = "jumbotron jumbontron-fluid" style=""> 

  <div id="uju2">

  <div class="login-wrap">

	<div class="login-html">
		
  <label for="tab-2" class="tab"><h2>Registrar Aprendiz:</h2></label>
  <form  action="../controlador/nuevoaprendiz.php" method="POST">
  <p>Nombres:<input type="text" name="nombre" placeholder="Nombres completos"></p>
  <p>Apellidos:<input type="text" name="apellidos" placeholder="Apellidos completos"></p>
  <p>Tipo de documento: <select name= "tipo_documento">
                              <option value= "0"> </option>
                              <option value= "Tarjeta de identidad"> Tarjeta de identidad</option>
                              <option value= "Cedula"> Cedula </option></p>
                     </select></p>
  <p>Numero de documento:<input type="int" name="documento" placeholder="Numero de documento"></p>
  <p>Email:<input type="email" name="email" placeholder="ejemplo@gmail.com"></p>
  <p>Numero de tel/cel:<input type="int" name="telefono" placeholder="Numero de celular"></p>
  <p>Fecha inicio E.Productiva:<input type="date" name="inicio"></p>
  <p>Fecha fin E.Productiva:<input type="date" name="fin"></p>
  <p>Estado APCA:<input type="text" name="estado"></p>
  <p>Tipo de alternativa:<input type="text" name="tipo"></p>
  <p>Nombre Empresa:<input type="text" name="empresa"></p>



<?php
  include '../controlador/conexion.php';
  $estadoa="SELECT * from estadoa";
  $es=mysqli_query($conn,$estadoa);
?>

  <p>Estado <select name= "estadoA">
                            <?php while($row=mysqli_fetch_array($es))
                            {?> 

                             <option value="<?php echo $row['idEstadoA'];?>"><?php echo $row['EstadoA'];?></option>
                            <?php
                            }
                            ?>

            </select>
  </p>




<?php
  include '../controlador/conexion.php';
  $ficha="SELECT * from ficha";
  $fi=mysqli_query($conn,$ficha);
?>

  <p>Ficha:<select name= "ficha">
                            <?php while($row=mysqli_fetch_array($fi))
                            {?> 

                             <option value="<?php echo $row['idFICHA'];?>"><?php echo $row['idFICHA'];?></option>
                            <?php
                            }
                            ?>

                     </select></p>



<?php
  include '../controlador/conexion.php';
  $programa="SELECT * from programa";
  $pro=mysqli_query($conn,$programa);
?>

  <p>Programa:<select name= "programa">
                            <?php while($row=mysqli_fetch_array($pro))
                            {?> 

                             <option value="<?php echo $row['idPrograma'];?>"><?php echo $row['NombrePrograma'];?></option>
                            <?php
                            }
                            ?>

              </select>
  </p>




<?php
  include '../controlador/conexion.php';
  $nivel="SELECT * from `nivel formacion`";
  $ni=mysqli_query($conn,$nivel);
?>

  <p>Nivel programa:<select name= "nivel">
                            <?php while($row=mysqli_fetch_array($ni))
                            {?> 

                             <option value="<?php echo $row['idNivel Formacion'];?>"><?php echo $row['NombreNivel'];?></option>
                            <?php
                            }
                            ?>

                    </select>
  </p>



<?php
  include '../controlador/conexion.php';
  $instructor="SELECT * from instructor";
  $ins=mysqli_query($conn,$instructor);
?>

  <p>Instructor:<select name= "instructo">
                            <?php while($row=mysqli_fetch_array($ins))
                            {?> 

                             <option value="<?php echo $row['idInstructor'];?>"><?php echo $row['NombreInstructor'];?></option>
                            <?php
                            }
                            ?>

                     </select></p>

  

  
  <p><input type="submit" value="Registrar" name="registrar"></p>
</form>
		</div>
	</div>

</div>

<!--footer-->
<footer class= "main-footer">

<!-- Contenedor class="float-none d-none d-sm-block"-->
  <div class="float-none d-none d-sm-block" style="background-color: chocolate; 
                                                   position: relative;
                                                   background-position: center; ">

    <center>
      <p>
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
    </center>
    <!-- Cierre div class="float-none d-none d-sm-block" -->
    </div>
<!-- Cierre footer-->
</footer>
<!-- cierre contenedor principal 2-->
</div>
<!-- cierre contenedor principal 1-->
</div>


</body>
</html>
