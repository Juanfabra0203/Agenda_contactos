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
    include 'conexion.php';
    
    $sql = "SELECT * FROM contactos";
    $resultado = $conexion ->query($sql);

    
    ?>
    <div class="container">

        <h1 class="text-center text-success">CONTACTOS</h1>
        <br>
        <a href="agregar.php" class="btn btn-primary">+ Nuevo Contacto</a>
        <br><br>

        <div class="container d-flex justify-content-center col-7">
            <div class="table-responsive" style="max-height: 300px; min-width: 700px;">
                <table class="table table-striped table-hover table-bordered table-sm text-center caption-top mb-0">
                    <caption>Lista de contactos</caption>
                    <thead class="table-light sticky-top">
                        <tr>
                            <th scope="col">ID</th> 
                            <th scope="col">NOMBRE</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>
                                    <th scope='row'>{$fila['id']}</th>
                                    <td>{$fila['nombre']}</td>
                                    <td>{$fila['telefono']}</td>
                                    <td>{$fila['email']}</td>
                                    <td> <a href='editar.php?id={$fila['id']}' > <i class='bi bi-pencil-square'></i> </a> </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>