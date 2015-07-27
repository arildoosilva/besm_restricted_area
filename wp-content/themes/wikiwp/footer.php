<?php
	echo '</div>', // end of .container
    // Footer
         '<footer class="container-fluid">',
         '<div class="content clearfix">';
    // dynamic sidebar    
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : endif;
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-mid') ) : endif;
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : endif;
    // credits
    
         // '<p>',
		 // '<strong>&copy;&nbsp;';
	echo '</div></footer>';
 	wp_footer();

	echo '</body></html>';
?>


