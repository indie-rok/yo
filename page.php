<?php get_header(); ?>
<style type="text/css">
    
    .breadcrumbs {
background:#f7f6ed;
padding:10px;
}
.breadcrumbs a {
/*También podemos utilizar uppercase*/
text-transform:capitalize;
color:#666;
font-weight:700;
}   

</style>

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
    <header class="intro-header" style="background-image: url('<?php echo $imgUrl ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo get_the_title(); ?></h1>
                        <span class="meta">Escrito por <a href="#"><?php the_author(', '); ?></a> el <?php the_time('F jS, Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php //include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>

    <hr>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>pagina no encontrada</h2>

	<?php endif; ?>
    </div>
    <hr>

<?php get_footer(); ?>