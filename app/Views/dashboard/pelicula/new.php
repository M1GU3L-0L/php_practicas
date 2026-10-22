<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/pelicula">Inicio</a>

    <form action="/dashboard/pelicula/create" method="post">
        <?= view('/dashboard/pelicula/form', ['op' => 'Crear']) ?>
    </form>

<?= $this->endSection() ?>