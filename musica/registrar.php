<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cancion</title>
</head>
<body>
    <header>INSERTAR NUEVA CANCION</header>
    <form action="guardar.php" 
    method="post" enctype="multipart/form-data">
        <div class="contenedor">
            <label for="artista">ARTISTA: </label>
            <input type="text" required name="artista"
             placeholder="Artista..." autocomplete="off"> <br/>
             <label for="cancion">CANCION: </label>
            <input type="text" required name="cancion"
             placeholder="Cancion..." autocomplete="off"> <br/>
            <label for="pista">PISTA: </label>
            <input type="file" name="pista" accept="audio/*"> <br/>
            <label for="poster">POSTER: </label>
            <input type="file" name="poster" accept="image/*"> <br/>
            <input type="submit" value="GUARDAR">
        </div>
    </form>
</body>
</html>