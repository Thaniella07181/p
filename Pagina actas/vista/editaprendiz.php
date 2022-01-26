 <!-- conexion a base de datos para mostrar tabla-->
 <?php
include '../controlador/conexion.php';

  $consulta=ConsultarAprendiz($_GET['Id']);

  function ConsultarAprendiz($Id_apr)
  {
    include '../controlador/conexion.php';
    $sql="SELECT * FROM aprendiz,estadoa,ficha,programa,`nivel _formacion`,instructor where aprendiz.idAprendiz='".$Id_apr."' and aprendiz.EstadoA_idEstadoA=estadoa.idEstadoA and aprendiz.FICHA_idFICHA=ficha.idFICHA and aprendiz.FICHA_Programa_idPrograma=programa.idPrograma and aprendiz.`FICHA_Programa_Nivel Formacion_idNivel Formacion`=`nivel _formacion`.`idNivelFormacion` and aprendiz.Instructor_idInstructor=instructor.idInstructor";
    $result=mysqli_query($conn,$sql);
    $mostrar=mysqli_fetch_assoc($result);
    return [

      $mostrar['idAprendiz'], 
      $mostrar['NombreAPrendiz'],
      $mostrar['ApellidoAPrendiz'],
      $mostrar['Tipo_documento_identificacion'],
      $mostrar['Documento_identificacion'],
      $mostrar['EmailAprendiz'],
      $mostrar['TelAprendiz'],
      $mostrar['FIELectiva'],
      $mostrar['FFELectiva'],
      $mostrar['FIProductiva'],
      $mostrar['FFEProductiva'],
      $mostrar['EstadoAPCA'],
      $mostrar['TipoAlternativa'],
      $mostrar['NombreEmpresa'],
      $mostrar['EstadoA'],
      $mostrar['idFICHA'],
      $mostrar['NombrePrograma'],
      $mostrar['NombreNivel'],
      $mostrar['NombreInstructor']
     
    ];

  }


?>
<!DOCTYPE html>
<html>
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

<!--Contenedor de todo-->
<div>
  <!--Contenedor imagen-->
  <div>
  <img src="../img/headercenigraf.jpg" alt="cenigraf" >
  <div id="nave">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Logo administrador -->
 <img src="../img/avatar.png" alt="Avatar" class="avatar" style= " vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;"> <br>
                       <a class="navbar-brand" href="../vista/admin.php"> ADMINISTRADOR</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../vista/editor.php">Registrar Usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../vista/Usuarios.php"> Editar Usuarios</a>
    </li>
  </ul>
</nav>
<br>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Editar Aprendiz</h1> </span>
  		<br>
	  <form action="../controlador/editaprendiz.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
       
      <input type="hidden" name="idAprendiz" value="<?php echo $_GET['idAprendiz'];?> ">
  		
    <!--  <label>Id usuario:</label>
  		<input type="int" id="id_usuario" name="id_usuario"; value="<?php # echo $consulta[0] ?>" ><br>-->

      <label>Nombre:</label>
  		<input type="text" id="NombreAPrendiz" name="NombreAPrendiz"; value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Apellido:</label>
  		<input type="text" id="ApellidoAPrendiz" name="ApellidoAPrendiz" value="<?php echo $consulta[2] ?>"><br>

      <label>Tipo documento:</label>
      <select name="Tipo_documento_identificacion">
        <option value="<?php echo $consulta[3] ?>"><?php echo $consulta[3] ?></option>
        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
        <option value=" Cedula de ciudadania">Cedula de extranjeria</option>
        <option value="PEP">PEP</option>
      </select><br>

  		<label>Documento identificacion:</label>
  		<input type="int" id="Documento_identificacion" name="Documento_identificacion" value="<?php echo $consulta[4] ?>"><br>


      <label>Email:</label>
  		<input type="text" id="EmailAprendiz" name="EmailAprendiz" value="<?php echo $consulta[5] ?>"><br>
  		
      <label>Tel/Cel:</label>
  		<input type="int" id="TelAprendiz" name="TelAprendiz" value="<?php echo $consulta[6] ?>"><br>

      <label>Fecha inicio E.Lectiva:</label>
  		<input type="date" id="FIELectiva" name="FIELectiva" value="<?php echo $consulta[7] ?>"><br>


      <label>Fecha fin E.Lectiva:</label>
  		<input type="date" id="FFELectiva" name="FFELectiva" value="<?php echo $consulta[8] ?>"><br>

      <label>Fecha inicio E.Productiva:</label>
  		<input type="date" id="FIProductiva" name="FIProductiva" value="<?php echo $consulta[9] ?>"><br>

      <label>Fecha fin E.Productiva:</label>
  		<input type="date" id="FFEProductiva" name="FFEProductiva" value="<?php echo $consulta[10] ?>"><br>

      <label>Estado APCA:</label>
      <select name="EstadoAPCA">
        <option value="<?php echo $consulta[11] ?>"><?php echo $consulta[11] ?></option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
      </select><br>

      <label>Tipo de alternativa:</label>
      <select name="TipoAlternativa">
        <option value="<?php echo $consulta[12] ?>">  <?php echo $consulta[12]; ?>  </option>
        <option value="Contrato de aprendizaje">Contrato de aprendizaje</option>
        <option value="Vinculo contractual">Vinculo contractual</option>
        <option value="Pasantia">Pasantia</option>
        <option value="Apoyo a una institucion">Apoyo a una institucion</option>
        <option value="Proyecto productivo">Proyecto productivo</option>
        <option value="Unidad productiva familiar">Unidad productiva familiar</option>
        <option value="Monitoria">Monitoria</option>
      </select><br>

      <label>Nombre empresa:</label>
  		<input type="text" id="NombreEmpresa" name="NombreEmpresa" value="<?php echo $consulta[13] ?>"><br>


      <!-- MYSQL se llama la tabla "EstadoA" -->

