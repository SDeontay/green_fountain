 <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

<?php if ( is_active_sidebar( 'social-links' ) ) { ?>
<?php dynamic_sidebar( 'social-links' );
} else {


 ?>

                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>

<?php } ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2020 The Green Foundation</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

  </body>
</html>



