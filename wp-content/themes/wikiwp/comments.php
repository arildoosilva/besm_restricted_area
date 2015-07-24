<?php
	// DISPLAY COMMENTS IF COMMENTS ARE OPENED
	if ( comments_open() ) {
		echo '<div class="comments">',
			 '<h2>';
		_e('Comentários', 'wikiwp');  // alterado
		echo '</h2>';
		if ( have_comments() ) {
			// this is displayed if there are comments
			echo '<h3>';
			_e('Este post tem', 'wikiwp');
			echo '&nbsp;';
			comments_number( __('0 comentários','wikiwp'), __('um comentário', 'wikiwp'), __('% comentários','wikiwp') );
			echo '</h3>',
				 '<ul class="commentlist">';
			wp_list_comments();
			echo '</ul>',
				 '<div class="comment-nav">',
				 '<div class="alignleft">';
			previous_comments_link();
			echo '</div>',
				 '<div class="alignright">';
			next_comments_link();
			echo '</div>',
				 '</div>';
		} else { 
			// this is displayed if there are no comments so far	
			_e('Nenhum comentário!', 'wikiwp');
		}
		// load comment form
		comment_form(); 
		echo '</div>'; // end of .content
	}
?>