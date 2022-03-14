<?php
include("conexion.php");
$con=conectar();

$ID_Tarea=$_POST['ID_Tarea'];
$Nombre_Tarea=$_POST['Nombre_Tarea'];

$sql="INSERT INTO tareas VALUES('$ID_Tarea','$Nombre_Tarea')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>