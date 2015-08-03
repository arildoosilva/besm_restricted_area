<?php
	// experimentos
	global $wpdb;
	$experimentos_ativos = $wpdb->get_var('select count(id_experimento) from wp_experimentos where status = "ativo_ok";');
	$experimentos_com_erro = $wpdb->get_var('select count(id_experimento) from wp_experimentos where status = "ativo_erro" or status = "ativo_aborted";');
	echo '<a href="http://restrito.ccst.inpe.br/experimentos/"><div class="experiment_box box active_exp_box"><strong class="box_text blue_text">'. $experimentos_ativos .' experimentos ativos sem erros</strong><br/>';
	$experimentos_ativos = $wpdb->get_results("SELECT nome_experimento FROM wp_experimentos WHERE status LIKE 'ativo_ok';");
	foreach($experimentos_ativos as $experimento){ echo $experimento->nome_experimento.' '; }
	echo '<i class="fa fa-cogs right ac_exp_icon"></i></div></a>';
	
	echo '<a href="http://restrito.ccst.inpe.br/experimentos/"><div class="experiment_box box error_exp_box"><strong class="box_text orange_text">'. $experimentos_com_erro .' experimentos ativos com erros</strong><br/>';
	$experimentos_com_erro = $wpdb->get_results("SELECT nome_experimento FROM wp_experimentos WHERE status = 'ativo_erro' or status = 'ativo_aborted';");
	foreach($experimentos_com_erro as $experimento){ echo $experimento->nome_experimento.' '; }
	echo '<i class="fa fa-exclamation-circle right error_exp_icon"></i></div></a>';
	// end of experimentos

	// tarefas
	echo '<div class="tarefas-docs">';
	echo '<div class="half tarefas">';
	echo '<h1 class="cat-title new_posts_h1">Tarefas do bimestre</h1>';
	echo do_shortcode('[wp-trello type="cards" id="55b7ca73e2f2da5df492fa36" link="yes"]');
	echo '<small><a href="http://restrito.ccst.inpe.br/tarefas/" class="link_right">Mais informações aqui</a></small>';
	echo '</div>';
	// end of tarefas

	// documentos
	echo '<div class="half docs">';
	echo '<h1 class="cat-title new_posts_h1">Documentações</h1>';

	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget_docs') ) : endif;

	echo '</div>';
	echo '</div>';
	// end of documentos
?>
