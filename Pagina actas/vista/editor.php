<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor</title>
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
<!-- barra de navegacion -->
 <div id="nave">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <img src="../img/avatar.png" alt="Avatar" class="avatar" style= " vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;"> <br>
                       <a class="navbar-brand" href="../vista/admin.php"> ADMINISTRADOR</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Registrar Usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../vista/Usuarios.php">Editar Usuarios</a>
    </li>
  </ul>
</nav>
<br>
  
<div id="principal2"> 

  <div id="uju2">

  <div class="login-wrap">
	<div class="login-html">
		
<label for="tab-2" class="tab">Registrar</label>
<form  action="../controlador/validacionnuevousuario.php" method="POST">
  <p>Nombre:<input type="text" name="nombre" placeholder="Nombre completo"></p>
  <p>Usuario:<input type="text" name="usuario" placeholder="Nombre de usuario"></p>
  <p>Rol de trabajo: <select name= "rol">
                              <option value= "0"> </option>
                              <option value= "1"> Administrador </option>
                              <option value= "2"> Instructor </option></p>
                     </select></p>
  <p>Contrase??a:<input type="password" name="pass" placeholder="contrase??a"></p>
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
      Servicio Nacional de Aprendizaje SENA- Centro para la industria de la Comunicaci??n Gr??fica Cenigraf - Regional Distrito Capital
      <br>
      Direcci??n: Calle 15 # 31 - 42 ??? Tel??fonos: 546 1500 o 596 0100 Ext.: 15 463
      <br>
      Conmutador Nacional (57 1) 5461500 - Ext.: 15 463
      <br>
      Atenci??n telef??nica: lunes a viernes 7:00 a.m. a 7:00 p.m. - s??bados 8:00 a.m. a 1:00 p.m.
      <br>
      Atenci??n al ciudadano: Bogot?? (57 1) 3430111 - L??nea gratuita y resto del pa??s 018000 910270
      <br>
      Atenci??n al empresario: Bogot?? (57 1) 3430101 - L??nea gratuita y resto del pa??s 018000 910682
      </p>
    </center>
    </div>
</div> 
</footer>
</div>
</div>


</body>
</html>
