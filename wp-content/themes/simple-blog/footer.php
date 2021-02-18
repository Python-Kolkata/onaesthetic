<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple_blog
 */

?>

<footer>
    <div class="foot-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 pr-md-5">
                    <?php
                      dynamic_sidebar( 'footer-area-1' );
                    ?>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                        <?php
                          dynamic_sidebar( 'footer-area-2' );
                        ?>
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <?php
                            dynamic_sidebar( 'footer-area-3' );
                          ?>
                        </div>
                        <div class="col-lg-5 col-md-4">
                          <?php
                              dynamic_sidebar( 'footer-area-4' );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-btm">
        <div class="container">
            <p>© <?=date('Y')?>, <span>ON Aesthetic</span>. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Book Now</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="modal-form">
			  <?php echo do_shortcode('[contact-form-7 id="72" title="Contact page"]')?>
<!--             <div class="form-group">
                <input type="text" value="" name="" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="text" value="" name="" class="form-control" placeholder="Email ID">
            </div>
            <div class="form-group">
                <input type="text" value="" name="" class="form-control" placeholder="Phone No.">
            </div>
            <div class="form-group">
                <textarea class="form-control textarea" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn_theme btn-submit btn-block" type="submit"><span>book now</span></button>
            </div> -->
                </div>
        </div>
        
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
<script>
      (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('.navbar-nav li a:not(:only-child)').click(function(e) {
      $(this).siblings('.sub-menu').toggle();
      // Close one dropdown when selecting another
      $('.sub-menu').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.sub-menu').hide();
    });
    // Toggle open and close nav styles on click
    //$('#nav-toggle').click(function() {
      //$('nav ul').slideToggle();
    //});
    // Hamburger to X toggle
    //$('#nav-toggle').on('click', function() {
      //this.classList.toggle('active');
    //});
  }); // end DOM ready
})(jQuery); // end jQuery
  </script>

</body>
</html>