<?php
  include '../controlador/conexion.php';
  $estadoa="SELECT * from estadoa";
  $es=mysqli_query($conn,$estadoa);
?>

  <p>Estado <select name= "estadoA">
  <option value="<?php echo $consulta[14]?>"><?php echo $consulta[14]?></option>
                            <?php while($row=mysqli_fetch_array($es))
                            {?> 

                             <option value="<?php echo $row['idEstadoA'];?>"><?php echo $row['EstadoA'];?></option>
                            <?php
                            }
                            ?>

            </select><br>
  </p>



<!-- MYSQL se llama la tabla "ficha" -->
<?php
  include '../controlador/conexion.php';
  $ficha="SELECT * from ficha";
  $fi=mysqli_query($conn,$ficha);
?>

  <p>Ficha:<select name= "ficha">
  <option value="<?php echo $consulta[15]?>"><?php echo $consulta[15]?></option>
                            <?php while($row=mysqli_fetch_array($fi))
                            {?> 

                             <option value="<?php echo $row['idFICHA'];?>"><?php echo $row['idFICHA'];?></option>
                            <?php
                            }
                            ?>

                     </select></p><br>




<!-- MYSQL se llama la tabla "programa" -->
<?php
  include '../controlador/conexion.php';
  $programa="SELECT * from programa";
  $pro=mysqli_query($conn,$programa);
?>

  <p>Programa:<select name= "programa">
  <option value="<?php echo $consulta[16] ?>"><?php echo $consulta[16] ?></option>
                            <?php while($row=mysqli_fetch_array($pro))
                            {?> 

                             <option value="<?php echo $row['idPrograma'];?>"><?php echo $row['NombrePrograma'];?></option>
                            <?php
                            }
                            ?>

              </select>
  </p>
  <br>



<!-- MYSQL se llama la tabla "nivel formacion" -->
<?php
  include '../controlador/conexion.php';
  $nivel="SELECT * from `nivel _formacion`";
  $ni=mysqli_query($conn,$nivel);
?>

  <p>Nivel programa:<select name= "nivel">
  <option value="<?php echo $consulta[17] ?>"><?php echo $consulta[17] ?></option>
                            <?php while($row=mysqli_fetch_array($ni))
                            {?> 

                             <option value="<?php echo $row['idNivelFormacion'];?>"><?php echo $row['NombreNivel'];?></option>
                            <?php
                            }
                            ?>

                    </select>
  </p>
  <br>



<!-- MYSQL se llama la tabla "instructor" -->
<?php
  include '../controlador/conexion.php';
  $instructor="SELECT * from instructor";
  $ins=mysqli_query($conn,$instructor);
?>

  <p>Instructor:<select name= "instructor">
  <option value="<?php echo $consulta[18] ?>"><?php echo $consulta[18] ?></option>
                            <?php while($row=mysqli_fetch_array($ins))
                            {?> 

                             <option value="<?php echo $row['idInstructor'];?>"><?php echo $row['NombreInstructor'];?></option>
                            <?php
                            }
                            ?>

                     </select></p>
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div> 
  	
  </div>


</div>


</body>
</html>