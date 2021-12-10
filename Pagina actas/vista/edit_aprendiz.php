<!-- conexion a base de datos para mostrar tabla usuarios-->
<?php
include '../controlador/conexion.php';

  $consulta=ConsultarUsuario($_GET['Id']);

  function ConsultarUsuario($Id_usu)
  {
    include '../controlador/conexion.php';
    $sql="SELECT * FROM usuarios,cargo WHERE usuarios.id_cargo=cargo.Id  and  usuarios.Id='".$Id_usu."' ";
    $result=mysqli_query($conn,$sql);
    $mostrar=mysqli_fetch_assoc($result);
    return [

      $mostrar['Id'],
      $mostrar['nombre'],
      $mostrar['usuario'],
      $mostrar['email'],
      $mostrar['contrasena'],
      $mostrar['id_cargo'],
      $mostrar['descripcion']
     
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
  		<span> <h1>Editar Usuarios</h1> </span>
  		<br>
	  <form action="../controlador/edit2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
       
      <input type="hidden" name="Id" value="<?php echo $_GET['Id'];?> ">
  		
    <!--  <label>Id usuario:</label>
  		<input type="int" id="id_usuario" name="id_usuario"; value="<?php # echo $consulta[0] ?>" ><br>-->

      <label>Nombre:</label>
  		<input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Usuario:</label>
  		<input type="text" id="usuario" name="usuario" value="<?php echo $consulta[2] ?>"><br>

      <label>Email:</label>
  		<input type="text" id="email" name="email" value="<?php echo $consulta[3] ?>"><br>
  		
  		<label>Contraseña </label>
  		<input type="password" id="contraseña" name="contrasena" value="<?php echo $consulta[4] ?>"><br>
  		
  		
      <label>Id cargo:</label>
  	<!--	<input type="int" id="cargo" name="cargo" value="<?php echo $consulta[5] ?>"><br>-->
      <select name="cargo">
        <option value="<?php echo $consulta[5] ?>"><?php echo $consulta[6] ?></option>
        <option value="1">Administrador</option>
        <option value="2">Instructor</option>
      </select>

  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div> 
  	
  </div>


</div>


</body>
</html>