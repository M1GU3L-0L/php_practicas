<?php /** @var array $categorias */ ?>

<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
    Listado de Categorias
<?= $this->endSection('') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/categoria/new">Crear</a>

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
                    <a href="/dashboard/categoria/show/<?= $p['id'] ?>">Mostrar</a>
                    <a href="/dashboard/categoria/edit/<?= $p['id'] ?>">Editar</a>

                    <form action="/dashboard/categoria/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>

        <?php endforeach ?>

    </table>

<?= $this->endSection() ?>