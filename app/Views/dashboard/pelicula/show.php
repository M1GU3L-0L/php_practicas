<?php /** @var array $pelicula */ ?>
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/pelicula">Inicio</a>

    <h1> <?= $pelicula['titulo'] ?></h1>
    <h2> <?= $pelicula['descripcion'] ?> </h2>

<?= $this->endSection() ?>