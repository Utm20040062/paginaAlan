<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contraseña'];


$consulta = "SELECT* FROM usuario where usuario = '$USUARIO' and contraseña ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:hom.html");

}else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>