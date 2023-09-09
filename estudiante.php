<?php
include('persona.php');
class estudiante extends persona{
   private $carnet;
   private $asignacion;
   
    public function obtenerNombre(){
        return $this->getNombre();
    }

   public function getCarnet()
   {
    return $this->carnet;
   }
   public function setCarnet($carnet)
   {
    $this->carnet = $carnet;
   }

   public function getAsignacion()
   {
    return $this->asignacion;
   }
   public function setAsignacion($asignacion)
   {
    $this->asignacion = $asignacion;
   }


}



?>
