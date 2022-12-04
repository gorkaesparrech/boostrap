<?php

abstract class producte{

protected $image;
protected $id;
protected $nom;
protected $precio;


public function __construct($id, $image, $nom, $precio){
    $this->id = $id;
    $this->image = $image;
    $this->nom = $nom;
    $this->precio = $precio;

}

    abstract function preuMesIva();


/**
 * Get the value of image
 */ 
public function getImage()
{
    return $this->image;
}

/**
 * Set the value of image
 *
 * @return  self
 */ 
public function setImage($image)
{
    $this->image = $image;

    return $this;
}

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

/**
 * Get the value of precio
 */ 
public function getPrecio()
{
return $this->precio;
}

/**
 * Set the value of precio
 *
 * @return  self
 */ 
public function setPrecio($precio)
{
$this->precio = $precio;

return $this;
}

}
?>