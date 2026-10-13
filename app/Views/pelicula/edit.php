<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pelicula</title>
</head>
<body>

    <a href="/pelicula">Inicio</a>

    <form action="/pelicula/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('pelicula/form', ['op' => 'Actualizar']) ?>
    </form>
</body>

</html>