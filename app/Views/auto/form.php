<label for="marca">Marca</label>
<input type="text" name="marca" placeholder="Marca" id="marca" value="<?= esc($auto['marca']) ?>" required>
<label for="modelo">Modelo</label>
<input type="text" name="modelo" placeholder="Modelo" id="modelo" value="<?= esc($auto['modelo']) ?>" required>
<label for="anio">Año</label>
<input type="number" name="anio" placeholder="Año" id="anio" value="<?= esc($auto['anio']) ?>" min="1886" max="<?= date('Y') + 1 ?>" required>
<label for="descripcion">Descripcion</label>
<textarea name="descripcion" id="descripcion">
<?= esc($auto['descripcion']) ?></textarea>
<button type="submit"><?= $op ?></button>