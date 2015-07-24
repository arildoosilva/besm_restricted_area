<?php 

// list of users post based on current theme settings
	
$concat= get_option("permalink_structure")?"?":"&";    
//set the permalink for the page itself
$frontier_permalink = get_permalink();

$tmp_status_list = get_post_statuses( );

$tmp_info_separator = " | ";

//Display before text from shortcode
if ( strlen($frontier_list_text_before) > 1 )
	echo '<div id="frontier_list_text_before">'.$frontier_list_text_before.'</div>';

// Dummy translation of ago for human readable time
$crap = __("atrás", "frontier-post");  // alterado


//Display message
frontier_post_output_msg();


if (frontier_can_add() && !fp_get_option_bool("fps_hide_add_on_list"))
	{
	if (strlen(trim($frontier_add_link_text))>0)
		$tmp_add_text = $frontier_add_link_text;
	else
		$tmp_add_text = __("+ Adicionar ", "frontier-post")." ".fp_get_posttype_label_singular($frontier_add_post_type);
		
	?>
	<fieldset class="frontier-new-menu">
		<a id="frontier-post-add-new-link" class="frontier_add_link" href='<?php echo frontier_post_add_link($tmp_p_id) ?>'><?php echo $tmp_add_text; ?></a>
	</fieldset>



	<?php
	
	} // if can_add

if( $user_posts->found_posts > 0 )
	{
	echo '<div id="frontier-post-list_form">';
	while ($user_posts->have_posts()) 
		{
		$user_posts->the_post();
		
		
		
		?>
			<fieldset class="frontier-new-list experiment_box">
			
			<div class="frontier-new-list">
				
				
				<?php
				// show status if pending or draft
				// if ($post->post_status == "pending" || $post->post_status == "draft")
					// echo '<tr><td class="frontier-new-list" id="frontier-post-new-list-status" colspan=2>'.__("Status", "frontier-post").': '.$post->post_status.'</td></tr>';
				?>
				
				
				
				<div class="frontier-new-list" id="frontier-post-new-list-title">
					<?php the_post_thumbnail( array(50,50), array('class' => 'frontier-post-list-thumbnail') ); ?>
					<a id="frontier-post-new-list-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				
				<?php
				if ($frontier_list_form == "full_post")
					{
					$tmp_content = apply_filters( 'the_content', $post->post_content );
					$tmp_content = str_replace( ']]>', ']]&gt;', $tmp_content );
					echo '<div class="frontier-new-list" id="frontier-post-new-list-excerpt">';
					echo $tmp_content;
					echo '</div>';
					}
				if ($frontier_list_form == "excerpt")
					{
					$tmp_content = $post->post_excerpt;
					if (strlen(trim($tmp_content)) == 0)
						$tmp_content = wp_trim_words($post->post_content);
					echo '<div class="frontier-new-list" id="frontier-post-new-list-excerpt">';
					echo $tmp_content;
					echo '</div>';
					}
				?>
				
				<div class="frontier-new-list" id="frontier-post-new-list-info">
					
					<?php
					echo frontier_post_edit_link($post, $fp_show_icons, $frontier_permalink);
					echo frontier_post_delete_link($post, $fp_show_icons, $frontier_permalink);
					echo frontier_post_preview_link($post, $fp_show_icons, $frontier_permalink);
					
					
					
					echo __("Status", "frontier-post").': '.( isset($tmp_status_list[$post->post_status]) ? $tmp_status_list[$post->post_status] : $post->post_status );
					echo $tmp_info_separator;
					echo __("Autor", "frontier-post").': ';
					the_author();
					echo $tmp_info_separator; 
					printf( _x( '%s atrás', '%s = human-readable time difference', 'frontier-post' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); 
					echo $tmp_info_separator; 
					echo frontier_get_icon('comments2').'&nbsp;'.intval($post->comment_count);
					echo $tmp_info_separator; 
					echo __("Categorias", "frontier-post").': ';
					the_category(' '); 
					echo $tmp_info_separator; 
					echo __("Tags", "frontier-post").': ';
					the_tags(' '); 
					/*
					echo '<br>';
					echo fp_get_tax_values($post->ID); 
					*/
					?>
					
					
				</div>
			</div>	
			</fieldset>
		
		
		<?php
		//echo '<hr>';
		
		} // end while have posts 
	
	
	
	
	$pagination = paginate_links( 
			array(
				'base' => add_query_arg( 'pagenum', '%#%'),
				'format' => '',
				'prev_text' => __( '&laquo;', 'frontier-post' ),
				'next_text' => __( '&raquo;', 'frontier-post' ),
				'total' => $user_posts->max_num_pages,
				'current' => $pagenum,
				'add_args' => false  //due to wp 4.1 bug (trac ticket 30831)
				) 
			);

	if ( $pagination ) 
		{
			echo $pagination;
		}
	if ( $frontier_list_all_posts != "true" )
		// echo "</br>".__("Number of posts already created by you: ", "frontier-post").$user_posts->found_posts."</br>";  // alterado
	
	echo '</div>';
	} // end if have posts
else
	{
		echo "</br>";
		_e('Você ainda não postou nada.', 'frontier-post');
		echo "<br></br>";
	} // end post count
	
//Re-instate $post for the page
wp_reset_postdata();

?>
