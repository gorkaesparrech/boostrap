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

$tipo = "";
require_once 'producte.php';
require_once 'llistaProductes.php';
require_once 'calculos/calculador.php';

session_start();

if (isset($_SESSION['nueva_sesión']) && (time() - $_SESSION['nueva_sesión'] > 100)) {
  session_unset(); 
  session_destroy();
}else{
  $_SESSION['nueva_sesión'] = time(); 
}

if (isset($_SESSION['compra'])) {
  if (isset($_SESSION['compra']) && isset($_POST['tipo'])) {
    if ($_POST['tipo'] == 'pastis') {
      if (isset($_POST['producto'])) {
        $pastisSel = $Pastissos[$_POST['producto']];
        $pedido = new Pedido($pastisSel);
        array_push($_SESSION['compra'], $pedido);
      }
    }
  }
}else{
    $_SESSION['compra']=array();
}
$tipo = "";
        ?>

<body>

  <header>
    <?php include 'views/header.php' ?>
  </header>

    <section id="banner_tienda" class="container-fluid recuadro container-xxl">
        <div class="troyano col-12 banner">
            <h1>Tienda</h1>
          </div>
    </section>

    <section class="d-flex justify-content-center fondocol2 color2 row">
        <div class="row col-3 col-md-6">
          <div class=" col-3 col-md-6 filtros ">
            <a href="tienda_filtro_pa.php"><h3>Panes</h3></a>
          </div>
          <div class=" col-3 col-md-6 filtros">
          <a href="tienda_filtro_pasta.php"><h3>Pastas</h3></a>
          </div>
        </div>
        <div class="row col-3 col-md-6">
          <div class=" col-3 col-md-6 filtros">
          <a href="tienda.php"><h3>Pasteles</h3></a>
          </div>
          <div class=" col-3 col-md-6 filtros">
            <h3>Pesonalizables</h3>
          </div>
        </div>
    </section>

    <section class="border-bottom border-opacity-50 border-2">
      <div>
        <div class="totales">
          <span class="precio"><?php $precioTotal = Calculador::calcularPrecioTotal($_SESSION['compra']);
            echo $precioTotal;?> € </span>
          <span><?php echo count($_SESSION['compra']);?> Productos <img class="compra" src="imatges/cesta-de-la-compra_color2.png" alt=""></span>
        </div>
      </div>
    </section>

    <section class="container-fluid fondocol d-flex justify-content-center">
        <div class="tabla row">
          <?php foreach ($Pastissos as $pastis){?>
            <div class="col-6 col-md-3">
              <img class="imagenes_tabla" src=<?=$pastis->getImage(). ".jpg"?>><br>
              <?=$pastis->getNom()?><br>
              <?=$pastis->preuMesIva() ." Iva incl."?><br>
              <form action="tienda.php" method="post">
                <input type="hidden" name="producto" value=<?=$pastis->getId();?>>
                <input type="hidden" name="tipo" value='pastis'>
                <button class="btn btnadd bet-button w3-black w3-section" type="submit">Añadir</button>
              </form>
            </div>
          <?php } ?>
        </div>
    </section>

    <footer>
    <?php include 'views/footer.php' ?>
    </footer>

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>