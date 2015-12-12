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
    <div id="stories">
    <div class="row background-img" class="img-responsive" id="image-5">
        </div>
        <div class ="row intro">
    <div class="col-xs-12 col-sm-5 col-sm-offset-1">
        <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/meche.jpg">
            <h3>Mercedes Muñoz</h3>
        <p>I have been smoking since I was eighteen years old, I tried to quit smoking many times, some times I achieve it for a short period of time, I tried all the methods which are available to quit smoking, but at the end when one has some time without smoking ,the only thing that can help you is your willpower. I have willpower for many things but quit smoking I did not achieve it yet, I am very sure I am going to achieve it, I keep trying.</p>
    </div>
<div class="col-xs-12 col-sm-5">
    <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/ruben.jpg">
        <h3>Ruben Fernandez</h3>
            <p>I smoked for many years, I really do not remember for how long but I am sure it was for more that 10 years, the first time I tried to quit I use patches  and it worked, I stayed quit for two years then I started smoking again. I tried the patches again but it didn’t  work, I remember I could not imagined my life without cigarettes, but I was afraid about the side effects that nicotine cause and always I was thinking to quit. One day I had the willpower to quit smoking, now I had four years without nicotine and I feel much better.</p>
        </div>
    </div>
    </div>
    </div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
