<?php
  include 'beneficios.php';

  $ventaX=new beneficios();

$ventaX->venta(2);
echo "<br>";
$ventaX->gasto(-3);
echo "<br>";
$ventaX->ImprimirGastos();
echo "<br>";
$ventaX->ImprimirVentas();
echo "<br>";
$ventaX->beneficios();











?>
