<?php include("db.php") ?>

<?php include("includes/header.php") ?>
<?php 
    include("save_task.php");


    $consulta="SELECT * FROM videos";
    $resultado=mysqli_query($conexion,$consulta);

    $fila=mysqli_fetch_array($resultado);

?>

<div class="Container p-4">
        <div class="row">
            <div class="col-md-10">
                <div class="card card-body">
                    <form action="save_task.php" method="POST">
                        <div class="form-group">
                            <textarea type="text" name="url" class="form-control" placeholder="Ingrese URL" autofocus></textarea>
                        </div>
                            <div class="form-group">
                                <input name="nombre" rows="2" class="form-control" placeholder="Ingrese Nombre del video">
                            </div>
                        <div class="form-group">
                            <select name="tipo" class="form-control">
                                <option  value="educativo">Educativo</option>
                                <option  value="cuentos">Cuentos</option>
                                <option  value="letras">Letras</option>
                                <option  value="colores">Colores</option>
                                <option  value="familia">Familia</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-succes btn-block" name="save_task" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-8">
        <table class="table">
            <thead class="table-sucess table-striped">
                <tr>
                    <th>Nombre</th>
                    <th> Url </th>   
                    <th>Tipo </th>
                    <th></th>
                    <th></th>
                </tr>  
            </thead>
        <tbody>
            <?php
                while($fila=mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <th><?php echo $fila['nombre']?></th>
                    <th><?php echo $fila['url']?></th>
                    <th><?php echo $fila['tipo']?></th>
                    <th class="fas fa-marker" ><a class="btn btn-secondary" href="edit.php?id=¿<?php echo $fila['id']?>" class="btn btn-info">Editar</a></th>
                    <th class="far fa-trash-alt" ><a class="btn btn-danger" href="delete_task.php?id=<?php echo $fila['id']?>" class="btn btn-info">Eliminar</a></th>
                </tr>  
                <?php 
            }   
            ?>   
        </tbody>
        </table>
    </div>
