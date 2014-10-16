<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forbex Web Site</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/main.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="nav-fbx navbar  navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            
            <div class="box-fbx-logo pull-left"><a href="<?php echo site_url($language);?>"><img src="<?php echo site_url('assets/images/web/boceto_futbol_profesional.jpg');?>"  class="img-responsive" alt="Logo"></a></div>
            
          </div>
           <div class="col-md-8 col-sm-6 col-xs-6">
          	
          	 <div class="box-fbx-a pull-right">
              
                  <img  src="<?php echo site_url('assets/images/web/tel.jpg');?>"  class="tel">
                  <a href='<?php echo  site_url('sp') ?>'> <img src="http://placehold.it/30x30/&text=SP"  class="img-circle" alt=""></a>
                  <a href='<?php echo  site_url('pr') ?>'> <img src="http://placehold.it/30x30/&text=PR"  class="img-circle" alt=""></a>
                  <a href='<?php echo  site_url('en') ?>'> <img src="http://placehold.it/30x30/&text=EN"  class="img-circle" alt=""></a> 
               
            </div>
           
           	
          </div>
           <nav class=" pull-right navbar navbar-default box-fbx-nav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
             
              </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                  <li class="<?php if($vista == 'novedades'){ echo 'active';}?>"><a href="<?php echo site_url($language."/novedades");?>">NOVEDADES</a></li>
                  <li class="<?php if($vista == 'empresa'){ echo 'active';}?>"><a href="<?php echo site_url($language."/empresa");?>">EMPRESA</a></li>
                  <li class="<?php if($vista == 'clientes'){ echo 'active';}?>"><a href="<?php echo site_url($language."/clientes");?>">CLIENTES</a></li>
                  <li class="dropdown <?php if(isset($active_sec)){ if($vista == 'futbol' || $vista == 'minifutbol' || $vista == 'hockey' ||$vista == 'otros-deportes'  ){ echo 'active';}}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DEPORTES <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="<?php if($vista == 'futbol'){ echo 'active';}?>"><a href="<?php echo site_url($language."/deporte/futbol");?>">FÚTBOL</a></li>
                      <li class="<?php if($vista == 'minifutbol'){ echo 'active';}?>"><a href="<?php echo site_url($language."/deporte/minifutbol");?>">MINIFÚTBOL</a></li>
                      <li class="<?php if($vista == 'hockey'){ echo 'active';}?>"><a href="<?php echo site_url($language."/deporte/hockey");?>">HOCKEY</a></li>
                      <li class="<?php if($vista == 'otros-deportes'){ echo 'active';}?>"><a href="<?php echo site_url($language."/deporte/otros-deportes");?>">OTROS DEPORTES</a></li>
                 
                    </ul>
                  </li>
                  <li class="<?php if($vista == 'certificaciones'){ echo 'active';}?>"><a href="<?php echo site_url($language."/certificaciones");?>">CERTIFICACIONES</a></li>
                  <li class="<?php if($vista == 'asesoramiento'){ echo 'active';}?>"><a href="<?php echo site_url($language."/asesoramiento");?>">ASESORAMIENTO</a></li>
                  <li class="<?php if($vista == 'contacto'){ echo 'active';}?>"><a href="<?php echo site_url($language."/contacto");?>">CONTACTO</a></li>
                </ul>
              </div>
            </nav>

        </div>
      </div>
    </header>
    <section class="banner-fbx">
	    <div id="myCarousel" class="carousel slide">
	        <div class="carousel-inner">
	            <div class="active item">
	                <!-- <img src="http://placehold.it/1900x350/395c24/ffffff" alt="Slide1" /> -->
	            </div>
	            <div class="item">
	                <!-- <img src="http://placehold.it/1900x350/a8c2e3/ffffff" alt="Slide2" /> -->
	            </div>
	            <div class="item">
	                <!-- <img src="http://placehold.it/1900x350/646263/ffffff" alt="Slide3" /> -->
	            </div>
	        </div>
	 
	    </div>

	    <nav class="box-fbx-nav">
            <div class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-a.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-b.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-c.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-d.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>    

	    </nav>
	</section>


	<main id="body-fbx">

	<?php $this->load->view($vista)?>
    <section class="parallax-quote parallaxBg box-fbx-bf-fixed">
        <div class="container">
         
             <div class="row">
               <div class="col-lg-7 col-lg-offset-5 col-md-9 col-md-offset-2">
                 <h2>FORBEX ESTARÁ PRESENTE EN CADA PASO</h2>
                  <p>
                    Nuestros asesores comerciales lo asistiran desde el momento de la creación de la cancha, ofreciendole toda nuestra variedad de servicios para que sólo tener que preocuparse por el juego.
                  </p>
                  
                    <div class="row fbx-cerca-paso" >
                      <div class="col-md-3 col-sm-3 col-xs-3"> <p class="text-center"><img src="<?php echo site_url('assets/images/web/fbx-cca.png'); ?>" class="img-responsive" /><br><span>DISEÑO</span></p>        </div>
                      <div class="col-md-3 col-sm-3 col-xs-3"> <p class="text-center"><img src="<?php echo site_url('assets/images/web/fbx-ccb.png'); ?>" class="img-responsive" /><br><span>FABRICACIÓN</span></p>   </div>
                      <div class="col-md-3 col-sm-3 col-xs-3"> <p class="text-center"><img src="<?php echo site_url('assets/images/web/fbx-ccc.png'); ?>" class="img-responsive" /><br><span>INSTALACIÓN</span></p>   </div>
                      <div class="col-md-3 col-sm-3 col-xs-3"> <p class="text-center"><img src="<?php echo site_url('assets/images/web/fbx-ccd.png'); ?>" class="img-responsive" /><br><span>MANTENIMIENTO</span></p>  </div>
                   
                    </div>
               
               </div>
             </div>

        </div>
    </section>
  
    <section class="box-fbx-empresa">
       <div class="container">

         <div class="row">


              <div class="col-md-6">
                  <p><img src="<?php echo site_url('assets/images/web/25afbx.jpg'); ?>" class="img-responsive"/></p>
               </div> 
                 <div class="col-md-12 ">
                  <h3>MAS DE 25 AÑOS FABRICANDO EL MEJOR CÉSPED</h3>
                    <p>
                      Desarrollamos césped sintético con la más avanzada tecnología de producción desde hace más de 25 años en nuestra propia planta de fabricación mejorando día a día para brindarle la mejor calidad.  
                    <br>

                    <a href="#" class="btn btn-link"><strong>    Conocer más sobre la empresa > </strong></a>
                    </p>
                 </div>
               </div>

               <div class="col-md-12 clear"><hr class="hr-fbx-b"/></div>
               <div class="col-md-7">
                  <h3>CONTACTO</h3>
                  <p>Puede llamarnos, enviarnos un mail, o bien, completar el formulario a continuación.  A la brevedad, uno de nuestros representantes lo va a estar contactando.
                  </p>
                  <h4>CASA CENTRAL ARGENTINA</h4>
                  <p>Erezcano 3857, Buenos Aires, Argentina<br>
                    Teléfono: (54 - 11) 4919 - 0999  <br>
                    Correo electrónico: info@forbex.com
                  </p>
                  <h4>LÍNEA DIRECTA DESDE ARGENTINA</h4>
                  <p>
                    0 800 666 0613
                  </p>

               
                  <div class="row"> <div class="col-md-12">  <div class="row"><div class="col-md-7 row" > <p><hr class="hr-fbx no-mp"></p> </div></div></div></div>

                 
                  <ul class="social">
                  <li><a href="#" class="btn btn-danger "><i class="fa fa-youtube  fa-2x"></i> </a></li>
                  <li><a href="#" class="btn btn-info "><i class="fa fa-skype  fa-2x"></i> </a></li>
                  <li><a href="#" class="btn btn-primary "><i class="fa fa-facebook  fa-2x"></i> </a></li>
                  <ul>
               
               </div> 
           


           <div class="col-md-5 col-sm-12 col-xs-12  form-at-empresa" >

              <form class="form" action="#" method="POST" id="mail_empresa">
                <div class="form-group">
                     <label for="nombre" class="text-left"> Nombre/Empresa:</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="nombre" placeholder="" required="" data-validation-required-message="Por favor ingrese su nombre/empresa.">
               </div>
                <div class="row">
                   <div class="form-group col-md-6">
                      <label for="provincia" class="text-left"> Provincia/Ciudad:</label>
                      <input type="text" class="form-control input-sm" id="provincia" name="provincia" placeholder="" required="" data-validation-required-message="Por favor ingrese su provincia/ciudad.">
                   </div>
                   <div class="form-group col-md-6">
                      <label for="localidad" class="text-left">Localidad:</label>
                      <input type="text" class="form-control input-sm" id="localidad" name="localidad" placeholder="" required="" data-validation-required-message="Por favor ingrese su localidad.">
                   </div>
                </div>
                 <div class="row">
                   <div class="form-group col-md-6">
                      <label for="telefono" class="text-left">Teléfono:</label>
                      <input type="text" class="form-control input-sm" id="telefono" name="telefono" placeholder="" required="" data-validation-required-message="Por favor ingrese su teléfono.">
                   </div>
                   <div class="form-group col-md-6">
                      <label for="email" class="text-left">E-mail:</label>
                      <input type="text" class="form-control input-sm" id="email" name="email" placeholder="" required="" data-validation-required-message="Por favor ingrese su e-mail .">
                   </div>
                </div>
                
               <div class="form-group">
                      <label for="comentario">Consulta:</label>
                       <textarea class="form-control input-sm" rows="3" id="comentario" name="comentario" placeholder="" required="" data-validation-required-message="Por favor ingrese su consulta."></textarea>
                 
               </div>
             <div class="form-group">
               <div id="success2"></div>
                 <div class="pull-right">
                      <button type="submit" class="btn btn-link btn-submited" name="Enviar">ENVIAR</button>
                 </div>
             </div>
         </form>
           </div>
         </div>


       </div>
      
    </section>
     <footer>
       <nav >
         <div class="container">
           <div class="row">
             <div class="pull-left"><img src="<?php echo site_url('assets/images/web/footer-logo.jpg');?>"/></div>
             <div class="pull-right">
               <ul>
                 <li><a href="#">Términos de uso</a></li>
                 <li><a href="#">Política de privacidad</a></li>
                 <li><a href="#">Web Master</a></li>
                 <li><a href="#">Mapa del sitio</a></li>
               </ul>

             </div>
           </div>
         </div>
       </nav>

     </footer>

		
	</main>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?> "></script>
    <script src="<?php echo site_url('assets/js/wow.min.js'); ?> "></script>
    <script src="<?php echo site_url('assets/js/jquery.parallax.js'); ?> "></script>
    <script src="<?php echo site_url('assets/js/script.js'); ?> "></script>
  </body>
</html>