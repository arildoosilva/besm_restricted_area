<?php
	echo '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">',
		 '<label>',
		 '<span class="screen-reader-text">'._x( 'Search for:', 'label' ).'</span>',
		 '<input type="search" class="search-field" placeholder="'.__( 'Pesquisar', 'wikiwp' ).'" value="'.get_search_query().'" name="s" title="'.__( 'Pesquisar por:', 'wikiwp' ).'" />',
		 '</label>',
		 '<input type="submit" class="search-submit" value="'.__( 'Search', 'wikiwp' ).'" />',
		 '</form>';  // alterado
?>