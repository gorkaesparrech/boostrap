<?php

class Calculador{

    public static function calcularPrecioTotal($pedidos){
        $precioTotal =0;
        foreach ($pedidos as $pedido){
            $precioUnitario = $pedido->getProducto()->calcularPrecioTotal($pedido->getCantidad());
            $precioTotal += $precioUnitario;
        }
        return $precioTotal;
    }

    public static function calculaDescuento($pedidos){
        $cantidad = 0;
        foreach ($pedidos as $pedido){
            $cantidad += $pedido->getCantidad();
        }

        $cantidadDescTotal = floor($cantidad/4);

        $productoPrecioMenor = $pedidos[0]->getProducto();

        foreach($pedidos as $pedido){
            if($productoPrecioMenor->calcularPrecioTotal() > $pedido->getProducto()->calcularPrecioTotal()){
                $productoPrecioMenor = $pedido->getProducto();
            }
        }
        return $productoPrecioMenor->calcularPrecioTotal() * $cantidadDescTotal;
    }

}