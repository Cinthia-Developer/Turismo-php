<?php  the_post()?>
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
                <div class="title2"><?php the_content() ?></div>
                <a href="#sobre-puno" class="btn btn-default btn-lg btn1">Màs</a>
            </div>
        </div>
    </div>   
<!--==============================Seccion =================================-->
        <section id="sobre-puno">
            <div class="container">
               <?php 
                    $sobre_puno = new WP_Query(array("pagename" => "sobre-puno"));
                    $sobre_puno->have_posts();
                    $sobre_puno->the_post();
                        
                ?>
                <h2 class="text-center"><?php the_title() ?></h2><br>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <?php the_content() ?> 
                        </div>
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
    <div id="content">
        <section id="destinos">
           <?php 
                    $destinos = new WP_Query(array("pagename" => "destinos"));
                    $destinos->have_posts();
                    $destinos->the_post();
                        
            ?>
            <div class="row_2">
                <div class="container"><br>
                   <p class="title1"> <?php  the_title() ?></p><br>
                   <div class="title2"> <?php the_content() ?></div>
                    <div class="row">
                <?php
                    $hijos = new WP_Query(array("post_type"=> "page", "post_parent" => get_the_ID()));
                ?>
                        <ul class="list1">
                           <?php  while($hijos->have_posts()){
                            $hijos->the_post();
                            ?>
                            <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                                <div class="box1">
                                    <a href="https://es.wikipedia.org/wiki/Sillustani">
                                        <figure><img src="<?php echo the_post_thumbnail_url()?>" alt=""></figure>
                                        <p><?php the_title() ?></p>
                                    </a>
                                </div>
                            </li>
                            
                            <?php } ?>
                           <!-- 
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
                            -->
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
           <?php 
                    $contactanos = new WP_Query(array("pagename" => "contactanos"));
                    $contactanos->have_posts();
                    $contactanos->the_post();
                        
            ?>
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