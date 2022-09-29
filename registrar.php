<?php
include('db.php');

if(!empty($_POST)) {
$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$consulta = mysqli_query($conexion, "INSERT INTO `usuario` (`ID`, `usuario`, `contraseña`) VALUES (NULL, '$usuario', '$pass')");

if($consulta > 0){
    header("location: index.php");

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
    <title> Registro Todo Chido</title>
</head>
<body>
    <div class="form-body">
        <img src="img/219983.png" alt="user-login">
        <p class="text">Registro de Usuario</p>
        <form  action="" method="post"  class="login-form">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="password">
            <input  type="submit" value="ingresar" name="entrar">
            <br>
        </form>
    </div>
</body>
</html>