<?php
    /*
    Template Name: Usuarios
    */

	get_header();
	get_template_part('navigation');

    // postmeta
	get_template_part('postmeta' );
	// POST
	while ( have_posts() ) : the_post();
	echo '<div class="content"';
	post_class('post');
	echo '>',
		 '<h1 class="page-title">';
	the_title();
	echo '</h1>';

// content goes here
?>

<!-- start of custom content -->
<div class="excerpt noborderbottom">
    <?php
	echo do_shortcode('[authoravatars show_name=true roles=administrator,superuser,user hiddenusers=admin]');
    ?>
	&nbsp;
</div>
<!-- end of custom content -->

<?php
// end of content

	// get_template_part('postinfo' );  // alterado
    get_sidebar();
	// comments
	comments_template();
	endwhile;
	echo '</div>'; // end of .content
    // footer
    get_footer();
?>
