<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>Platilla de bootstrapp</title>

    <meta charset="UTF-8">
    <meta name="description" content="Descripció web">
    <meta name="keywords" content="Paraules clau">
    <meta name="author" content="Autor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen">

    <meta http-equiv="refresh" content="5000">

</head>

<?php

include 'pedido.php';
include 'llistaProductes.php';
require_once 'calculos/calculador.php';
require_once 'pa.php';
require_once 'pasta.php';
require_once 'pastis.php';

//El codigo detecta si los productos se añaden o si se quitan según si recibe "add" o "del",
//suma +1 a l cantidad o -1, si solo queda 1 cantidad y se resta, el producto desaparece directamente

session_start();
if(isset($_POST['Del'])){
  $pedido = $_SESSION["compra"][$_POST['pos']];
  if($pedido->getCantidad()==1 ){
    unset($_SESSION["compra"][$_POST['pos']]);
    $_SESSION["compra"] = array_values($_SESSION["compra"]);
  }else{
    $pedido->setCantidad($pedido->getCantidad() - 1);
  }

}else if(isset($_POST['Add'])){
  $pedido = $_SESSION["compra"][$_POST['pos']];
  $pedido->setCantidad($pedido->getCantidad() + 1);
}

//Aqui se crean las cookies y el pedido se guarda como JSON en la propia página.

if(isset($_POST['finalizar'])){
  $pedido = $_SESSION["compra"];
  setcookie("final_compra", json_encode($pedido), time()+592200);
}

?>

<body>

  <header>
    <?php include 'views/header.php' ?>
  </header>

    <section id="banner_tienda" class="container-fluid recuadro container-xxl">
        <div class="troyano col-12 banner">
            <h1>Carrito</h1>
          </div>
    </section>

    <?php 

  //Si no hay prouctos guardados en la sesión, la página mostrará este mensaje en vez del contenido de la array.

    if(empty($_SESSION["compra"])){?>

    <div class="centrado_carrito">
      <h2>No hay productos a la lista</h2>
      <a href="/tienda.php"><button class="btn btnadd btn-warnin w3-black w3-section" type="button">Ir a la Tienda</button></a>
    </div>

    <?php }else{?>
    
      <div>
        <div>
          <table class="centrado_carrito_tabla">
            <tr>
              <th class="top_carrito top_carrito_izquierda top_borde_derecha">Producto</th>
              <th class="top_carrito top_borde_derecha">Nombre</th>
              <th class="top_carrito top_borde_derecha">Precio</th>
              <th class="top_carrito top_carrito_derecha">Cantidad</th>
            </tr>
            
            <?php

            //Aquí se muestran los productos que hayas seleccionado, su precio, y la cantidad de los mismos

            $pos = 0;
            foreach ($_SESSION["compra"] as $pedido){ ?>
              <tr>
                <td><img class="imagenes_carrito" src=<?=$pedido->getProducto()->getImage().".jpg"?>></td>
                <td><?=$pedido->getProducto()->getNom()?>
                <!--<img src="<?=$pedido->getProducto()->getImage()?>.jpg">--></td>
                <td><?=$pedido->getProducto()->preuMesIva()?>€</td>
                <td>
                  <form action="/finalizar_compra.php" method="post">
                    <input type="hidden" name="pos" value=<?=$pos?>>
                    <button  class="" type="submit" name='Add'><strong>+</strong></button>
                    <?=$pedido->getCantidad()?>
                    <button  class="" type="submit" name='Del'><strong>-</strong></button>
                  </form>
                </td>
              </tr>
            <?php $pos++;
          }?>
          </table>
        </div>
        <!-- En la parte final de la página, se muestra el precio total de los productos, el descuento atribuido y 
             el precio final conjunto añadiendo el descuento -->
        <div class="fondocarrito2 container-xxl">
        <h2 class="centrado_tabla2">Total</h2>
          <table class="centrado_carrito_tabla2">
            <tr>
              <th class="top_carrito2 top_carrito_izquierda top_borde_izquierda2">
                Subtotal: 
              </th>
              <td class="top_carrito2 top_carrito_derecha borde_bot">
                <?php
                $precioTotal = Calculador::calcularPrecioTotal($_SESSION['compra']);
                echo $precioTotal;
                ?>
              </td>
            </tr>
            <tr>
              <th class="top_carrito2 top_borde_izquierda2">
                Recibo: 
              </th>
              <!-- Aquí se generaría un recibo que se abriría en otra página y que podría descargarse, pero no he tenido tiempo a crrlo -->
              <td class="top_carrito2 borde_bot">
                <span>#Enlace del recibo#</span>
              </td>
            </tr>
            <tr>
            <th class="top_carrito2 top_borde_izquierda2">
                Descuento: 
              </th>
              <td class="top_carrito2 borde_bot">
                <?php
                $descuento = Calculador::calculaDescuento($_SESSION['compra']);
                echo $descuento;
                ?>
                </td>
              </tr>
              <tr>
              <th class="top_carrito2 bot_carrito_izquierda borde_derecha2">
                Total: 
              </th>
              <td class="top_carrito2 bot_carrito_derecha">
                <?php
                  $precioDesc = $precioTotal-$descuento;
                  echo $precioDesc;
                  ?>
              </td>
            </tr>
          </table>
          <form action="/finalizar_compra.php" method="POST">
            <button name='finalizar' class="btn btnform centrado_tabla2">Finalizar</button>
          </form>
        </div>
      </div>
      <?php } ?>

    <footer>
    <?php include 'views/footer.php' ?>
    </footer>

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>