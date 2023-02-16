<?php
    include("conexion.php");
    $artist=$_POST['artista'];
    $song=$_POST['cancion'];
    $src=addslashes(file_get_contents($_FILES['pista']['tmp_name']));
    $poster=addslashes(file_get_contents($_FILES['poster']['tmp_name']));
    $query="INSERT INTO lista(artista,cancion,pista,poster) VALUES('$artist','$song','$src','$poster')";
    $resultado= $conexion->query($query);
    if($resultado){
        header("Location: index.php");
    }
    else{ echo "no se inserto";}
?>