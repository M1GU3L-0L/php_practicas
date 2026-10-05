<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pelicula</title>
</head>
<body>

    <a href="/pelicula">Inicio</a>

    <form action="/pelicula/update/<?= $id ?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>