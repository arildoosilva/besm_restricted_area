<?php
/**
* The template used for displaying page content in page-experimentos.php
*
* @package GeneratePress
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/CreativeWork" itemscope="itemscope">
    <div class="inside-article">
        <?php do_action( 'generate_before_content'); ?>
<!--header class="entry-header">
<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
</header--><!-- .entry-header -->
<?php do_action( 'generate_after_entry_header'); ?>
<div class="entry-content" itemprop="text">

    <!-- start of custom content -->
    <strong>Experimentos ativos</strong><br/>
<?php
    global $wpdb;
    $experimentos_ativos = $wpdb->get_results("SELECT * FROM wp_experimentos WHERE status LIKE 'ativo_%';");
    foreach($experimentos_ativos as $experimento){
        $atual = $experimento->ano_atual;
        $porcentagem = ($atual * 100) / $experimento->anos_total;
        $status = '';
        if ($experimento->status == 'ativo_erro') {
            $status = 'orange';
        } elseif ($experimento->status == 'ativo_aborted') {
            $status = 'red';
        }
        echo '<div class="experiment_box">';
        echo '<div class="col">';
        echo '<a class="tooltips" href="#">'.$experimento->nome_experimento.'<span>'.$experimento->ano_atual.' de '.$experimento->anos_total.' anos</span></a>';
        echo '</div>';
        echo '<div class="col">';
        echo '<button onclick="toggleInfo(this.id)" class="experiment_button" id="expbutton_'.$experimento->id_experimento.'">+ info</button>';
        echo '</div>';
        echo '<div class="meter animate '.$status.'">';
        echo '<span style="width: '.$porcentagem.'%"><span></span></span>';
        echo '</div>';
        echo '<div class="experiment_info" id="expinfo_'.$experimento->id_experimento.'">';
        echo 'Total de erros: '.$experimento->total_erros.' <br/>';
        echo $experimento->readme;
        echo do_shortcode('[foldergallery folder="wp-content/uploads/experimentos/'.$experimento->id_experimento.'" title="'.$experimento->id_experimento.'"]');
        echo '</div>';
        echo '</div>';
    }
?>
    <br/>
    <strong>Experimentos completos</strong><br/>
<?php
    $experimentos_completos = $wpdb->get_results("SELECT * FROM wp_experimentos WHERE status LIKE 'completo_%';");
    foreach($experimentos_completos as $experimento){
        echo '<span class="circle '.$experimento->status.'"></span><button onclick="toggleInfoComplete(this.id)" class="experiment_button_complete" id="expbutton_'. $experimento->id_experimento .'">'.$experimento->nome_experimento.'</button><br/>';
        echo '<div class="experiment_info" id="expinfo_'.$experimento->id_experimento.'">';
        echo do_shortcode('[foldergallery folder="wp-content/uploads/experimentos/'.$experimento->id_experimento.'" title="'.$experimento->id_experimento.'"]');
        echo '</div>';
    }
?>
    <!-- end of custom content -->

    <?php // the_content();  // removido ?>
    <?php
    wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'generate' ),
        'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->
    <?php do_action( 'generate_after_content'); ?>
    <?php edit_post_link( __( 'Edit', 'generate' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</div><!-- .inside-article -->
</article><!-- #post-## -->
