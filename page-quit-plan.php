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
<div class="row background-img" class="img-responsive" id="image-6">
        </div>
        <div id="plan">
        <div class ="row intro">
         <div class="col-xs-12 col-sm-5 col-sm-offset-1">
        <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/plan.jpg">
    </div>
    <div class="col-xs-12 col-sm-5">
    <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/plan1.jpg">
</div>
</div>
</div>
    </div><!--end container fluid-->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
