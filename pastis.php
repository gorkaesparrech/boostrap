<?php
require_once 'producte.php';

class Pastis extends producte{
    public $tamaño;

    public function __construct($id, $image, $nom, $precio, $tamaño){
        parent::__construct($id, $image, $nom, $precio);
        $this->tamaño=$tamaño;
    }
    
    /**
     * Get the value of iva
     */ 

    public function preuMesIva(){
        return $this->precio * 1.30/$this->tamaño;
    }


        /**
         * Get the value of 
         */ 
        public function get()
        {
                return $this->tamaño;
        }

        /**
         * Set the value of tamaño
         *
         * @return  self
         */ 
        public function settamaño($tamaño)
        {
                $this->tamaño = $tamaño;

                return $this;
        }

        public function calcularPrecioTotal($numDias=1){
            $precioTotal = $numDias*$this->preuMesIva();
            return $precioTotal;
        }
        
}
?>