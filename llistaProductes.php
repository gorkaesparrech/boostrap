<?php

require_once 'pa.php';
require_once 'pastis.php';
require_once 'pasta.php';

$Pans = array(new Pa(0, "imatges/pa/1", "Pa de barra", 0.29, 0),
              new Pa(1, "imatges/pa/2", "Pa de pagés (Integral)", 0.15, 0.20 ),
              new Pa(2, "imatges/pa/3", "Pa de Motlle (Integral)", 0.19, 0.15),
              new Pa(3, "imatges/pa/4", "Bretzelpa", 0.29, 0));

$Pastes = array(new Pasta(0, "imatges/pasta/1", "Pasta de full de poma", 1.95, 1.80),
                new Pasta(1, "imatges/pasta/2", "Magdalenas", 0.69, 1.5),
                new Pasta(2, "imatges/pasta/3", "Croissant de xocolata", 1.29, 2.30 ),
                new Pasta(3, "imatges/pasta/4", "Xurros", 1.39, 1.35));

$Pastissos = array(new Pastis(0, "imatges/pastis/1", "Pastís de Xocolata", 4.99, 1),
                   new Pastis(1, "imatges/pastis/2", "Pastís de Nata", 2.99, 2),
                   new Pastis(2, "imatges/pastis/3", "Pastís de Formatge", 3.99, 2),
                   new Pastis(3, "imatges/pastis/4", "Carrot Cake", 2.99,0.5));

?>  