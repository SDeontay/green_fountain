<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>The Green Foundation</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                            <?php if ( has_custom_logo() ) { ?>
                        <a class="logo" href="<?php echo get_home_url(); ?>">  <?php //the_custom_logo(); ?>
<img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>
" >
                         </a>
                        <?php } else { ?>
                        <a href="<?php echo get_home_url(); ?>" class="logo">
                          <h1>Green Foundation</h1>
                        </a>
                    <?php } ?>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->


                   
                        <?php
if ( has_nav_menu( 'primary' ) ){
$defaults = array(
    'menu_class'      => 'primary-menu nav',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
);

wp_nav_menu( $defaults );
}
else {
?>
                        <ul class="nav">
                            <li><a href="<?php echo get_home_url(); ?>/">Home</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#features">About</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#projects">Projects</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#get-involved">Get involved</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#news">News</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#shop">Shop</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/#contact-us">Contact Us</a></li>
                        </ul>
<?php } ?>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

  


