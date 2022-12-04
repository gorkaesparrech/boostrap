<?php
require_once 'producte.php';

class Pasta extends producte{
    public $calorias;

    public function __construct($id, $image, $nom, $precio, $calorias){
        parent::__construct($id, $image, $nom, $precio);
        $this->calorias=$calorias;
    }

    /**
     * Get the value of iva
     */ 

    public function preuMesIva(){
        return $this->precio * 1.40;
    }


        /**
         * Get the value of calorias
         */ 
        public function getCalorias()
        {
                return $this->calorias;
        }

        /**
         * Set the value of calorias
         *
         * @return  self
         */ 
        public function setCalorias($calorias)
        {
                $this->calorias = $calorias;

                return $this;
        }

        public function calcularPrecioTotal($numDias=1){
            $precioTotal = $numDias*$this->preuMesIva();
            return $precioTotal;
        }

}
?>