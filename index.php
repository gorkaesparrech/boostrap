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

    <meta http-equiv="refresh" content="1000">

</head>

<body>

<!-- HEADER -->

    <header>
    <?php include 'views/header.php' ?>
    </header>
  
    <!-- BANNER -->
    
    <section id="banner_principal" class="container-fluid recuadro container-xxl">
        <div class="troyano col-12 banner">
            <h1>Panadería Troyano</h1>
          </div>
    </section>

    <!-- INDEX PEDIDOS -->

    <!-- He realizado un reverse column para que la posición móvil posicione el texto siempre encima y las imagenes debajo  -->

    <section class="container-fluid fondocol container-xxl">
        <div class="row" id="invertido" >
            <div class="col-12 col-md-6 fondo interes" style="background-image: URL(imatges/baker-ga3e8f7dbb_640.jpg); min-height: 350px; ">
            </div>
            <div class="fotocol col-12 col-md-6 paddingespaciado">
                <h3 class="mb-5 fs-1">Pedidos</h3>
                <p>Aquí podrás hacer pedidos a tu gusto y elección teniendo una gran variedad de alimentos y condimentos, así como una personalización más detallada de los productos y o pedidos que vayas a realizar, siempre tratamos de cumplir al máximo vuestras espectativas. </p>
                <a href="/tienda.php"><button class="btn btnadd btn-warnin w3-black w3-section" type="button">Hacer pedido</button></a>
            </div>
        </div>
    </section>

    <!-- INDEX > NOSOTROS -->

    <section class="container-fluid interes fondocol2 container-xxl">
        <div class="row" >
            <div class="fotocol2 col-12 col-md-6 paddingespaciado">
                <h3 class="mb-5 fs-1">Recomendaciones</h3>
                <p>Aquí se muestran los diferentes productos más pedidos y comprados que se adaptarán a tus compras/pedidos habituales, además que podrán mostrarse ofertas y descuentos cuando estén disponibles. ¡No te las pierdas!</p>
            </div>
            <div class="col-12 col-md-6 fondo interes" style="background-image: URL(imatges/muffins-ge2aeef000_1920.jpg);  min-height: 350px;">
            </div>
        </div>

    </section>

    <!-- INDEX > CONTACTO

    Este apartado de contacto envía el comentario a un gmail, en este caso no he puesto uno real -->

    <section class="container-fluid fondocol container-xxl">
        <div class="row" id="invertido">
            <div class="col-12 col-md-6 interes" style="background-image: URL(imatges/mapa.jpg); min-height: 350px; ">
            </div>
            <div class="fotocol col-12 col-md-6 paddingespaciado2">
                <h3 class="mb-2 fs-1">Contacto</h3>
                <form action="gmail" id="usrform">
                  <label for="nom">Nombre: </label>
                  <br>
                  <input type="text" name="nom" class="texto">
                  <br>
                  <label for="apellido">Apellido: </label>
                  <br>
                  <input type="text" name="apellido" class="texto">
                  <br>
                  <label for="telef">Num. telef.: </label>
                  <br>
                  <input type="tel" name="telef" class="texto">
                  <br>
                  <label for="mensaje">Mensaje: </label>
                  <br>
                  <textarea name="mensaje" form="usrform" class="texto2 ">Deja tu comentario...</textarea>
                  <br>
                  <input type="submit" class="btn btnform">
                </form>
        </div>

    </section>
    
<!-- FOOTER -->

    <footer>
    <?php include 'views/footer.php' ?>
    </footer>

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>
