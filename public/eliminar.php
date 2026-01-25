<?php 

require_once __DIR__ . "/../src/controllers/ContactoControl.php";

$controller = new ContactoControl();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!isset($_POST['id']) || !is_numeric($_POST['id'])){
        echo "ID invalido";
        exit;
    }

    $id = $_POST['id'];

    $contacto = $controller->eliminar($id);
    
    header("Location: index.php");

}


if($_SERVER['REQUEST_METHOD'] === 'GET'){

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        echo "No se encontro el ID";
        exit;
    }

    $id = $_GET['id'];

    $contacto = $controller->buscar($id);

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
    <title>Eliminar Contacto</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card border-danger">
            <div class="card-body text-center">
                <h3 class="text-danger">¿Estás seguro?</h3>
                <p>Vas a eliminar al contacto <strong><?= htmlspecialchars($contacto['nombre']) ?></strong>.</p>
                
                <form method="POST" action="eliminar.php">
                    <input type="hidden" name="id" value="<?=$contacto['id']?>">
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>
