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

    <section id="banner_contacto" class="container-fluid recuadro container-xxl">
        <div class="troyano col-12 banner">
            <h1>Contacto</h1>
          </div>
    </section>

    <!-- BANNER -->


    <!-- MENSAJE

         Este es el apartado para escribir un mensaje, similar al que hay en la página de inicio -->

    <section class="container-fluid fondocol container-xxl">
        <div class="contenido_contacto color1">
            <h2 class="centrado_comentario">DEJA TU MENSAJE EN EL SIGUIENTE FORMULARIO</h2>
            <div class="d-flex justify-content-evenly">
                <form action="gmail" id="formcontact" class="was-validated">
                    <div class="row">
                        <div class="fotocol col-12 col-md-6">
                            <label for="nombre">Nom: </label>
                            <br>
                            <input type="text" name="nombre" class="texto texto_smartphone">
                        </div>
                        <div class="col-12 col-md-6 fondo interes">
                            <label for="apellido">Apellido: </label>
                            <br>
                            <input type="text" name="apellido" class="texto texto_smartphone">                
                        </div>
                    </div>
                    <label for="telef">Num. Telefono/Email: </label>
                    <br>
                    <input type="text" name="telef" class="telef texto_smartphone"> 
                    <br>
                    <label for="mensaje">Mensaje: </label>
                    <br>
                    <textarea rows="4" name="mensaje" form="usrform" class="mensaje texto_smartphone"></textarea>
                    <br>
                    <input type="submit" class="btn btnform">
                </form>
            </div>
        </div>
    </section>

    <!-- DIRECCIÓN
         
         Aquí hay los apartados de dirección y teléfono de la empresa, además de una leve explicación de la misma -->

    <section class="container-fluid fondocol2 container-xxl">
        <div class="contenido_contacto">
            <h2 class="centrado_comentario2">... O PONGASE EN CONTACTO CON NOSOTROS</h2>
            <div class="centrado_dir">
                <div>
                Estamos ubicados en el norte de España, en la próspera Comunidad Autónoma de La Rioja, concretamente en las localidades Calahorra, Azagra, Aldea del Ebro y Rincón de soto.
                <br>
                <br>
                Pongase hoy en contacto con nosotros para solicitar presuesto, hacer pedidos, solicitar información, etc. Estaremos encantacos de resolver cualquier duda que necesite.
                <br>
                <br>
                <img src="imatges/footer/llamada-telefonica@1x.png" class="logos"> +900 00 00 00
                <br>
                <br>
                <img src="imatges/footer/mapas-y-banderas@1x.png" class="logos"> Plaza Sarasate 2, 31560 Azagra, Navarra
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA

         Quería añadir un mapa de google interactivo aquí con las ubicaciones de las tiendas -->

    <section class="container-fluid interes fondocol container-xxl" >
        <div class="contenido_contacto">
            <h2 class="centrado_comentario">... O PONGASE EN CONTACTO CON NOSOTROS</h2>
            <div class="row centrado_ubi" >
                <div class="fotocol col-12 col-md-6">
                    <p>PANADERÍA TROYANO, ALDEA NUEVA DEL EBRO</p>
                    <img class="mapa" src="imatges/Image 15@1x.png">
                </div>
                <div class="fotocol col-12 col-md-6">
                    <p class="distancia_superior">PANADERÍA TROYANO, AZAGRA</p>
                    <img class="mapa" src="imatges/Image 12@1x.png">
                </div>
            </div>
        </div>
    </section>

    <footer>
    <?php include 'views/footer.php' ?>
    </footer>

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>
