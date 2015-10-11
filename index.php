<?php get_header(); ?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Inspiracion</h1>
                        <hr class="small">
                        <span class="subheading">Ideas para joder la vida</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


		<div class="container">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
				
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
		                    <p class="post-meta">Escrito por <?php the_author(); ?> el 
		                    	<?php the_time( 'j-M-y' ); ?>
		                    </p>
		                </div>
		                <hr>
		            </div>
		        </div>

		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

			<!-- Pager -->
		                <ul class="pager">
		                    <li class="next">
		                        <a href="#">Older Posts &rarr;</a>
		                    </li>
		                </ul>
			<!--end navigation-->
		<?php else : ?>
		<?php endif; ?>
		</div><!--/container-->
<hr>
<?php get_footer(); ?>