<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acta disciplinaria</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
      <!-- Contenedor de todo -->
       <div id="principal"> 

      <!-- Contenedor de body hasta antes del footer -->
		   <div id="cen">

         <!-- Imagen -->
	   		<img src="../img/headercenigraf.jpg" alt="cenigraf" >
          
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

<!-- fomulario-->
<form>

  <!-- Contenedor 1 del cabecero del formato de acta-->
<div id="cont1">


    <!-- titulo-->
    <h1>Generador de acta</h1>


            <label for="date">Fecha del dia del comite:</label>
            <input type="date"  id="date" placeholder="Enter date" name="date">


            <label for="date">Acta nº:</label>
            <input type="number" id="number" name="number">


            <br><br>


           <label for="nombre">Nombre del comite:</label>
           <input type="text"  id="nomco" name="nombre1">


           <label for="ciudad">Ciudad:</label>
           <input type="text"  id="ciudad" name="ciudad">


           <br><br>


          <label for="lugar">Lugar/enlace:</label>
          <input type="text"  id="lugar" name="lugar">


          <label for="Horai">Hora inicio:</label>
          <input type="time"  id="Horai" name="Horai">


          <br><br>


         <label for="direccion">Direccion general/regional/centro:</label>
         <input type="text"  id="direccion" name="direccion">


        <label for="Horaf">Hora fin:</label>
        <input type="time"  id="Horaf" name="Horaf">

<!-- Cierre contenedor 1 del cabecero del formato de acta-->
</div>


<!-- Contenedor 2 de agenda-->
<div id="cont2">


        <label for="puntos">Agenda o puntos a desarrollar:</label>

        <br>

        <textarea name="comentarios" rows="10" cols="100">Ejemplo: 
                                                          1. Cancelación...</textarea>

 <!-- Cierre contenedor 2 de agenda-->                                                         
</div>


<!-- Contenedor 3 de objetivos-->
<div id="cont3">


        <label for="puntos">Objetivo de la reunión:</label>
        <br>
        <textarea name="comentarios" rows="5" cols="100">Ej: La reunión brinda la oportunidad a los miembros, de exponer sus ideas...</textarea>

 <!-- Cierre contenedor 3 de objetivos-->       
</div>


<!-- Contenedor 4 de desarrollo-->
<div id="cont4">


        <label for="puntos">Desarrollo de la reunión:</label>
        <br>
        <textarea name="comentarios" rows="5" cols="100">Escriba que pasa en la reunión</textarea>

<!-- Cierre contenedor 4 de desarrollo-->
</div>


<!-- Contenedor 5 de conslusiones-->
<div id="cont5">


        <label for="puntos">Conclusiones:</label>
        <br>
        <textarea name="comentarios" rows="5" cols="100">Escriba que se determino finalmente el comite</textarea>

 <!-- Cierre contenedor 5 de conslusiones-->       
</div>


<!-- Contenedor 6 de tabla final-->
<div id="cont6">    
  

  <table class="table table-hover">
  <thead >
      <tr>
        <th>&nbsp</th>
        <th>Compromisos</th>
        <th>&nbsp</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th>Actividad</th>
        <th>Responsable</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Desercion</td>
        <td>Carlos</td>
        <td>20/10/2021</td>
      </tr>
      <tr>
        <td>Cancelacion</td>
        <td>Rafael</td>
        <td>31/10/2021</td>
      </tr>
      <tr>
        <td>Condicionamiento</td>
        <td>Nicole</td>
        <td>08/02/2019</td>
      </tr>
    </tbody>
  </table>

  <!-- Cierre contenedor 6 de tabla final-->
</div>

 <!-- Boton de subir-->
<center>
<button  type="submit" class="btn btn-light" href="../vista/terminoActa.php">Crear acta</button>
</center>

 <!--Cierre formulario-->
</form>


 <!--Footer-->
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

 <!-- Cierre contenedor de todo-->
</div>
</body>
</html>





<!--<div id="contacto">
			 
			  <p>Servicio Nacional de Aprendizaje SENA- Centro para la industria de la Comunicación Gráfica Cenigraf - Regional Distrito Capital
                 Dirección: Calle 15 # 31 - 42 – Teléfonos: 546 1500 o 596 0100 Ext.: 15 463
				Conmutador Nacional (57 1) 5461500 - Ext.: 15 463
				Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m.
				Atención al ciudadano: Bogotá (57 1) 3430111 - Línea gratuita y resto del país 018000 910270
				Atención al empresario: Bogotá (57 1) 3430101 - Línea gratuita y resto del país 018000 910682</p>
		  <div class="line"></div>
</div>-->