 <!-- conexion a base de datos para mostrar tabla-->
 <?php
include '../controlador/conexion.php';

  $consulta=ConsultarInstructor($_GET['Id']);

  function ConsultarInstructor($Id_inst)
  {
    include '../controlador/conexion.php';
    $sql="SELECT * FROM instructor, ficha where instructor.idInstructor='".$Id_inst."' and instructor.FichaAsignada=ficha.idFICHA";
    $result=mysqli_query($conn,$sql);
    $mostrar=mysqli_fetch_assoc($result);
    return [

      $mostrar['idInstructor'], 
      $mostrar['NombreInstructor'], //1
      $mostrar['ApellidosInstructor'], //2
      $mostrar['Cedula'], //3
      $mostrar['Telefono'], //4
      $mostrar['Asignatura'], //5
      $mostrar['FichaAsignada'], //6

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
  </ul>
</nav>
<br>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Editar Instructor</h1> </span>
  		<br>
	  <form action="../controlador/editainstructor.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
       
      <input type="hidden" name="idInstructor" value="<?php echo $consulta[0];?> ">
  		
    <!--  <label>Id usuario:</label>
  		<input type="int" id="id_usuario" name="id_usuario"; value="<?php # echo $consulta[0] ?>" ><br>-->

      <label>Nombre:</label>
  		<input type="text" id="NombreInstructor" name="NombreInstructor"; value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Apellido:</label>
  		<input type="text" id="ApellidosInstructor" name="ApellidosInstructor" value="<?php echo $consulta[2] ?>"><br>

  		<label>Cedula:</label>
  		<input type="int" id="Cedula" name="Cedula" value="<?php echo $consulta[3] ?>"><br>


      <label>Telefono:</label>
  		<input type="int" id="Telefono" name="Telefono" value="<?php echo $consulta[4] ?>"><br>
  		
      <label>Asignatura:</label>
  		<input type="text" id="Asignatura" name="Asignatura" value="<?php echo $consulta[5] ?>"><br>

      

<!-- MYSQL se llama la tabla "ficha" -->
<?php
  include '../controlador/conexion.php';
  $ficha="SELECT * from ficha";
  $fi=mysqli_query($conn,$ficha);
?>

  <p>Ficha:<select name= "FichaAsignada">
  <option value="<?php echo $consulta[6]?>"><?php echo $consulta[6]?></option>
                            <?php while($row=mysqli_fetch_array($fi))
                            {?> 

                             <option value="<?php echo $row['idFICHA'];?>"><?php echo $row['idFICHA'];?></option>
                            <?php
                            }
                            ?>

                     </select></p><br>


  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div> 
  	
  </div>


</div>


</body>
</html>