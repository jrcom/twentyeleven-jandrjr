<?php
/**
 * jandrjr custom functions
 */
 
add_filter('nav_menu_css_class', 'auto_custom_type_class', 10, 2 );

$jrMenuCounter = 0;

function auto_custom_type_class($classes, $item) {

	global $jrMenuCounter;
	
    if ($item->menu_item_parent == 0){
        $classes[] = "menu-item-color-" . strval( $jrMenuCounter % 3 );
        $jrMenuCounter++;
    }
    
    return $classes;
}


?>