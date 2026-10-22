<?php /** @var array $pelicula */ ?>
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/pelicula">Inicio</a>

    <form action="/dashboard/pelicula/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('/dashboard/pelicula/form', ['op' => 'Actualizar']) ?>
    </form>

<?= $this->endSection() ?>