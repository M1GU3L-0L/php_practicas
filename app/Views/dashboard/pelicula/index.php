<?php /** @var array $peliculas */ ?>
    
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
    Listado de Peliculas
<?= $this->endSection('') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/pelicula/new">Crear</a>

    <table>

        <tr>
            <th>
                Id
            </th>
            <th>
                Titulo
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Opciones
            </th>
        </tr>

        <?php foreach ($peliculas as $key => $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href="/dashboard/pelicula/show/<?=  $p['id'] ?>">Mostrar</a>
                    <a href="/dashboard/pelicula/edit/<?=  $p['id'] ?>">Editar</a>

                    <form action="/dashboard/pelicula/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
        <?php endforeach ?>

    </table>

<?= $this->endSection() ?>