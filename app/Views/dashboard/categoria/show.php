<?php /** @var array $categoria */ ?>
<?php /** @var array $pelicula */ ?>
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/categoria">Inicio</a>

    <h1> <?= $categoria['titulo'] ?></h1>

<?= $this->endSection() ?>