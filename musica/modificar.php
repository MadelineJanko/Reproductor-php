<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>Modificar</header>
    <?php
        include("conexion.php");
        $id=$_REQUEST['id'];
        $query="SELECT * FROM lista WHERE id='$id'";
        $resultado=$conexion->query($query);
        $row=$resultado->fetch_assoc();
    ?>
    <center>
        <form action="proceso_modificar.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
            <div>
            <label for="artista">ARTISTA: </label>
            <input type="text" required name="artista"
             placeholder="Artista..." autocomplete="off" value="<?php echo $row['artista'] ?>"> <br/>
             <label for="cancion">CANCION: </label>
            <input type="text" readonly required name="cancion"
             placeholder="Cancion..." autocomplete="off" value="<?php echo $row['cancion'] ?>"> <br/>
            <label for="poster">VUELVA A SUBIR EL POSTER: </label>
            <input type="file" name="poster" accept="image/*"> <br/>
            <label for="poster">VUELVA A SUBIR LA PISTA: </label>
            <input type="file" name="pista" accept="audio/*"> <br/>
            <input type="submit" value="MODIFICAR">
            </div>
        </form>
    </center>
</body>
</html>