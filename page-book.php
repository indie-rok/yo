<?php
/*
* Template Name: Page Book
*/
?>

<?php get_header(); ?>

 <div id="contenido">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php 
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
                        <center><h1><?php echo get_the_title();?></h1></center>
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