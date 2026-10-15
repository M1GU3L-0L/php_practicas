<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($auto['marca']) ?> <?= esc($auto['modelo']) ?></title>
</head>
<body>
    
    <a href="/dashboard/autos">Inicio</a>

    <h1><?= esc($auto['marca']) ?> <?= esc($auto['modelo']) ?></h1>
    <h2>Año: <?= esc($auto['anio']) ?></h2>
    <p><?= esc($auto['descripcion']) ?></p>
</body>
</html>