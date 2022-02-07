<?php get_header(); ?>
<div class="clearfix"></div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="innerbanner">
            <div class="container">
                <div class="col-md-12">
                    <div class="bred">
                        <h1><?php the_title(); ?></h1>
                        <ul>
                            <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<section class="innercontent">
<div class="container">
<?php the_content(); ?>
</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<section style="border-bottom:2px solid #ccc;"></section>
<?php get_footer(); ?>
