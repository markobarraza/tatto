<?php 

function dl_li_active_menu($classes, $item){

	if( in_array('current-menu-item', $classes) ){

	         $classes[] = 'active';
	}
 	
 	return $classes;
}

add_filter('nav_menu_css_class' , 'dl_li_active_menu' , 10 , 2);