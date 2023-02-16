<?php
    include("conexion.php");
    $id=$_REQUEST['id'];
    $artist=$_POST['artista'];
    $song=$_POST['cancion'];
    $src=addslashes(file_get_contents($_FILES['pista']['tmp_name']));
    $poster=addslashes(file_get_contents($_FILES['poster']['tmp_name']));

    $query="UPDATE lista SET artista='$artist', cancion='$song', pista='$src', poster='$poster' WHERE id='$id'";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: index.php");
    }
    else{
        echo "no se modifico";
    }
?>