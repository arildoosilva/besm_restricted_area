<?php
	// HEAD
	echo '<!DOCTYPE html>',
		 '<html ';
	language_attributes();
	echo '>',
		 '<head>',
		 '<meta charset="'.get_bloginfo('charset').'">',
		 '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes"/>';
?>
<title>BESM | Wiki<?php // wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php
    // Blog description
	echo '<meta name="description" content="';
	if ( is_single() ) { 
		single_post_title('', true); 
	} else { 
		bloginfo('name'); echo " - "; 
		bloginfo('description'); 
	} 
	echo '" />',
		 '<link rel="pingback" href="'.get_bloginfo('pingback_url').'">';
	// wp_head() function (see functions.php)
    wp_head();
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://restrito.ccst.inpe.br/wp-content/themes/wikiwp/js/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="http://restrito.ccst.inpe.br/wp-content/themes/wikiwp/css/colorbox.css">
<?php
	echo '</head>';

	// HEADER
	echo '<body ';
	body_class('body');
	echo '>',
    

    // Header
         '<header>',
         '<div class="header-content">',
	// Custom logo
		 '<div id="logo">';
	if (get_theme_mod('custom_logo')) {
		echo '<a href="'.esc_url(home_url('/')).'" id="site-logo" title="'.esc_attr(get_bloginfo('name', 'display')).'" rel="home">',
	 		 '<img class="logo-img" src="'.get_theme_mod('custom_logo').'" alt="'.esc_attr(get_bloginfo('name', 'display')).'">',
			 '</a>';
    // If no custom logo is set, show blog name
	} else {
		echo '<h2 class="blog-name"><a href="'.get_home_url().'/">'.get_bloginfo('name').'</a></h2>';
	}
    // Blog description
    if ( get_bloginfo( 'description' ) ) {
            echo '<span class="blog-description">'.get_bloginfo('description').'</span>';
        }
    // echo '<span class="blog-description"><a href="http://restrito.ccst.inpe.br/category/wiki/">Wiki</a></span>';
    echo '</div>', // End of #logo
    '</div>', // End of .header-content
         '</header>',
             
    // Container
         '<div class="container-fluid page-container">';

// WordPress core custom header image
    $header_image = get_header_image();
		if ( empty( $header_image ) ) {
			// If no header image is set
            // Search form
            echo '<div class="meta clearfix">';
        } else {
            echo '<div class="header-image-container">',
                 '<img src="'.esc_url( $header_image ).'" class="header-image" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />',
                 '</div>',
            // Search form
                 '<div class="meta  meta-header-image clearfix">';
        } // End of custom header

    echo '<div class="meta-search-form">';
		 get_search_form();
		 echo'</div>';
	if (is_user_logged_in()) {
		// if ( current_user_can('edit_post', 123) ) {  // alterado
		if ( current_user_can('publish_posts', 123) ) {
				// echo '<a href="'.get_home_url().'/wp-admin/post-new.php" target="_self" class="add-post-link"><small><span class="add-post-link-plus">+</span><span class="add-post-link-text">&nbsp;';  // alterado
				// echo '<a href="http://restrito.ccst.inpe.br/adicionar/" target="_self" class="add-post-link"><small><span class="add-post-link-plus">+</span><span class="add-post-link-text">&nbsp;';
		 	// _e('Adicionar post', 'wikiwp');  // alterado
			echo '</span></small></a>';
		}
	}
	echo '</div>'; // End of .meta
         
?>
