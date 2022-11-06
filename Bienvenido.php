<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre_completo']) {
    header("Location: index.php");
}elseif ($_SESSION['rol']==1) {
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-s calable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>¡Bienvenido!</title>

	<link rel="stylesheet" type="text/css" href="estilos/css/estilo2.css">
	<script src="https://kit.fontawesome.com/a855c71824.js" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="nav-menu">
		<div class="logo-menu">
        <h2 class="nombre-pagina">Stack Solutión</h2>

	</div>
	<div class="menu">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Mi perfil</a></li>
			<li><a href="php/desconectar.php"> Cerrar Sesión </a></li> 
	</div>
	</nav>

	<div class="container">
		<br><br><br><br>
	<section style="background-color:#2e92de ;">
	<div class="container">
		<br><br><br><br>
	<section style="background-color:#2e92de ;">

		<h1 id="titulo">¡Gracias por Registrarte!</h1>
		<p class="texto">A continuación, podrás encontrar una lista con las materias de Primaria y Secundaria.
		</p>
		<p class="texto">Comenzemos por primaria!</p>
		<ul class="texto"><li>Matemática</li></ul>
		<ul class="texto"><li>Lengua</li></ul>
		<ul class="texto"><li>Tecnología</li></ul>
		<ul class="texto"><li>Inglés</li></ul>
		<ul class="texto"><li>Ciencias Nat.</li></ul>
		<ul class="texto"><li>Ciencias Soc.</li></ul>

		<p class="combinacion">Ahora, seguimos con Secundaría!</p>

		<ul class="texto"><li>Matemática</li></ul>
		<ul class="texto"><li>Lengua y Lit.</li></ul>
		<ul class="texto"><li>Biología</li></ul>
		<ul class="texto"><li>Lengua Extranjera</li></ul>
		<ul class="texto"><li>Geografía</li></ul>
		<ul class="texto"><li>Sociología</li></ul>
		
	</section>
	
	



	<footer class="pie-pagina">
		<div class="grupo-1">
			<div class="box">
				<figure>
					<a href="#">
						<img src="img/img-icono-foter.png" alt="logo-foter">
					</a>
				</figure>
			</div>
			<div class="box">
				<h2>SOBRE NOSOTROS</h2>
				<p class="pie-pagina-text">Somos un grupo de alumnos de 6°"C" de la E.E.T.P N° 322 </p>
				<p class="pie-pagina-text">Esta página es parte de nuestro Proyecto Final</p>
			</div>
			<div class="box">
				<h2>SEGUIME</h2>
				<div class="red-social">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="grupo-2">
			<small>&copy; 2022 <b>Stack Solotión</b> -Todos los derechos de los autores están reservados</small>
		</div>
		</footer>
</body>
</html>

	