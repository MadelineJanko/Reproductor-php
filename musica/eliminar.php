<?php
    include("conexion.php");
    $id=$_REQUEST['id'];
   
    $query="DELETE FROM lista WHERE id='$id'";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: index.php");
    }
    else{
        echo "no se elimino";
    }
?>