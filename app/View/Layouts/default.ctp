<?php ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>

        <?php echo $this->Html->charset(); ?>
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width"/>
        <title><?php echo $title?></title>
      <?php
echo $this->Html->meta(
    'logo.ico',
    '/logo.ico',
    array('type' => 'icon')
);
?>
        <!-- CSS Files-->
        <?php echo $this->Html->css("style.css"); ?>
        <?php echo $this->Html->css("homepage.css"); ?>
        <?php echo $this->Html->css("skins/blue.css"); ?>
        <?php echo $this->Html->css("responsive.css"); ?>

        <?php
        
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body>




        <!-- HIDDEN PANEL 
        ================================================== -->
        <div id="panel">
            <div class="row">
                <div class="twelve columns">
                    <?php echo $this->Html->image("info.png", array("class" => "pics", "alt" => "info")) ?>

                    <div class="infotext">
                        Bienvenido a Lannex esperamos que la información suministrada sea de su agrado.
                    </div>
                </div>
            </div>
        </div>
        <p class="slide">
            <a href="#" class="btn-slide"></a>
        </p>
        <!-- HEADER
        ================================================== -->
        <div class="row">	
            <div class="four columns">
                <div class="logo" >
                  <?php echo $this->Html->image("logo_p.png", array("class" => "", "alt" => "info", 'width' =>'250', 'height'=> '100')) ?>
  
                </div>
            </div>
            <div class="right columns noleftmarg">		
                <nav id="nav-wrap">
                    <ul class="nav-bar sf-menu">

                        <li class="current"><h5>
                                <?php echo $this->Html->link("Inicio", array("controller" => "inicio", "action" => "index", "home")); ?></h5>
                        </li>
                        <li><h5>
                                <?php echo $this->Html->link("Quienes Somos", array("controller" => "inicio", "action" => "Quienes_somos")); ?>
                            </h5>
                        </li>
                        <li><h5>
                                <?php echo $this->Html->link("Portafolio", array("controller" => "inicio", "action" => "Portafolio")); ?>
                            </h5>
                        </li>				
                        <li><h5>
                                <?php echo $this->Html->link("Contactos", array("controller" => "inicio", "action" => "Contacto")); ?>
                            </h5>
                        </li>
                        <li><h5>
                                <?php echo $this->Html->link("Ayuda", array("controller" => "inicio", "action" => "Ayuda")); ?>
                            </h5>
                        </li>

                    </ul>
                </nav>
            </div>	
        </div>
        <div class="row">
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>


        <!-- FOOOTER 
        ================================================== -->
        <div id="footer">
            <footer class="row">
                <p class="back-top floatright">
                    <a href="#top"><span></span></a>
                </p>
                <div class="four columns">
                    <h1>CONTACTOS <br><br>
                    Teléfonos:</h1>	
                    0243-215.47.74 <br>
                    0424-345.58.88<br><br>
                    <h1>Dirección</h1>
                    Av. principal de Santa Inés , Multicentro Sorrento, local 2-7 , La Morita 2 - Edo. Aragua<br><br>
                    
                </div>
                <div class="four columns">
                    <h1>REDES SOCIALES</h1>
                    <a href="https://www.facebook.com/soydeturmero">
                        <div class="social facebook">

                        </div>
                    </a>
                    <div class="social twitter">
                        <a href="#"></a>
                    </div>
                    <div class="social flickr">
                        <a href="#"></a>
                    </div><br><br><br>
                    <h1>CORREOS ELECTRÓNICOS</h1>
                        
                        <li><a href= "https://www.gmail.com">empresa@lannex.com.ve</a></li>
                        <li><a href= "https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1431364959&rver=6.4.6456.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2Fdefault.aspx%3Fmkt%3Des-us%26rru%3Dinbox&lc=2058&id=64855&mkt=es-us&cbcxt=mai">empresa.lannexca@gmail.com</a></li><br>

                </div>
                <div class="four columns">
                    <h1 class="newsmargin">RECIBE NUESTRAS NOTICIAS</h1>
                    <div class="row collapse newsletter floatright">
                        <div class="ten mobile-three columns">
                            <input type="text" class="nomargin" placeholder="Introduce Tu email...">
                        </div>
                        <div class="two mobile-one columns">
                            <a href="#" class="postfix button expand">GO</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="six columns">
                    &copy;<span class="small"> Copyright 2015 <a href="http://www.lannex.com.ve">www.lannex.com.ve</a> / Todos los derechos reservados - RIF: J-40386924-3 </span>
                </div>
                <div class="six columns">
                    <span class="small floatright"> Web Diseñado y Programado por:<a href=""> Ing. Anderson Guerrero & Ing. Jhoan Hernández</a>  </span>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPTS 
        ================================================== -->
        <!-- Javascript files placed here for faster loading -->
        <?php echo $this->Html->script("foundation.min.js") ?>
        <?php echo $this->Html->script("jquery.easing.1.3.js") ?>
        <?php echo $this->Html->script("elasticslideshow.js") ?>
        <?php echo $this->Html->script("jquery.carouFredSel-6.0.5-packed.js") ?>
        <?php echo $this->Html->script("jquery.cycle.js") ?>
        <?php echo $this->Html->script("app.js") ?>
        <?php echo $this->Html->script("modernizr.foundation.js") ?>
        <?php echo $this->Html->script("slidepanel.js") ?>
        <?php echo $this->Html->script("scrolltotop.js") ?>
        <?php echo $this->Html->script("hoverIntent.js") ?>
        <?php echo $this->Html->script("superfish.js") ?>
        <?php echo $this->Html->script("responsivemenu.js") ?>
        <?php echo $this->Html->script("jquery.tweet.js") ?>
        <?php echo $this->Html->script("twitterusername.js") ?>
    </body>
</html>