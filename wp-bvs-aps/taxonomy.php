<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$taxonomy = get_queried_object();
get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php _e('Segunda Opinião Formativa - SOF', 'bvs_lang'); ?></li>
		  	</ol>
		</nav>		

		<div class="row justify-content-center">
			<div class="col-md-11">
				<header class="page-header">
					<?php echo $taxonomy->name; ?>
				</header><!-- .page-header -->

				<?php
				if ( have_posts() ) : ?>			
					
					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/item', 'sof' );

						endwhile; 
						?>
					</div>

					<?php
					get_template_part( 'template-parts/navigation' );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</div>

		<?php get_template_part('template-parts/last', 'sofs'); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
