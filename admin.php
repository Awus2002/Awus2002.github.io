<?php
session_start();
if (@!$_SESSION['nombre_completo']) {
    header("Location: index.php");
}elseif ($_SESSION['rol']== 2) {
    header("Location: Bienvenido.php");
}
?>

<!DOCTYPE HTML>
<html lang= "en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-s calable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Sitio del Administrador</title>   
</head>

<body>
<nav class="nav-menu">
		<div class="logo-menu">
        <h2 class="nombre-pagina">Stack Solution</h2>
		<div class="menu">
			<li><a href="php/desconectar.php"><button>Cerrar Sesión</button></a></li>
	</div>

		<center>
			<h3 class="subtitulo">¡Bienvenida Maia!</h3>
		</center>
		
		<p>Lista de Usuarios Registrados...</p>
</div>
</nav>
	<?php

		require('php/conexion_be.php');
		$sql=("SELECT * FROM usuarios");
		$query=mysqli_query($conexion,$sql);

		echo "<table border='1';>";
					echo "<tr class='warning'>";
						echo "<td>id</td>";
						echo "<td>nombre_completo</td>";
						echo "<td>correo</td>";
						echo "<td>usuario</td>";
						echo "<td>contrasena</td>";
						echo "<td>rol</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
	  ?>

		<?php 
			while($arreglo=mysqli_fetch_array($query)){
				echo "<tr class='success'>";
				    echo "<td>$arreglo[0]</td>";
				    echo "<td>$arreglo[1]</td>";
				    echo "<td>$arreglo[2]</td>";
				    echo "<td>$arreglo[3]</td>";
				    echo "<td>$arreglo[4]</td>";
					echo "<td>$arreglo[5]</td>";

				    echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM usuarios WHERE id=$id";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
							
				



	



</body>
</html>
