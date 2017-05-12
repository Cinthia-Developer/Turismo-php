<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    
    <!--links of styles -->
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/fonts/style.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style.css">
</head>

<body>
<!--==============================Header-1=================================-->
<header class="navegador-menu">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-menu"></span>
                </button>
            </div><!--cierre de navbar header-->
                    
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php bloginfo("template_directory");?>/index.html">Home</a></li>
                    <li><a href="#sobre-puno">Sobre Puno</a></li>
                    <li><a href="#destinos">Destinos</a></li>
                    <li><a href="#comentar">Comentar</a></li>
                    <li><a href="#contactanos">Contàctanos</a></li>
                </ul>
            </div><!--cierre de collapse-->
        </div><!--cierre de container-->
    </nav>
</header>
<!--==============================Header-2=================================-->   
<header id="header" class="navegador-menu-2">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="<?php bloginfo("template_directory");?>/images/SmUByRQK.gif"></a></h1>
    </div><!--cierre de container -->
    <div class="menuheader">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                    <li class="active"><a href="index.html">home</a>
                        <ul>
                            <li><a href="#">info</a></li>
                            <li><a href="#">profile</a></li>
                            <li><a class="last" href="#">news</a>
                            <ul>
                               <li><a href="#">fresh</a></li>
                               <li><a class="last" href="#">archive</a></li>                       
                            </ul>
                          </li>
                       </ul>
                    </li>
                    <li><a href="#sobre-puno">Sobre Puno</a></li>
                    <li><a href="#destinos">Destinos</a></li>
                    <li><a href="#comentar">Comentar</a></li>
                    <li><a href="#contactanos">Contàctanos</a></li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<!--==============================Hero=================================-->
	<section id="hero">
	    <div class="container">
	       <div class="sombra">
	           <h1>Visìtamos</h1>
	           <p>¡Participa en nuestras actividades!</p>
	           <button>Anìmate</button>
	       </div><!--cierre de sombra-->
	    </div><!--cierre de container-->
	</section>
<!--==============================content=================================-->
    <div id="content">
    <!--==============================row1=================================-->
        <div class="row_1">
            <div class="container">
                <p class="title1"><?php the_title() ?></p>
                <p class="title2">Puno es sin lugar a dudas uno de los destinos más atractivos del Perú y uno de los más interesantes en el continente: pocas ciudades tienen el privilegio de ubicarse a orillas de una maravilla de la naturaleza como el Lago Titicaca, el lago navegable más alto del mundo a más de 3800 msnm. <br> Puno es considerada como la Capital Folklórica del Perú y de América, Puno es inmensamente rica en danzas, música, costumbres y leyendas, sus danzas superan las 350. Puno es célebre por lo variado y colorido de su folklore, sin duda el más rico y deslumbrante del continente, cuya máxima expresión es la Fiesta de la Virgen de la Candelaria, que se realiza en febrero.</p>
                <a href="#sobre-puno" class="btn btn-default btn-lg btn1">Màs</a>
            </div>
        </div>
<!--==============================Seccion Documental=================================-->
        <section id="sobre-puno">
            <div class="container">
                <h2 class="text-center">Sobre Puno</h2><br>
                <div class="row">
                    <div class="col-md-6">
                        <p>Se emplaza sobre la meseta andina, la ciudad de Puno está dominada por la presencia del Lago Titicaca, lugar sagrado de los incas y poblado de islas naturales y artificiales del Perú. Puno posee sitios que atraen el turismo cada año con arqueológicos prehispánicos de construcciones circulares llamadas desde su origen chullpas. Sus iglesias se caracterizan por una marcada arquitectura colonial. Es un pueblo orgulloso de su pasado quechua y aymara de tradición folclórica que se desborda cada año en danzas y ritos durante la Festividad Virgen María de la Candelaria. <br> Puno es leyenda, fiesta multicolor, poblado de islas naturales y artificiales <br> Ubicación: Se ubica en la sierra sur del Perú, comparte frontera con Bolivia. Tiene un relieve básicamente plano debido a que buena parte del territorio se encuentra en la meseta del Collao.</p>
                    </div><!--cierre de col-md-6-->

                    <div class="col-md-6">
                        <iframe width="100%" height="270px" src="https://www.youtube.com/embed/LxXNBlf390A" frameborder="0" allowfullscreen></iframe>

                    </div><!--cierre de col-md-6-->
                </div><!--cierre de row--> <br>
                <div class="row">
                    <div class="col-md-12">
                        <iframe  src="https://www.youtube.com/embed/mH4Dc9TNPBo?ecver=1" width="100%" height="350px;" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div><!--cierre de row-->
            </div><!--cierre de container-->
        </section>
<!--==============================row2=================================-->
        <section id="destinos">
            <div class="row_2">
                <div class="container"><br>
                   <p class="title1">Destinos</p><br>
                    <div class="row">
                        <ul class="list1">
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                                <div class="box1">
                                    <a href="https://es.wikipedia.org/wiki/Sillustani">
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/sillustani.jpg" alt=""></figure>
                                        <p>Sillustani</p>
                                    </a>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                                <div class="box2">
                                    <a href="https://es.wikipedia.org/wiki/Catedral_bas%C3%ADlica_de_San_Carlos_Borromeo_(Puno)">
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/catedral-noche.jpg" alt=""></figure>
                                    </a>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                                <div class="box3">
                                    <a href="http://www.peruenvideos.com/mirador-kuntur-wasi-puno/">
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/condor.jpg" alt=""></figure>
                                        <p>Mirador</p>
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <ul class="list1" style="margin-top:50px">
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                                <div class="box3">
                                    <a href="https://es.wikipedia.org/wiki/Taquile">
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/taquile.jpg" alt=""></figure>
                                        <p>Isla de Taquile</p>
                                    </a>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                                <div class="box2">
                                    <a href="https://es.wikipedia.org/wiki/Iglesia_de_San_Juan_Bautista_(Puno)">
                                        <p>Iglesia San Juan</p>
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/iglesia.jpg" alt=""></figure>
                                    </a>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                                <div class="box1">
                                    <a href="https://es.wikipedia.org/wiki/Etnias_urus">
                                        <figure><img src="<?php bloginfo("template_directory");?>/images/islauros.jpg" alt=""></figure>
                                        <p>Isla de Uros</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>   
        </section>
    </div>
<!--==============================Comentarios=================================-->
    <section id="comentar">
        
    </section>
<!--==============================footer=================================-->
    <footer id="contactanos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Escribenos a: <br>
                    turismopuno@gmail.com <br>
                    telef: 963928262
                </div><!--cierre de col-md-6-->
                   
                <div class="col-md-4 col-md-offset-2 text-right">
                    Copyright © 2017 Cinthia <br><br>
                    <a href="https://www.linkedin.com/in/cinthia-mashiel-churata-ito-418557138" target="_blank">
                        <span class="icon-linkedin"></span>
                    </a>
                    <a href="https://github.com/Cinthia-Mashiel">
                        <span class="icon-github"></span>
                    </a>
                    <a href="https://www.facebook.com/Cinthia.Mashiel.Jatnnfcxx">
                    <span class="icon-facebook"></span>
                    </a>
                </div><!--cierre de col-4-->
            </div><!--cierre de row-->
        </div><!--cierre de container-->
    </footer>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js"></script>
</body>
</html>