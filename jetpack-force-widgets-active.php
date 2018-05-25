<?php
/*
Plugin Name: Jetpack Force Widgets Active
Description: Forces the jetpack widgets module to be active. Useful for development mode.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function allendav_force_widgets_active( $active_modules ) {
        $active_modules[] = 'widgets';
        return $active_modules;
}
add_filter( 'jetpack_active_modules', 'allendav_force_widgets_active' );

