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
  
<div id="principal2" class = "jumbotron jumbontron-fluid" > 

  <div id="uju2">

  <div class="login-wrap">
	<div class="login-html">
		
<label for="tab-2" class="tab"><h2>Registrar ficha</h2></label>
<form  action="../controlador/nuevaficha.php" method="POST">

  <p>Numero de ficha:<input type="int" name="ficha" placeholder=" ejemplo: 2061..."></p>
  <p>Fecha inicio lectiva:<input type="date" name="iniciolectiva" ></p>
  <p>Fecha fin lectiva:<input type="date" name="finlectiva" ></p>
  <p>Fecha terminacion ficha:<input type="date" name="fechatermino" ></p>


  <?php
  include '../controlador/conexion.php';
  $progra="SELECT * from programa";
  $pr=mysqli_query($conn,$progra);
?>

  <p>Ficha:<select name= "programa">
  <option value="0">Seleccione</option>
                            <?php while($row=mysqli_fetch_array($pr))
                            {?> 

                             <option value="<?php echo $row['idPrograma'];?>"><?php echo $row['NombrePrograma'];?></option>
                            <?php
                            }
                            ?>

                     </select></p>


<!-- MYSQL se llama la tabla "nivel formacion" -->
<?php
  include '../controlador/conexion.php';
  $nivel="SELECT * from `nivel _formacion`";
  $ni=mysqli_query($conn,$nivel);
?>

  <p>Nivel programa:<select name= "nivelf">
  <option value="0">Seleccione</option>
                            <?php while($row=mysqli_fetch_array($ni))
                            {?> 

                             <option value="<?php echo $row['idNivelFormacion'];?>"><?php echo $row['NombreNivel'];?></option>
                            <?php
                            }
                            ?>

                    </select>
  </p>


                     
  <p><input type="submit" value="Registrar" name="registrar"></p>
</form>
		</div>
	</div>

</div>

<footer class= "main-footer">
  <div class="float-none d-none d-sm-block">
    <div style="background-color: chocolate; 
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
    </div>
</div> 
</footer>
</div>
</div>


</body>
</html>
