
<?php

include 'conexion.php';

if(!isset($_GET['id'])){
    echo "No se obtuvo el id";
    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM contactos WHERE id = '$id' ";
$resultado = $conexion->query($sql);

if ($resultado->num_rows === 0) {
    echo "Contacto no encontrado";
    exit;
}

$contacto = $resultado->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "UPDATE contactos SET nombre = '$nombre' , telefono = '$telefono' , email = '$email'  WHERE id = '$id' ";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Contacto</title>
</head>
<body>
<div class="container ">
        <h1 class="text-center m-3 text-primary m-3  " >EDITAR CONTACTO</h1>
        <a href="index.php" class="btn btn-secondary ">Listado Contactos</a>
        <br><br>
        
        <div class="container text-center text-danger">
            <strong id="adverte"><em>Para editar en necesario llenar todos los campos</em></strong>
            <br><br>
        </div>
        
        <form action="" method="POST" class="container col-4">

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre"  value="<?= htmlspecialchars($contacto['nombre']) ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teléfono</label>
                <input type="number" class="form-control" name="telefono"  value="<?= htmlspecialchars($contacto['telefono']) ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"  value="<?= htmlspecialchars($contacto['email']) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>