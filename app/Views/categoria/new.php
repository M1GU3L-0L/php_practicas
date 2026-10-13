<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>

    <a href="/dashboard/categoria">Inicio</a>

    <form action="/dashboard/categoria/create" method="post">
        <?= view('categoria/form', ['op' => 'Crear']) ?>
    </form>
</body>
</html>