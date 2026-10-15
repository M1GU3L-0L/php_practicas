<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos</title>
</head>
<body>

    <h1>Listado de autos</h1>
    
    <a href="/dashboard/autos/new">Crear auto</a>

    <table>

        <tr>
            <th>
                Id
            </th>
            <th>
                Marca
            </th>
            <th>
                Modelo
            </th>
            <th>
                Año
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Opciones
            </th>
        </tr>

        <?php foreach ($autos as $auto) : ?>
            <tr>
                <td><?= $auto['id'] ?></td>
                <td><?= esc($auto['marca']) ?></td>
                <td><?= esc($auto['modelo']) ?></td>
                <td><?= esc($auto['anio']) ?></td>
                <td><?= esc($auto['descripcion']) ?></td>
                <td>
                    <a href="/dashboard/autos/show/<?= $auto['id'] ?>">Mostrar</a>
                    <a href="/dashboard/autos/edit/<?= $auto['id'] ?>">Editar</a>

                    <form action="/dashboard/autos/delete/<?= $auto['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>