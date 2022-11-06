<?php
//include("conexion_be.php");

session_start();
	require("conexion_be.php");

	$username=$_POST['correo'];
	$pass=$_POST['contrasena'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['contrasena']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre_completo']=$f2['nombre_completo'];
			$_SESSION['rol']=$f2['rol'];

			echo "<script>location.href='../admin.php'</script>";

		}
	}


	$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasena']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre_completo']=$f['nombre_completo'];
			$_SESSION['rol']=$f['rol'];

			header("Location: ../Bienvenido.php");
		}else{
			echo '<script> alert ("CONTRASEÑA INCORRECTA") </script>';
		
			echo "<script>location.href='../index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRATE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}

?>