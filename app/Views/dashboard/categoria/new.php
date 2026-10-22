<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/categoria">Inicio</a>

    <form action="/dashboard/categoria/create" method="post">
        <?= view('dashboard/categoria/form', ['op' => 'Crear']) ?>
    </form>

<?= $this->endSection() ?>