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
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" placeholder="Titulo" id="titulo" value="<?= $pelicula['titulo'] ?>">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion">
            <?= $pelicula['descripcion'] ?>
        </textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>