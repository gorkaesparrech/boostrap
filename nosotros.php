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
    <header>
    <?php include 'views/header.php' ?>
    </header>
    
    <!-- BANNER -->

    <section id="banner_nosotros" class="container-fluid recuadro container-xxl">
        <div class="troyano col-12 banner">
            <h1>Nosotros</h1>
          </div>
    </section>

    </section>

    <!-- Aquí también, como en la página index, he aplicado un reverse column para que la pagina en smartphone
        muestre el texto siempre primero -->

    <section class="container-fluid interes fondocol container-xxl">
        <div class="row" >
            <div class="fotocol col-12 col-md-6 paddingespaciado">
                <h3 class="mb-5 fs-1">Recomendaciones</h3>
                <p>Aquí se muestran los diferentes productos más pedidos y comprados que se adaptarán a tus compras/pedidos habituales, además que podrán mostrarse ofertas y descuentos cuando estén disponibles. ¡No te las pierdas!</p>
            </div>
            <div class="col-12 col-md-6 fondo interes" style="background-image: URL(imatges/bakery-ge3716a0a2_640@1x.png);  min-height: 350px;">
                
            </div>
        </div>

    </section>

    <section class="container-fluid fondocol2 container-xxl">
        <div class="row" id="invertido" >
            <div class="col-12 col-md-6 fondo interes" style="background-image: URL(imatges/bakery-g44b37e0f8_640@1x.png); min-height: 350px; ">
            </div>
            <div class="fotocol2 col-12 col-md-6 paddingespaciado">
                <h3 class="mb-5 fs-1">Pedidos</h3>
                <p>Aquí podrás hacer pedidos a tu gusto y elección teniendo una gran variedad de alimentos y condimentos, así como una personalización más detallada de los productos y o pedidos que vayas a realizar, siempre tratamos de cumplir al máximo vuestras espectativas.  <!--<strong style="font-family: Roboto-bold;">¡Descubre unos sabores inolvidables!</strong>--></p>
            </div>
        </div>
    </section>

    <section class="container-fluid interes fondocol container-xxl" >
        <div class="row" >
            <div class="fotocol col-12 col-md-6 paddingespaciado">
                <h3 class="mb-5 fs-1">Mejoría</h3>
                <p>A lo largo de los años, hemos apostado por la innovación, desarrollando nuevos productos diferenciales tanto por su sabor, como por su funcionalidad.
            </div>
            <div class="col-12 col-md-6 fondo interes nosotrosImage" style="background-image: URL(imatges/bread-g29f1a64db_1920.jpg);">
                
            </div>
        </div>

    </section>

    <footer>
    <?php include 'views/footer.php' ?>
    </footer>

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>
