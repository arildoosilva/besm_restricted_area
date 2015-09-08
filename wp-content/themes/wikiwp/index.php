<?php
    get_header();
    get_template_part('navigation');

    echo '<div class="content">',
         '<div class="cat-content">',
    // Category name
         '<h1 class="cat-title">';
    if ( is_front_page() && is_home() ) {
         _e('Experimentos', 'wikiwp');
         // echo '&nbsp;'.get_bloginfo('name');
    } else {
        wp_title('');
    }
    echo '</h1>';
    // Blog description
    if ( is_front_page() && is_home() && get_bloginfo( 'description' ) ) {
            // echo '<p><small class="cat-title-description">'.get_bloginfo('description').'</small><p>';
        }

    get_template_part('inicio-page');

//echo '<div>';  // div for using half of the screen

    echo '<h1 class="cat-title new_posts_h1">Novos posts</h1>';

    // Post excerpt
    if ( have_posts() ) : while (have_posts()) : the_post();
    echo '<div class="excerpt clearfix">';
    // Thumbnail
    if ( has_post_thumbnail() ) {
    echo '<a class="excerpt-thumbnail" href="';
    the_permalink();
    echo '" title="';
    the_title_attribute();
    echo '">';
    the_post_thumbnail('mini');
    echo '</a>';
    // Post title
        echo '<h2 class="excerpt-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>',
        // Post info
             '<div class="postinfo postinfo-excerpt">',
			 '<span>'.get_the_date().'</span>',
			 '<span>'.the_category().'</span>',
		   	 '</div>'; // End of .postinfo-excerpt
    } else {
        // Post title
        echo '<h2 class="excerpt-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>',
        // Post info
             '<div class="postinfo postinfo-excerpt">',
			 '<span>'.get_the_date().'</span>',
			 '<span>'.the_category().'</span>',
		   	 '</div>'; // End of .postinfo-excerpt
    }
    // Excerpt
    the_excerpt();
    // Post info
    get_template_part('postinfo');
    echo '</div>'; // End of .excerpt


    endwhile;

//echo '</div>';  // end of div for using half of the screen

echo '</div>'; // End of .cat-content
    // Pargination
    echo '<div class="posts-pagination">'; 
    previous_posts_link('<span class="next-posts-link">&laquo; '.__('Novos posts', 'wikiwp').'</span>');
    next_posts_link('<span class="previous-posts-link">'.__('Posts antigos', 'wikiwp').' &raquo;</span>');  
    else : 
    echo '</div>'; // End of .posts-pargination
    // If no posts were found
    endif;
    echo '</div>', // End of .content
         '</div>'; // End of 
    // Sidebar
    get_sidebar();
    // Footer
    get_footer();
?>
