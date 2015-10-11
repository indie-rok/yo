<?php get_header(); ?>
 <div id="contenido">

    <?php if (have_posts()) : while (have_posts()) : the_post(); 

    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    
}else{
    $imgUrl = get_template_directory_uri()."/img/noImagePostBg.png";
}
?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $imgUrl?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title()?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_excerpt()?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Mandame tu mensaje. Los leo todos</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Porfavor ingresa tu nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Porfavor ingresa tu email:">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Tu mensaje..." id="message" required data-validation-required-message="Porfavor ingresa un mensaje..."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <?php endwhile; ?>

    <?php else : ?>

        <h2>pagina no encontrada</h2>

    <?php endif; ?>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/contact_form.js"></script>
<?php get_footer(); ?>