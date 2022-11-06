<?php
//Acceso a la tabla usuario
include 'conexion_be.php';

//Los datos se obtienen bajo el metodo POST
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST ['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena,rol) VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena','2')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location = "../";
    </script>
    ';
}

//Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya esta registrado, intenta con otro diferente");
    window.location = "../";
    </script>
    ';
    exit();
}


//Ejecusion del query y la llave
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado correctamente");
    window.location = "..";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Intentelo de nuevo, usuario no almacenado");
    window.location = "..";
    </script>
    ';
}

mysqli_close($conexion);

?>