<?php

class persona 
{
private $dpi;
private $nombre;
private $direccion;
private $telefono;


public function setDpi($dpi)
{
 $this->dpi = $dpi;
}

public function setNombre($nombre)
{
 $this->nombre = $nombre;
}

public function getDpi()
{
    return $this->dpi;
}

public function getNombre()
{
    return $this->nombre;
}
public function getDireccion()
{
 
    return  $this->direccion;
}

public function getTelefono()
{
    return  $this->telefono;
}

}



?>