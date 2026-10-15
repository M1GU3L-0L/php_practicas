<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear auto</title>
</head>
<body>

    <a href="/dashboard/autos">Inicio</a>

    <form action="/dashboard/autos/create" method="post">
        <?= view('auto/form', ['op' => 'Crear']) ?>
    </form>
</body>
</html>