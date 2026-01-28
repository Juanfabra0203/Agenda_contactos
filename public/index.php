<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Agendar Contactos</title>
</head>

<body>
    <?php

    require_once __DIR__ . "/../src/controllers/ContactoControl.php";

    $controller = new ContactoControl();
    $contactos = [];

    if (isset($_GET['texto']) && !empty($_GET['texto'])) {
        $texto = $_GET['texto'];
        $filtro = $_GET['filtro'] ?? 'todo';
        $contactos = $controller->buscarTexto($texto, $filtro);
    } else {
        $contactos = $controller->iniciar();
    }

    ?>
    <div class="container">

        <h1 class="text-center text-success m-3">CONTACTOS</h1>
        <br>
        <a href="agregar.php" class="btn btn-primary">+ Nuevo Contacto</a>
        <br><br>



        <div class="container d-flex justify-content-center col-7">
            <div class="table-responsive" style="max-height: 300px; min-width: 700px;">

                <form method="GET" action="index.php" class="d-flex align-items-center">
                    <input type="text"
                        name="texto"
                        placeholder="Buscar por nombre , telefono , email"
                        class="form-control me-2"
                        value="<?= isset($_GET['texto'])  ? htmlspecialchars($_GET['texto']) : "" ?>">

                        <select name="filtro" class="form-select" style="width: 200px;" id="">
                            <option value="todo">Todos los campos</option>
                            <option value="nombre" <?= (isset($_GET['filtro']) && $_GET['filtro'] == 'nombre') ? 'selected'  : "" ;  ?>>Nombre</option>
                            <option value="email" <?=(isset($_GET['filtro']) && $_GET['filtro'] == 'email' ) ? 'selected' : "" ?>>Email</option>
                            <option value="telefono" <?=(isset($_GET['filtro'] ) && $_GET['filtro'] == 'telefono' ) ? 'selected' : "" ?>>Telefono</option>
                        </select>

                    <button type="submit" class="btn btn-primary mx-4">Buscar</button>
                </form>

                <table class="table table-striped table-hover table-bordered table-sm text-center caption-top mb-0">

                    <caption>Lista de contactos</caption>

                    <thead class="table-light sticky-top">
                        <tr>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contactos as $c): ?>
                            <tr>
                                <td><?= $c['nombre'] ?></td>
                                <td><?= $c['telefono'] ?></td>
                                <td><?= $c['email'] ?></td>
                                <td>
                                    <a href="editar.php?id=<?= $c['id'] ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="eliminar.php?id=<?= $c['id'] ?>">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($contactos)): ?>
                            <tr>
                                <td colspan="4" class="text-center text-danger">
                                    No se encontraron resultados.
                                </td>   
                            </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>