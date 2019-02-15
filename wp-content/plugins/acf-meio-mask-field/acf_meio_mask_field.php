<?php

class acf_meio_mask_field extends acf_field
{

	// vars
	var $settings, // will hold info such as dir / path
		$defaults; // will hold default field options
		
	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function __construct()
	{
		// vars
		$this->name = 'meio_mask';
		$this->label = __("Meio Mask Field",'meio_mask');
		$this->defaults = array(
			'default_value'	=>	'',
			'maxlength'		=>	'',
			'placeholder'	=>	'',
			'prepend'		=>	'',
			'append'		=>	''
		);
		
		
		// do not delete!
    	parent::__construct();
		
		// settings
		$this->settings = array(
			'path' => apply_filters('acf/helpers/get_path', __FILE__),
			'dir' => apply_filters('acf/helpers/get_dir', __FILE__),
			'version' => '1.0.0'
		);
		
		load_textdomain( 'meio_mask', trailingslashit(dirname(__File__)) . 'lang/' . 'meio_mask' . '-' . get_locale() . '.mo' );
	}
	
	
	
	/*
	*  create_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field - an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function create_field( $field )
	{
		if(!isset($field['data-type'])) $field['data-type']= '';
		if(!isset($field['data-mask'])) $field['data-mask'] = '';

		if(!empty($field['mask'])){
			$field['data-mask'] .= $field['mask'];
		}
		if(!empty($field['mask_type']) && $field['mask_type'] != 'none'){
			$field['data-type'] .= $field['mask_type'];
		}

		// vars
		$o = array( 'id', 'class', 'data-mask', 'data-type', 'name', 'value', 'placeholder' );
		$e = '';
		
		
		// maxlength
		if( $field['maxlength'] !== "" )
		{
			$o[] = 'maxlength';
		}
		
		
		// prepend
		if( $field['prepend'] !== "" )
		{
			$field['class'] .= ' acf-is-prepended';
			$e .= '<div class="acf-input-prepend">' . $field['prepend'] . '</div>';
		}
		
		
		// append
		if( $field['append'] !== "" )
		{
			$field['class'] .= ' acf-is-appended';
			$e .= '<div class="acf-input-append">' . $field['append'] . '</div>';
		}
		
		
		$e .= '<div class="acf-input-wrap">';
		$e .= '<input type="text"';
		
		foreach( $o as $k )
		{
			$e .= ' ' . $k . '="' . esc_attr( $field[ $k ] ) . '"';	
		}
		
		$e .= ' />';
		$e .= '</div>';
		
		
		// return
		echo $e;
	}
	
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add css + javascript to assist your create_field() action.
	*
	*  $info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function input_admin_enqueue_scripts()
	{
		// Note: This function can be removed if not used
		
		wp_enqueue_script( 'jquery.meiomask', $this->settings['dir'] . '/js/jquery.meiomask.js', array( 'jquery', 'acf-input' ), $this->settings['version'] );
		wp_enqueue_script( 'meiomask.apply', $this->settings['dir'] . '/js/meiomask.apply.js', array( 'jquery', 'acf-input' ), $this->settings['version'] );

	}
	
	/*
	*  create_options()
	*
	*  Create extra options for your field. This is rendered when editing a field.
	*  The value of $field['name'] can be used (like bellow) to save extra data to the $field
	*
	*  @param	$field	- an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function create_options( $field )
	{
		// vars
		$key = $field['name'];
		
		?>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Default Value",'meio_mask'); ?></label>
		<p><?php _e("Appears when creating a new post",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'text',
			'name'	=>	'fields[' .$key.'][default_value]',
			'value'	=>	$field['default_value'],
		));
		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Meio Mask",'meio_mask'); ?></label>
		<p><?php _e("Mask appears to field",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'text',
			'name'	=>	'fields[' .$key.'][mask]',
			'value'	=>	$field['mask'],
		));
		_e("Example: 999-999",'meio_mask');
		?>
		<a href='http://www.meiocodigo.com/projects/meiomask/#mm_rules'><?php _e("Documentation Link",'meio_mask') ?></a>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Meio Mask Type",'meio_mask'); ?></label>
		<p><?php _e("Mask Type appears to field",'meio_mask') ?></p>
	</td>
	<td>
		<?php
		do_action('acf/create_field', array(
			'type'		=>	'select',
			'name'		=>	'fields['.$key.'][mask_type]',
			'value'		=>	$field['mask_type'],
			'layout'	=>	'horizontal',
			'choices'	=> array(
				'none'		=>	__("None",'meio_mask'),
				'reverse'	=>	__("Reverse",'meio_mask'),
				'repeat'	=>	__("Repeat",'meio_mask')
			)
		));
		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Placeholder Text",'meio_mask'); ?></label>
		<p><?php _e("Appears within the input",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'text',
			'name'	=>	'fields[' .$key.'][placeholder]',
			'value'	=>	$field['placeholder'],
		));
		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Prepend",'meio_mask'); ?></label>
		<p><?php _e("Appears before the input",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'text',
			'name'	=>	'fields[' .$key.'][prepend]',
			'value'	=>	$field['prepend'],
		));
		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Append",'meio_mask'); ?></label>
		<p><?php _e("Appears after the input",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'text',
			'name'	=>	'fields[' .$key.'][append]',
			'value'	=>	$field['append'],
		));
		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Character Limit",'meio_mask'); ?></label>
		<p><?php _e("Leave blank for no limit",'meio_mask') ?></p>
	</td>
	<td>
		<?php 
		do_action('acf/create_field', array(
			'type'	=>	'number',
			'name'	=>	'fields[' .$key.'][maxlength]',
			'value'	=>	$field['maxlength'],
		));
		?>
	</td>
</tr>
		<?php
		
	}
	
}

new acf_meio_mask_field();

?>