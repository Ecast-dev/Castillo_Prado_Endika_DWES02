<!doctype html>
<html lang="es"><head><meta charset="utf-8"><title>Vehículo - GET</title></head><body>
<h1>Resultado de la búsqueda</h1>
<?php if (!$vehiculo): ?>
  <p>No se encontró vehículo.</p>
<?php else: ?>
  <ul>
    <?=$vehiculo->mostrarInfo(); ?>


  </ul>
<?php endif; ?>
<p><a href="/">Volver</a></p>
</body></html>