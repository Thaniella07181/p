<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Contenedor de todo -->
  <div id="principal"> 
      <!-- LContenedor de body hasta antes del footer -->
		   <div id="cen">
         <!-- Imagen -->
	   		<img src="../img/headercenigraf.jpg" alt="cenigraf" >


            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                      <!-- Nombre del rol -->   <!-- Logo administrador -->
                      <img src="../img/avatar.png" alt="Avatar" class="avatar" style= " vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;"> <br>
                       <a class="navbar-brand" href="../vista/admin.php" > ADMINISTRADOR</a>
  
                  <!-- Barra de navegacion -->

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
    <li class="nav-item">
      <a class="nav-link" href="../vista/editor.php">Editor usuarios</a>
    </li>
  </ul>
</nav>
 <!-- mensaje final prueba-->
<div id="principal">

<h1>Se subio acta exitosamente</h1>
</div>



<footer style="background-color: chocolate; color: black;    font-size: 12px;
        margin:0;
        width: 1050px;
        height: 130px;
        position: relative;
        left: -85px;
        margin-top: 119px;     
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
</div>
</div>


</body>
</html>

