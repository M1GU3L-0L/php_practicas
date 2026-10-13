<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categorias</title>
</head>
<body>

    <a href="/categoria">Inicio</a>

    <form action="/categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('categoria/form', ['op' => 'Actualizar']) ?>
    </form>
</body>

</html>