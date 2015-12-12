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
    <div class="row background-img" class="img-responsive" id="image-4">
        </div>
    <div class="row intro" id="quit">
<div class="col-xs-12 col-sm-5 col-sm-offset-1">
  <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/abt.jpg">
</div>
<div class="col-xs-12 col-sm-5">
  <div id="about">
    <h1>ABOUT US</h1>
    <p>The online program Quit Smoking Help Center, is a free program.
This website help people to reduce the consumption of cigarettes, also helps to quit smoking. Tobacco harms the health of both the smoker and the people around them.<br />
Through this website and email a group of experts in the Tobacco Treatment from the department of health of New York will offer useful guidelines and recommendations in your particular battle against nicotine addiction.<br />
If you are thinking about quitting, access the program and register.<br />
We know it is not easy, but with your willpower and our help you can quit smoking.<br />
Living without nicotine is to live free.</p>
  </div>
</div>
        </div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
