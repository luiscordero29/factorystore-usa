<?php
/*
    MENUS
*/
function register_menus()
{
    register_nav_menus(
        array(
            # categories
            'categories-baterias-de-cocina' => __( 'CAT: Baterias de cocina' ),
            'categories-organizadores' => __( 'CAT: Organizadores' ),
            'categories-platos-desechables' => __( 'CAT: Platos' ),
            # menus
            'menu-begin' => __( 'Inicio del Menu' ),
            'menu-middle' => __( 'Centro del Menu' ),
            'menu-end' => __( 'Final del Menu' ),
            'rrss' => __( 'Redes Sociales' ),
        )
    );
}
add_action( 'init', 'register_menus' );

# menu
if (!function_exists('get_mainmenu')) {
    function get_mainmenu($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '';
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $class = '';
                foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                }
                $menu_list .= '<li>';
                $menu_list .= '<a target="' . $menu_item->target . '" href="'. $menu_item->url .'">';
                $menu_list .= $menu_item->title;
                $menu_list .= '</a>';
                $menu_list .= '</li>';
            }
            $menu_list .= '';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}

# submenu
if (!function_exists('get_submenu')) {
    function get_submenu($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '<ul>';
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $class = '';
                foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                }
                $menu_list .= '<li>';
                $menu_list .= '<a target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                $menu_list .= $menu_item->title;
                $menu_list .= '</a>';
                $menu_list .= '</li>';
            }
            $menu_list .= '</ul>';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}

# menu rrss
if (!function_exists('get_menu_rrss')) {
    function get_menu_rrss($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '';
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $class = '';
                foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                }
                $menu_list .= '<a target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                $menu_list .= '<i class="'.$class.'"></i>';
                $menu_list .= '</a>';
            }
            $menu_list .= '';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}
