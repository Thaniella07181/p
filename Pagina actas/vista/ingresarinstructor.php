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

    
       
       <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Registro</a>
                   <div class="dropdown-menu">
                   <a class="dropdown-item" href="../vista/ingresaraprendiz.php">Ingresar Aprendiz</a>
                   <a class="dropdown-item" href="../vista/ingresarficha.php">Ingresar Ficha </a>
                   <a class="dropdown-item" href="../vista/ingresarinstructor.php">Ingresar Instructor </a>
                   </div>
              </li>
        
              <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tablas consolidadas</a>
                   <div class="dropdown-menu">
                   <a class="dropdown-item" href="../vista/tablainstructor.php">Tabla de instructores</a>
                   <a class="dropdown-item" href="../vista/reposteaprendices.php">Tabla de aprendices </a>
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

		 <!-- titulo forulario -->
  <label for="tab-2" class="tab"><h2>Registrar Instructor</h2></label>
     <!-- forulario -->
  <form  action="../controlador/nuevoinstructor.php" method="POST">
  <p>id Instructor:<input type="int" name="idInstructor"></p>
  <p>Nombres:<input type="text" name="NombreInstructor" placeholder="Nombres completos"></p>
  <p>Apellidos:<input type="text" name="ApellidosInstructor" placeholder="Apellidos completos"></p>
  <p>Cedula:<input type="int" name="Cedula" placeholder="Numero de documento"></p>
  <p>Numero de tel/cel:<input type="int" name="Telefono" placeholder="Numero de celular"></p>
  <p>Asignatura:<input type="text" name="Asignatura" ></p>


<!-- MYSQL se llama la tabla "ficha" -->
<?php
  include '../controlador/conexion.php';
  $ficha="SELECT * from ficha";
  $fi=mysqli_query($conn,$ficha);
?>

  <p>Ficha:<select name= "FichaAsignada">
  <option value="0">Seleccione</option>
                            <?php while($row=mysqli_fetch_array($fi))
                            {?> 

                             <option value="<?php echo $row['idFICHA'];?>"><?php echo $row['idFICHA'];?></option>
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
