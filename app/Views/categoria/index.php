<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Listado de Categorias</h1>

    <a href="/categoria/new">Crear</a>

    <table>
        <tr>
            <th>
                Id
            </th>

            <th>
                Titulo
            </th>

            <th>
                Opciones
            </th>
        </tr>

        <?php foreach ($categorias as $key => $p) : ?>

            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td>
                    <a href="/categoria/show/<?= $p['id'] ?>">Mostrar</a>
                    <a href="/categoria/edit/<?= $p['id'] ?>">Editar</a>

                    <form action="/categoria/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>

        <?php endforeach ?>

    </table>
</body>
</html>