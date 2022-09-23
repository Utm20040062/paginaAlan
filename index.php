<?php
include('db.php');

if(!empty($_POST)) {
$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$consulta = mysqli_query($conexion, "SELECT * FROM usuario where usuario = '$usuario' and contraseña ='$pass'");
$resultado= mysqli_num_rows( $consulta);

if($resultado > 0){
    header("location: hom.php");

}else {
    echo "El usuario no existe";
} 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title> Login Todo Chido</title>
</head>
<body>
    <div class="form-body">
        <img src="img/219983.png" alt="user-login">
        <p class="text">Bienvenido Usuario</p>
        <form  action="" method="post"  class="login-form">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="password">
            <input  type="submit" value="ingresar" name="entrar">
        </form>
    </div>
</body>
</html>