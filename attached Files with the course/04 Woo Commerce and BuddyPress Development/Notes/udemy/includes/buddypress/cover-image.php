<?php

function ju_xprofile_cover_image( $settings = array() ){
	$settings['width']              =   1920;
	$settings['height']             =   225;

	$settings['theme_handle']       =   'bp-parent-css'; // bp-parent-css, bp-child-css
	$settings['callback']           =   'bp_legacy_theme_cover_image';

	return $settings;
}