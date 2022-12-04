<?php
require_once 'producte.php';

class Pa extends producte{
    public $extra_integral;

    public function __construct($id, $image, $nom, $precio, $extra_integral){
        parent::__construct($id, $image, $nom, $precio);
        $this->extra_integral=$extra_integral;
    }

    /**
     * Get the value of iva
     */

    public function preuMesIva(){
        return $this->precio * 1.20+ $this->extra_integral;
    }


    /**
     * Get the value of extra_integral
     */
    public function getextra_integral()
    {
        return $this->extra_integral;
    }

    /**
     * Set the value of extra_integral
     *
     * @return  self
     */ 
    public function setextra_integral($extra_integral)
    {
        $this->extra_integral = $extra_integral;

        return $this;
    }

    public function calcularPrecioTotal($numDias=1){
        $precioTotal = $numDias*$this->preuMesIva();
        return $precioTotal;
    }

}
?>