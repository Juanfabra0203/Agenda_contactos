<?php 
require_once __DIR__ . "/../src/controllers/ContactoControl.php";;

$controller = new ContactoControl();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);

    $controller->nuecontac($nombre,$telefono,$email);
    
    header("Location: index.php");
    exit();
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nuevo Contacto</title>
</head>

<body>
    <div class="container ">
        <h1 class="text-center text-info m-3" >NUEVO CONTACTO</h1>
        <a href="index.php" class="btn btn-secondary ">Listado Contactos</a>
        <br><br>
        

        <form action="agregar.php" method="POST" class="container col-4">

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teléfono</label>
                <input type="number" class="form-control" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>