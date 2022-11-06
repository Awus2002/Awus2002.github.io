<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre_completo']) {
	header("Location:index.php");
}
?>		
</html>

<?php
extract($_GET);
require('php/conexion_be.php');
$sql="SELECT * FROM usuarios WHERE id=$id";

$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$name=$row[1];
		    	$correo=$row[2];
		    	$user=$row[3];
		    	$pass=$row[4];
          $rol=$row[5];
		    }
		?>


				  
		







