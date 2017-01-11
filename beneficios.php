<?php
/**
 *
 */
class beneficios
{

  private $ventas=[];
  private $gastos=[];

  public function venta($ventas)
  {
    if ($ventas>=0) {
      $this->ventas[]=$ventas;
    }
    return $this->ventas;
  }
  public function gasto($gastos)
  {
    if ($gastos>=0) {
      $this->gastos[]=$gastos;
    }
    return $this->gastos;
  }

 public function ImprimirVentas()
 {
   foreach ($this->ventas as $key => $value) {
     echo "Venta numero ".$value."<br>";
   }
 }

 public function ImprimirGastos()
 {
   foreach ($this->gastos as $key => $value) {
    echo "Venta numero ".$value."<br>";
   }
 }



 public function beneficios(){
   $calcularV=0;

   foreach ($this->ventas as $key => $value) {
     $calcularV=$calcularV+$value;
   }

   $calcularG=0;

   foreach ($this->gastos as $key => $value) {
     $calcularG=$calcularG+$value;
   }

   $beneficios=$calcularV-$calcularG;

   echo "Los beneficios son $beneficios";
 }

 }






 ?>
