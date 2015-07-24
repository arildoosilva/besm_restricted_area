<?php
	echo '<aside>',
         '<div class="aside-container">';
    // Category
    if (is_category() || is_home() || is_front_page()) {
    echo '<ul class="dynamic-sidebar">';
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif;
	echo '</ul>';
    } 

    // Category Wiki
    elseif (in_category('wiki')) {
        while ( have_posts() ) : the_post();
		echo '<div class="postmeta clearfix">';
		// thumbnail
		$header_image = get_header_image();
		if ( empty( $header_image ) ) {
			// If no custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        } else {
            // If custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail thumbnail-header-image" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        }
		// post title
        echo '<span class="postmeta-title">';
		the_title();
		echo '</span>';
		// edit
		if (is_user_logged_in()) {
			echo '<span class="postmeta-edit">';
			//edit_post_link(__('Editar', 'wikiwp'));  // alterado
			echo '<a class="post-edit-link" href="http://restrito.ccst.inpe.br/adicionar/?task=edit&postid='.get_the_ID().'">Editar</a>';
			echo '</span>';
		}
		// modified date
		echo '<span class="postmeta-section modified-date"><strong>';
			 _e('Atualizado em', 'wikiwp');
		echo '</strong>&nbsp;';
		the_modified_date();
		echo '</span>',
		// author
		'<span class="postmeta-section author"><strong>';
		_e('Author', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_author_posts_link();
		echo '</span>',
		// date
		'<div class="postmeta-section date"><strong>';
		_e('Publicado', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_date();
		echo '</div>',
		// categories
		'<div class="postmeta-section categories">';
		_e('Categorias', 'wikiwp');
		echo ':&nbsp;';
		the_category(', ');
		echo '</div>',
		// tags
		'<span class="postmeta-section tags">';
		_e('Tags', 'wikiwp');
		echo ':&nbsp;';
		$tag = get_the_tags();
		if (! $tag) { 
			echo 'Este post não tem nenhuma tag';
		} else {
			the_tags('',', ','');
		}
		echo '</span>',
		// get 5 related posts
             '<div class="postmeta-section related">',
             '<strong>'.__('Posts relacionados', 'wikiwp').'</strong>',
             '<ul class="related-posts">';
		// if post has tags show related posts by tags
		if( has_tag() ) {
			$tags = wp_get_post_tags($post->ID);
			if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'showposts'=>5,
					'ignore_sticky_posts'=>1
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post();
					echo '<li><a href="'.get_the_permalink().'" rel="bookmark" title="';
					the_title_attribute();
					echo '"><div class="related-post-thumb">'.get_the_post_thumbnail($post->ID, 'mini').'</div>',
						 '<span>'.get_the_title().'</span>',
					 	 '</a></li>';
					endwhile;
				}
			}
		}
		// if post has no tags show related posts by category
		else {
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
				setup_postdata($post); 
        		echo '<li><a href="'.get_the_permalink().'" rel="bookmark" title="';
				the_title_attribute();
				echo '"><div class="related-post-thumb">'.get_the_post_thumbnail($page->ID, 'mini').'</div>',
					 '<span>'.get_the_title().'</span>',
					 '</a></li>';
       		}
			wp_reset_postdata(); 
		}
		echo '</ul>', 
			 '</div>', // end of .related-posts
			 '</div>'; // end of .postmeta
        endwhile;
	} 
    
    // Page Template Wiki
    elseif (is_page_template('wiki-page.php')) {
		echo '<div class="postmeta clearfix">';
        // thumbnail
		$header_image = get_header_image();
		if ( empty( $header_image ) ) {
			// If no custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        } else {
            // If custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail thumbnail-header-image" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        }
		// post title
        echo '<span class="postmeta-title">';
		the_title();
		echo '</span>';
		// edit
		if (is_user_logged_in()) {
			echo '<span class="postmeta-edit">';
			edit_post_link(__('edit', 'wikiwp'));
			echo '</span>';
		}
		// modified date
		echo '<span class="postmeta-section modified-date"><strong>';
			 _e('Last update on', 'wikiwp');
		echo '</strong>&nbsp;';
		the_modified_date();
		echo '</span>',
		// author
		'<span class="postmeta-section author"><strong>';
		_e('Author', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_author_posts_link();
		echo '</span>',
		// date
		'<div class="postmeta-section date"><strong>';
		_e('Published', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_date();
		echo '</div>',
			 '</div>'; // end of .postmeta
	} 

    // Page 
    elseif (is_page()) {
        echo '<ul class="dynamic-sidebar">';
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif;
        echo '</ul>';
    } 

    

    // Single post
    elseif (is_single()) {
		while ( have_posts() ) : the_post();
		echo '<div class="postmeta clearfix">';
		// thumbnail
		$header_image = get_header_image();
		if ( empty( $header_image ) ) {
			// If no custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        } else {
            // If custom header image is set
            if ( has_post_thumbnail() ) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                echo '<a class="postmeta-thumbnail thumbnail-header-image" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >',
                the_post_thumbnail('medium-fix-width');
                echo '</a>';
            }
        }
		// edit
		if (is_user_logged_in()) {
			echo '<span class="postmeta-edit">';
			edit_post_link(__('edit', 'wikiwp'));
			echo '</span>';
		}
		// date
		echo '<div class="postmeta-section date"><strong>';
		_e('Published', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_date();
		echo '</div>',
		// author
		'<span class="postmeta-section author"><strong>';
		_e('Author', 'wikiwp');
		echo ':</strong>&nbsp;';
		the_author_posts_link();
		echo '</span>',		
			 '</div>'; // End of .postmeta
        endwhile;
	}
    echo '<div class="aside-menu-button">Info</div>',
         '</div>', // End of .aside-container
         '</aside>'; // End of sidebar
?>
