<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package quit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--my code-->
<div class="container-fluid">
<div class="row background-img" class="img-responsive" id="image-1">
        </div>
<div class="row intro" id="quit">
<div class="col-xs-12 col-sm-4 col-sm-offset-0"><img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/patch.jpg"><p class="text-align:left;"><strong>Chewing Gum
and Patch</strong>
Gradually reduces the
dose of nicotine through
chewing gums or nicotine
patches.</p>
</div>
<div class="col-xs-12 col-sm-4 col-sm-offset-0">
            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/support.jpg"><p class="text-align:center;"><strong>Workshops and
Support Groups</strong>
Group activities guided by
a professional.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-0">
                <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/therapy.jpg"><p class="text-align:center;"><strong>Personalized
Therapy</strong>
Intensive Individual treatment
under the supervision of a
medical professional.</p>
    </div>
</div>
</div>
<div class="container-fluid">
<div class="row background-img" id="image-2"></div>
<div class ="row intro">
<div class="col-xs-12 col-xs-offset-0" id="carouselcontainer">
<h1 class="text-center">Reduce Amount Gradually</h1>
<p class="text-center">If you want to quit smoking you should start reducing the amount of cigarettes each day until you get it down to cero.</p>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>
 <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
<div class="item active">
                            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/slideshow1.jpg" alt=".....">
                            <div class="carousel-caption">
                                Week One
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/slideshow2.jpg" alt=".....">
                            <div class="carousel-caption">
                               Week Tho
                            </div>
                        </div>
                        
                        <div class="item">
                            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/slideshow3.jpg" alt=".....">
                            <div class="carousel-caption">
                                Week Three
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/slideshow4.jpg" alt=".....">
                            <div class="carousel-caption">
                                Week Fourth
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/quit/images/slideshow5.jpg" alt=".....">
                            <div class="carousel-caption">
                                Week Five
                            </div>
                        </div>
</div>
</div>
 <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            
        </div>
    </div>
</div>
<!--end-->
		<?php if ( have_posts() ) : ?>

			<?php //if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php// single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="myPost">
                    <div class="myPostTitle">
                        <?php the_title(); ?>
                    </div>
                    <div class="myPostContent">
                        <?php the_content(); ?>
                    </div>
                </div>

			<?php endwhile; ?>

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

			<?php the_posts_navigation(); ?>

		<?php //else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php //endif; ?>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
    });
});
</script>
        <h2>Quit Smoking</h2>

<p>Quit Today</br>
Smoking produce cancer</p>

<button>Click me</button>

</div>
<div class="col-xs-12 col-sm-5">
    <script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
<p>Quit Smoking Now and click on the "Hide" button, it will disappear, and you are going to have a better life.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
