<?php
/*
* Template Name: Blog Page
*/
?>
<?php get_header(); ?>

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
                    <div class="site-heading">
                        <h1><?php the_title()?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_excerpt()?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php endwhile; ?>

    <?php else : ?>

        <h2>pagina no encontrada</h2>

    <?php endif; ?>


    <div class="container">


<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'category_name' => 'inspiracion',
    'posts_per_page' => 5,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  <div class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <h2 class="post-title">
                               <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo get_the_excerpt(); ?>
                            </h3>
                        </a>
                        <p class="post-meta">Escrito por <a href="<?php get_home_url()?>/contacto"> <?php the_author(); ?></a> el 
                          <?php the_time( 'j-M-y' ); ?>
                        </p>
                    </div>
                    <hr>
                </div>
    </div>
<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>

				<ul class="pager">
                    <li class="next">
                         <?php echo get_next_posts_link( 'Mas Entradas', $the_query->max_num_pages );?>
                    </li>

                    <li class="p">
                         <?php echo get_previous_posts_link( 'Anterior' ); // display newer posts link ?>
                    </li>
                </ul>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('No hay post :-('); ?></p>
  </article>
<?php endif; ?>
    </div><!--/container-->
<hr>
<?php get_footer(); ?>