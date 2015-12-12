<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package quit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container-fluid">
<div class="row background-img" class="img-responsive" id="image-3">
        </div>
    </div><!--end container fluid-->

			<?php endwhile; // End of the loop. ?>

		<?php
			$args = array( 'post_type' => 'final_item', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
