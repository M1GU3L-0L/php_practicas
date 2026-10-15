<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar auto</title>
</head>
<body>

    <a href="/dashboard/autos">Inicio</a>

    <form action="/dashboard/autos/update/<?= $auto['id'] ?>" method="post">
        <?= view('auto/form', ['op' => 'Actualizar']) ?>
    </form>
</body>

</html>