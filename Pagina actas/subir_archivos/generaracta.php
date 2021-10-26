<?php	
  $formatos = array('.jpg', '.png', '.docx', '.xlsx');
   $directorio = "archivos";
  if (isset($_POST['boton'])){
  	$nombreArchivo = $_FILES['archivo']['name'];
  	$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
  	$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
  	if (in_array($ext, $formatos)) {
  		if (move_uploaded_file($nombreTmpArchivo, "archivos/$nombreArchivo"))
  			echo "Felicidades, archivo $nombreArchivo subido exitosamente";    
  		}else{
  			echo "Ocurrio un error.";
  		}
  	}else{
  		echo "Archivo no permitido";
  	}
?>	
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Generador de actas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
      <div class="caja">
        <h1>Archivos existentes en el directorio</h1>
        <?php
           if ($dir = opendir($directorio)) {
            while ($archivo = readdir($dir)) {
              if ($archivo != '.' && $archivo !='..') {
              echo "Archivo: <strong>$archivo</strong> <br />";
              }
            }
           }
        ?>
      </div>
     <div class="caja">
     	<form method="post" action="" enctype="multipart/form-data">
     		<h1>Subiendo Archivos</h1>
     		<input type="file" name="archivo" /><br />
     		<input type="submit" value="Subir archivo" name="boton"/>
     	</form>

     </div>
</body>
</html>