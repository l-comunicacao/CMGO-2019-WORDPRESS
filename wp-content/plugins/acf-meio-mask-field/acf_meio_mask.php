<?php
/*
Plugin Name: ACF Meio Mask Field
Plugin URI: http://casepress.org/support
Description: ACF Meio Mask Field.
Author: Rasko (Kochnev Dmitry)
Version: 1.0.0
Author URI: http://casepress.org/support
*/
add_action('acf/register_fields', 'acf_meio_mask_field');

function acf_meio_mask_field()
{
	include_once('acf_meio_mask_field.php');
}

?>