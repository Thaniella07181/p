<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="../css/">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container mt-3">
      <img src="../img/headercenigraf.jpg" alt="cenigraf">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead class="theas-inverse">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Archivo</th>
                    </tr> 
                </thead>
                    <?php
                      include '../controlador/conexion.php';
                      $query="SELECT * FROM archivos;";
                      $res=mysqli_query($conn,$query);
                      while( $row=mysqli_fetch_assoc($res)){
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td>
                         <file src="data:<?php echo $row['tipo']; ?>;base64, <?php echo base64_encode($row['archivo']); ?>"> 
                    </td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
