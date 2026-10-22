<?php /** @var array $categoria */ ?>
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/categoria">Inicio</a>

    <form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('dashboard/categoria/form', ['op' => 'Actualizar']) ?>
    </form>

<?= $this->endSection() ?>