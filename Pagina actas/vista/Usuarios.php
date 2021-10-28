  <!-- conexion a base de datos para mostrar tabña usuarios-->
  <?php
include '../controlador/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<div id="princi"> 

<div id="i">
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



<div class="container">
      
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Contraseña</th>
		    <th>Id_cargo</th>
        <th>Editar/eliminar</th>
      </tr>
    </thead>
<!-- conexion con base de datos-->
    <?php
    $sql="SELECT * FROM usuarios";
    $result= mysqli_query($conn,$sql);

    while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tbody>
      <tr>
        <td><?php echo $mostrar['nombre']?></td>
        <td><?php echo $mostrar['usuario']?></td>
        <td><?php echo $mostrar['contrasena']?></td>
		    <td><?php echo $mostrar['id_cargo']?></td>
        <td><a href=""><button type="button" class="btn btn-outline-warning">Editar</button></a><a href=""><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
      </tr>
    </tbody>
    <?php
    }
    ?>

  </table>
</div>

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