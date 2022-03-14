<?php

include("conexion.php");
$con=conectar();

$ID_Tarea=$_POST['ID_Tarea'];
$Nombre_Tarea=$_POST['Nombre_Tarea'];

$sql="UPDATE tareas SET  Nombre_Tarea='$Nombre_Tarea' WHERE ID_Tarea='$ID_Tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index2.php");
    }
?>