<?php

include("conexion.php");
$con=conectar();

$Nombre_Tarea=$_GET['Nombre_Tarea'];

$sql="DELETE FROM tareas  WHERE Nombre_Tarea='$Nombre_Tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>