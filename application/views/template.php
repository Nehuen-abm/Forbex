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
          <div class="col-md-12">
          	
          	<div class="box-fbx-logo pull-left"><img src="<?php echo site_url('assets/images/web/boceto_futbol_profesional.jpg');?>"  class="img-responsive" alt="Logo"></div>
          	<div class="box-fbx-a pull-right">
          	  
                  <img src="<?php echo site_url('assets/images/web/tel.jpg');?>" class="" alt="Idiomas">
                  <a href='<?php echo  site_url('es') ?>'> <img src="http://placehold.it/40x40/fe5858/ffff2d/&text=ES"  class="img-circle" alt=""></a>
                  <a href='<?php echo  site_url('pr') ?>'> <img src="http://placehold.it/40x40/37c776/fcef1b/&text=PR"  class="img-circle" alt=""></a>
                  <a href='<?php echo  site_url('en') ?>'> <img src="http://placehold.it/40x40/375dbf/ea324a/&text=EN"  class="img-circle" alt=""></a> 
               
          	</div>
          	<nav class="box-fbx-nav pull-right">
          	 		<ul>
          	 			<li>NOVEDADES</li>
          	 			<li>CONTACTO</li>
          	 			<li>CLIENTES</li>
          	 			<li>DEPORTES</li>
          	 			<li>CERTIFICACIONES</li>
          	 			<li>ASESORAMIENTO</li>
          	 			<li>CONTACTO</li>
          	 		</ul>
          	</nav> 	
          </div>
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
            <div class="col-md-3"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-a.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-b.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-c.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>
            <div class="col-md-3"><a href="#"><img src="<?php echo site_url('assets/images/bgs/btn-d.jpg');?>"  class="img-responsive" alt="Slide1" /></a></div>    

	    </nav>
	</section>


	<main id="body-fbx">

		<section class="box-fbx-ftball">
        <div class="container">
          <div class="row ">

                <div class="col-md-12 clear">
                  <h1 class="text-center">  <?php  echo lang('msg_index_fp_titulo'); ?></h1>
                </div>

                <div class="col-md-6">
                  <p>  <?php  echo lang('msg_index_fp_text_col_a'); ?></p>
                </div>

                <div class="col-md-6">
                  <p>   <?php  echo lang('msg_index_fp_text_col_b'); ?> </p>
                </div>  

                <div class="col-md-12 clear"><hr></div>

                <div class="col-md-6">
                  <div class="fbx-ico-cancha">  
                    <img src="<?php echo site_url('assets/images/web/cancha.png');?>"/>
                  </div>
                </div>

                <div class="col-md-6">
                 <h2>
                    ES MOMENTO DE PENSAR EN LAS TÁCTICAS, 
                    PORQUE PARA LOGRAR EL JUEGO PERFECTO
                    EL CAMPO, SIN DUDAS, ES FORBEX.
                  </h2>
                </div> 

                <div class="col-md-12 clear"><hr></div>
          </div>
          
        </div>  
    </section>

    <section class="box-fbx-productos box-fbx-gris">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" >
            <h2>PRODUCTOS PARA FÚTBOL PROFESIONAL</h2>
            <p>
              Atendemos las necesidades de todas las entidades en las que se practica fútbol de manera profesional
              brindandoles 3 productos diferentes con la calidad que exigen los mas altos estándares.

            </p>
            <p>
              <img src="<?php echo site_url('assets/images/web/fbx-ta.jpg');?>"  />
              <img src="<?php echo site_url('assets/images/web/fbx-tb.jpg');?>"  />
              <img src="<?php echo site_url('assets/images/web/fbx-tc.jpg');?>"  />
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>
       <div class="container">
                <div class="row">
                    
                   
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       
                      <figure class="aim pull-left" >



                        <img alt="Prueba" class="img-responsive wow fadeInDown capa-1" src="<?php echo site_url('assets/images/capa_1.png'); ?>" data-wow-delay="0.1s"/>
                        <img alt="Prueba" class="img-responsive wow fadeInDown capa-2" src="<?php echo site_url('assets/images/capa_2.png'); ?>" data-wow-delay="0.3s"/>
                        <img alt="Prueba" class="img-responsive wow fadeInDown capa-3" src="<?php echo site_url('assets/images/capa_3.png'); ?>" data-wow-delay="0.5s"/>
                        <img alt="Prueba" class="img-responsive wow fadeIn     capa-4" src="<?php echo site_url('assets/images/capa_4textoyflechas.png'); ?>" data-wow-delay="0.8s"/>
                        <img alt="Prueba" class="img-responsive wow fadeIn     capa-5" src="<?php echo site_url('assets/images/logo_tencate.png'); ?> " data-wow-delay="1s"/>
                      </figure>
                        
                    </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="descripcion  wow fadeInDown" data-wow-delay="0.1s">
                            
                          <h3>11.000 MD</h3>
                            <p>
                            "11.000 MD" es el sistema que Forbex desarrolló exclusivamente para canchas de fútbol profesional. Se distingue por sus excelentes cualidades técnicas para la práctica de este deporte.
                            </p>
                             <p>      
                            Este sistema tiene como principales características la importante altura de la fibra y el espacio entre pelos, rellenados con gránulos de caucho. Esta cualidad iguala a la sensación de correr sobre césped natural.
                             </p>
                             <p>
                            El sistema "11.000 MD" disminuye los riesgos y otros problemas en jugadores profesionales, pudiendo ser utilizado los 365 días del año, independientemente de las condiciones climáticas.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
    </section>

    <section class="box-fbx-gris bg-arrow fbx-aim-b ">
          <div class="container">
            <div class="row">
              
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="descripcion wow fadeInDown " data-wow-delay="0.2s">
                    
                  <h3>MF PRO</h3>
                    <p>
                    Uno de los sistemas que siguen las normas dadas por laboratorios aprobados por la F.I.F.A es "MF PRO", un sistema desarrollado exclusivamente para canchas de fútbol profesional. 
                    </p>
                     <p>      
                   Tiene como principales características la importante altura de la fibra y el espacio entre pelos, rellenados con gránulos de caucho. Esta novedosa composición genera una excelente amortiguación, igualando la sensación de correr sobre el césped natural. 
                     </p>
                     <p>
                    El sistema "MF PRO" disminuye los riesgos de lesiones, contracturas y otros problemas en jugadores profesionales, pudiendo ser utilizado los 365 días del año independientemente de las inclemencias climáticas.
                    </p>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <p  class="wow fadeInRight " data-wow-delay="0.2s"> <img src="<?php echo site_url('assets/images/web/img-aim-b.jpg');?> " class="img-responsive"/></p>
            </div>
            </div>
          </div>
    </section>
    <section>
       <div class="container">
                <div class="row">
                    
                   
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       
                     <p><img src="<?php echo site_url('assets/images/web/img-aim-c.jpg');?>" class="img-responsive"/></p>
                        
                    </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="descripcion  wow fadeInDown" data-wow-delay="0.1s">
                            
                          <h3>360 M</h3>
                            <p>
                              Es otro de los sistemas desarrollados por Forbex, exclusivamente para el fútbol profesional. 
                            </p>
                             <p>      
                             Esta variedad posee excelentes cualidades técnicas para la práctica del deporte y es uno de los sistemas que siguen las normas dadas por laboratorios aprobados por la F.I.F.A.
                             </p>
                             <p>
                             El sistema "360M" disminuye los riesgos y otros problemas en jugadores profesionales, pudiendo ser utilizado los 365 días del año, independientemente de las condiciones climáticas.
                            </p>
                        </div>
                    </div>



                    <div class="col-md-12  col-sm-12  col-xs-12 fbx-relleno">
                       <div class="row">
                         <div class="col-md-6 box-fbx-text">
                            <h2>La importancia del relleno</h2>
                            <p>
                              Para optimizar el rendimiento de un campo de césped sintético, el relleno del mismo debe contener 10kg de caucho por m2. 
                            </p>
                             <p>
                                Si no se utilizara la cantidad correcta, el deterioro del campo seria alto y los estándares de rendimiento bajarían notablemente.
                             </p>
                             <p> 
                                El caucho, al incluirse en los campos, debe tener una granulometría especial, detallada por los laboratorios de la FIFA. Esta granulometría permite que el producto dure más y tenga una mayor consistencia..
                              </p>
                         </div>
                         <div class="col-md-6">
                           <img src="<?php echo site_url('assets/images/web/img-relleno.jpg');?>"/>
                         </div>
                       </div>
                    </div>
                </div>
               
            </div>

    </section>

    <section class="fbx-vista-obras ">

      <div class="container">
         <div class="row">
          <hr class="hr-fbx">
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>OBRAS DE FÚTBOL PROFESIONAL</h1>
              <p>Llevamos instaladas diversas canchas en reconocidas instituciones deportivas. 
                Los países que más juegan este deporte nos eligen para sus proyectos.
              </p>
          </div>
          <div class="col-md-12 galeria">
           <div class="col-md-9">
             <img src="<?php echo site_url('assets/images/imagenes obras/01_river.jpg'); ?>"   class="img-responsive">

           
               <div class="col-md-3"><img src="<?php echo site_url('assets/images/imagenes obras/02_grecia.jpg'); ?>"  class="img-responsive"></div>
               <div class="col-md-9"><img src="<?php echo site_url('assets/images/imagenes obras/3.jpg'); ?>"          class="img-responsive"></div>
             
           </div>
           <div class="col-md-3">
             <img src="<?php echo site_url('assets/images/imagenes obras/4.jpg'); ?>" class="img-responsive">
           </div>
           <div class="col-md-6">
            <img src="<?php echo site_url('assets/images/imagenes obras/5.jpg'); ?>" class="img-responsive">
            <img src="<?php echo site_url('assets/images/imagenes obras/7.jpg'); ?>" class="img-responsive">
           </div>


           <div class="col-md-6">   
                <img src="<?php echo site_url('assets/images/imagenes obras/6.jpg'); ?>" class="img-responsive">
                <div class="col-md-6"><img src="<?php echo site_url('assets/images/imagenes obras/8.jpg'); ?>" class="img-responsive"></div>
                <div class="col-md-6"><img src="<?php echo site_url('assets/images/imagenes obras/9.jpg'); ?>" class="img-responsive"></div>
           </div>

          </div>
            <p class="text-center"><a href="#" class="btn btn-link">Ver banco de imágenes ></a></p>

        </div>
      </div>
    </section>
    <section class="box-fbx-gris certi">
       <div class="container">
         <div class="row">
           <div class="col-md-12 text-center">
               <h2>CERTIFICACIONES</h2>
               <p>Forbex cuenta con numerosos certificados internacionales que garantizan la alta calidad de su césped sintético. </p>
               <p >
                 <img src="<?php echo site_url('assets/images/web/img-ca.jpg'); ?>"/>
                 <img src="<?php echo site_url('assets/images/web/img-cb.jpg'); ?>"/>
                 <img src="<?php echo site_url('assets/images/web/img-cc.jpg'); ?>"/>
                 <img src="<?php echo site_url('assets/images/web/img-cd.jpg'); ?>"/>
                 <img src="<?php echo site_url('assets/images/web/img-ce.jpg'); ?>"/>
               </p>
           </div>
         </div>
       </div>
    </section>    
    <section class="parallax-quote parallaxBg box-fbx-bf-fixed">
        <div class="container">
          <!--   <div class="parallax-quote-in">
                <p>If you can design one thing <span class="color-green">you can design</span> everything. <br> Just Believe It.</p>
                <small>- HtmlStream -</small>
            </div> -->
             <div class="col-md-7 col-md-offset-5">
             <h2>FORBEX ESTARÁ PRESENTE EN CADA PASO</h2>
              <p>
                Nuestros asesores comerciales lo asistiran desde el momento de la creación de la cancha, ofreciendole toda nuestra variedad de servicios para que sólo tener que preocuparse por el juego.
              </p>
             
                <ul>
                  <li><p><img src="<?php echo site_url('assets/images/web/fbx-cca.png'); ?>"/><br><span>test</span></p></li>
                  <li><p><img src="<?php echo site_url('assets/images/web/fbx-ccb.png'); ?>"/><br><span>test</span></p></li>
                  <li><p><img src="<?php echo site_url('assets/images/web/fbx-ccc.png'); ?>"/><br><span>test</span></p></li>
                  <li><p><img src="<?php echo site_url('assets/images/web/fbx-ccd.png'); ?>"/><br><span>test</span></p></li>
               
                </ul>
           
           </div>
        </div>
    </section>
  
    <section class="box-fbx-empresa">
       <div class="container">

         <div class="row">



            <div class="col-md-6">
              <p><img src="<?php echo site_url('assets/images/web/25afbx.jpg'); ?>"/></p>
           </div> 
           <div class="col-md-6">
            <h3>MAS DE 25 AÑOS FABRICANDO EL MEJOR CÉSPED</h3>
              <p>
                Desarrollamos césped sintético con la más avanzada tecnología de producción desde hace más de 25 años en nuestra propia planta de fabricación mejorando día a día para brindarle la mejor calidad.  
              <br>

                Conocer más sobre la empresa >
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

           
         <div class="row"> <div class="col-md-12">  <div class="row"><div class="col-md-7" > <p><hr class="hr-fbx no-mp"></p> </div></div></div></div>

             <p> <a href="#" class="btn btn-link "><i class="fa fa-youtube  fa-2x"></i> </a>
              <a href="#" class="btn btn-link "><i class="fa fa-skype  fa-2x"></i> </a>
              <a href="#" class="btn btn-link "><i class="fa fa-facebook-square  fa-2x"></i> </a></p>

           </div> 


           <div class="col-md-5  form-at-empresa" >

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