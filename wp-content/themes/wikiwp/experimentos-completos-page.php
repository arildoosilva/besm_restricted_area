<?php
    /*
    Template Name: Experimentos Completos
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
    global $wpdb;
    $experimentos_ativos = $wpdb->get_results("SELECT * FROM wp_experimentos WHERE status LIKE 'completo_%';");
    foreach($experimentos_ativos as $experimento){
        $atual = $experimento->ano_atual;
        $porcentagem = ($atual * 100) / $experimento->anos_total;
        $status = '';
	$box = 'bluehover';
	if (strpos($experimento->status, 'erro') !== false) {
	    $status = 'orange';
	    $box = 'orangehover';
	} elseif (strpos($experimento->status, 'aborted') !== false) {
            $status = 'red';
	    $box = 'redhover';
        }
        echo '<div class="experiment_box '.$box.'">';
        echo '<div class="col">';
        echo $experimento->nome_experimento;
	if (strpos($experimento->status, 'aborted')) {
	    echo ' - abortado';
	}
        echo '</div>';
        echo '<div class="col">';
        echo '<button onclick="toggleInfo(this.id)" class="experiment_button frontier_button" id="expbutton_'.$experimento->id_experimento.'">+ info</button>';
        echo '</div>';
        
        echo '<div class="experiment_info" id="expinfo_'.$experimento->id_experimento.'">';
	echo $experimento->anos_total.' anos<br/>';
        echo 'Total de erros: '.$experimento->total_erros.' <br/>';
        echo $experimento->readme;
        echo do_shortcode('[foldergallery folder="wp-content/uploads/experimentos/'.$experimento->id_experimento.'" title="'.$experimento->id_experimento.'"]');
        echo '</div>';
        echo '</div>';
    }
?>
</div>
    <!-- end of custom content -->

<script type="text/javascript">
    function toggleInfo(button_id) {
        var info_id = button_id.replace("expbutton", "expinfo");
        var myInfo = document.getElementById(info_id);
        var displaySetting = myInfo.style.display;
        var myButton = document.getElementById(button_id);
        if (displaySetting == 'block') { 
            myInfo.style.display = 'none';
            myButton.innerHTML = '+ info';
        } else { 
            myInfo.style.display = 'block';
            myButton.innerHTML = '- info';
        }
    }
    
    jQuery(document).ready(function($) {
        jQuery('a.colorbox_exp_image').colorbox({
            scalePhotos:"true",
            maxWidth:"100%"
        });
    });
</script>
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
