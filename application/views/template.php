<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forbex Web Site</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
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
          	
          	<div class="box-fbx-logo pull-left"><img src="http://placehold.it/360x90"  class="img-responsive" alt="Logo"></div>
          	<div class="box-fbx-a pull-right">
          		<img src="http://placehold.it/160x40" class="" alt="Idiomas">
          		<a href='<?php echo  site_url('es') ?>'> <img src="http://placehold.it/40x40/fe5858/ffff2d/&text=ES"  class="" alt=""></a>
          		<a href='<?php echo  site_url('pr') ?>'> <img src="http://placehold.it/40x40/37c776/fcef1b/&text=PR"  class="" alt=""></a>
          		<a href='<?php echo  site_url('en') ?>'> <img src="http://placehold.it/40x40/375dbf/ea324a/&text=EN"  class="" alt=""></a>

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
	                <img src="http://placehold.it/1900x350/395c24/ffffff" alt="Slide1" />
	            </div>
	            <div class="item">
	                <img src="http://placehold.it/1900x350/a8c2e3/ffffff" alt="Slide2" />
	            </div>
	            <div class="item">
	                <img src="http://placehold.it/1900x350/646263/ffffff" alt="Slide3" />
	            </div>
	        </div>
	 
	    </div>

	    <nav class="box-fbx-nav">
	    	<ul>
		    	<li><a href="#"><img src="http://placehold.it/475x200/646263/ffffff" alt="Slide1" /></a> </li>
		    	<li><a href="#"><img src="http://placehold.it/475x200/646263/ffffff" alt="Slide1" /></a> </li>
		    	<li><a href="#"><img src="http://placehold.it/475x200/646263/ffffff" alt="Slide1" /></a> </li>
		    	<li><a href="#"><img src="http://placehold.it/475x200/646263/ffffff" alt="Slide1" /></a> </li>
	    	</ul>
	    </nav>
	</section>


	<main id="body-fbx">

		<div class="container">
			<div class="row">
				<div class="col-md-12 box-fbx-ftball">
					<h1 class="text-center">  <?php  echo lang('msg_index_fp_titulo'); ?></h1>
					<div class="col-md-6">
			 			<p>  <?php  echo lang('msg_index_fp_text_col_a'); ?></p>
			 		</div>
			 		<div class="col-md-6">
			 			<p>   <?php  echo lang('msg_index_fp_text_col_b'); ?> </p>
			 		</div> 	
          <p>
          
          </p>	
          <p>
            



          
          </p>
				</div>
			</div>

		</div>
		
	</main>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?> "></script>
    <script src="<?php echo site_url('assets/js/script.js'); ?> "></script>
  </body>
</html>