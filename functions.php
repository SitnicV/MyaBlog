<?php 
include ("include/theme-support.php");
include ("include/connect-scripts.php");
include ("include/content-filters.php");
include ("include/pagination.php");
function prevent_default_theme_deletion($allcaps, $caps, $args) {
    $posts_id = array(1106,1112,1108,1110);
    if ( isset( $args[0] ) && isset( $args[2] ) && in_array($args[2],$posts_id)  && $args[0] == 'delete_post' ) {
        $allcaps[ $caps[0] ] = false;
    }
    return $allcaps;
}
add_filter ('user_has_cap', 'prevent_default_theme_deletion', 10, 3);

//======================================================================
// Add post state to the projects page
//======================================================================

add_filter( 'display_post_states', 'mya_add_post_state', 10, 2 );

function mya_add_post_state( $post_states, $post ) {
    $post_meta      =   get_post_meta($post->ID);
    $post_template  =   $post_meta['_wp_page_template'][0];
    
	if( $post_template == 'template-caracter.php' ) {
		$post_states[] = 'Articole despre psihologie <small style="color:#ccc">'.$post_template.'</small>';
	}

    if( $post_template == 'template-recete.php' ) {
		$post_states[] = 'Articole despre mancare <small style="color:#ccc">'.$post_template.'</small>';
	}

    if( $post_template == 'template-frumusete.php' ) {
		$post_states[] = 'Articole despre frumusete <small style="color:#ccc">'.$post_template.'</small>';
	}

    if( $post_template == 'template-parenting.php' ) {
		$post_states[] = 'Articole despre Parenting <small style="color:#ccc">'.$post_template.'</small>';
	}

	return $post_states;
}


if ( ! function_exists( 'mya_nav_menus' ) ) {
 
    function mya_nav_menus(){
        register_nav_menus( array(
            'top_menu' => __( 'Top Menu', 'myasun' ),
            'sub_menu'  => __( 'Sub Menu', 'myasun' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mya_nav_menus', 0 );
}

require_once('wp_bootstrap_navwalker.php');