<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(''); ?></title>
    
    <link title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" /><link href="<?php bloginfo('pingback_url'); ?>" rel="pingback" />
 <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/landing.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">

    <!--Google author-->
    <a href="https://plus.google.com/107999895593280172023"  rel="publisher"></a>

<?php wp_head(); ?>
</head>

<body>

<div class="fullscreenDiv backgroundImg">
<div class="row">
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url()?>">Emmanuel Orozco</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 0,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_page_menu',
                'walker'            => new wp_bootstrap_navwalker())
            );?>
            </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
        </div><!-- /.container -->
    </nav>
</div>

<div class="container">
    <div class="col-md-6 pull-right titleMain">
      <h1>Me llamo Emmanuel</h1>
      <h4>Me gusta tomar fotografias y hacer aplicaciones web..</h2>
      <btn class="btn btn-default" id="conoceme">Conoceme</btn>
    </div>
</div>

</div><!--/backgrounImg-->


<div class="fullscreenDiv" id="2">
    <div class="container">
      <div class="aboutMe col-md-12">
        <h2>Bon Soir.</h2>
          <p>Ahora mismo vivo en Playa del Carmen. Esta chingon.asdasd</p>
          <p>Me gusta tomar fotografias que inspiren personas.</p>
          <p>Hago aplicaciones web. Soy amante de Ruby on Rails y del cafe.</p>
          <p>Me gusta Paris.</p>
          <p>En mi blog vas a encontrar 3 cosas:
            <ul>
                <li>Mis fotos con historias de viajes por el mundo.</li>
                <li>Mi trabajo en desarrollo web</li>
                <li>Ideas que me inspiran y quiero compartir</li>
            </ul> 
          </p>
          <p>SI quieres contactarme. Aca.</p>
      </div>
    </div>
</div><!--/fullscreenDiv-->


    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/clean-blog.min.js"></script>

<script type="text/javascript">
    $("#conoceme").click(function() {
    $('html, body').animate({
        scrollTop: $("#2").offset().top
    }, 800);
});

</script>

</body>
</html>
