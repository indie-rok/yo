<?php
/*
* Template Name: Cuadros Featured
*/
?>
<?php get_header();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    
}else{
    $imgUrl = get_template_directory_uri()."/img/noImagePostBg.png";
}

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<header class="intro-header" style="background-image: url('<?php echo $imgUrl ?>')">
        <div class="container">
            <div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title()?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_excerpt() ?></span>
                    </div>
                </div>
            </div>
	    </div>
	</header>
	<?php } // end while
} // end if
?>

<?php $this_page_id=$wp_query->post->ID; ?>

    	<?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')) ?>
        <?php if ( have_posts() ) : while ( have_posts() ) :
the_post(); ?>

<a href="<?php the_permalink() ?>">

<div class="fondo col-md-4 center-block">
<?php if(has_post_thumbnail())
{
	the_post_thumbnail('cuadros_featured');
}

else{
	echo "<img src=".get_template_directory_uri()."/img/noThumbPage.png>";
}
?>


<p><?php the_title() ?></p>
</div><!--/fondo-->

</a>

<?php endwhile; else: ?>
<p ><?php _e('No hay post. Sorry!'); ?></p>
<?php endif; ?>


</section><!--row-->
</article><!--/container-->

<hr>
<?php get_footer(); ?>