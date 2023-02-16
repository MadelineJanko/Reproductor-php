<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de musica</title>
</head>
<body>
    <section>
        <center>
            <table border="1">
                <tr>
                    <th colspan="7"><a href="registrar.php">Insertar Nueva Cancion</a></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>ARTISTA</th>
                    <th>CANCION</th>
                    <th>POSTER</th>
                    <th>PISTA</th>
                    <th colspan="2">ACCIONES</th>
                </tr>
                <?php
                    include("conexion.php");
                    $query="SELECT * FROM lista order by id desc"; //'desc' 'asc' ordena por id de manera descendente y ascendente
                    $resultado=$conexion->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>    
                    <tr>
                        <td> <?php echo "{$row['id']}" ?> </td>
                        <td> <?php echo "{$row['artista']}" ?> </td>
                        <td> <?php echo "{$row['cancion']}" ?> </td>
                        <td>
                            <img height="200px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['poster']) ?>" alt="">      
                        </td>
                        <td>
                            <audio controls src="data:audio/mp3;base64,<?php echo base64_encode($row['pista']) ?>"></audio controls>     
                        </td>
                        <td><a href="modificar.php?id=<?php echo $row['id'];
                           echo $row['artista'];
                           echo $row['cancion'];  ?>">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                    </tr>
                    <?php
                    }
                ?>
            </table>
        </center>
    </section>
</body>
</html>