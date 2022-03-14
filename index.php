<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tareas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> To Do List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese tarea</h1>
                                <form action="insertar.php" method="POST">
									<input type="text" class="form-control mb-3" name="ID_Tarea" placeholder="Numero de tarea..." required>
                                    <input type="text" class="form-control mb-3" name="Nombre_Tarea" placeholder="Ingrese su tarea..."required>
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Numero</th>
                                        <th>Tarea</th>
                                        <th>Completado</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Tarea']?></th>
                                                <th><?php  echo $row['Nombre_Tarea']?></th>  
                                                <th><a href="borrar.php?Nombre_Tarea=<?php echo $row['Nombre_Tarea'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>