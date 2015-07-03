<?php namespace kowboykoder\PaintCloud\WP\Settings;

$page = new Page('Theme Options');

$settings = array();

// Section One
// ------------------------//
$settings['Section One'] = array('info' => 'Section one information.');

$fields = array();
$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'my_textfield',
	'label' => 'My Text Field'
	);

$fields[] = array(
	'type' 	=> 'color',
	'name' 	=> 'my_colorfield',
	'label' => 'My Color Field'
	);

$fields[] = array(
	'type' 	=> 'textarea',
	'name' 	=> 'my_textarea',
	'label' => 'My Textarea'
	);

$fields[] = array(
	'type' 	=> 'checkbox',
	'name' 	=> 'my_checkbox',
	'label' => 'My Checkbox'
	);

$fields[] = array(
	'type' 	=> 'upload',
	'name' 	=> 'my_upload',
	'label' => 'My Upload'
	);

$settings['Section One']['fields'] = $fields;

// Section Two
// ------------------------//
$settings['Section Two'] = array('info' => 'Section two information.');

$fields = array();

$fields[] = array(
	'type' 	=> 'select',
	'name' 	=> 'my_select',
	'label' => 'My Select',
	'select_options' => array(
		array('value'=>'red', 'label' => 'Red'),
		array('value'=>'blue', 'label' => 'Blue'),
		array('value'=>'green', 'label' => 'Green')
		)			
	);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'my_radio',
	'label' => 'My Radio',
	'radio_options' => array(
		array('value'=>'red', 'label' => 'Red'),
		array('value'=>'blue', 'label' => 'Blue'),
		array('value'=>'green', 'label' => 'Green')
		)			
	);

$my_multi_fields = array();

$my_multi_fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'my_multi_radio',
	'label' => 'My Multi Radio',
	'radio_options' => array(
		array('value'=>'red', 'label' => 'Red'),
		array('value'=>'blue', 'label' => 'Blue'),
		array('value'=>'green', 'label' => 'Green')
		)			
	);

$my_multi_fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'my_multi_text',
	'label' => 'My Multi Text'		
	);

$fields[] = array(
	'type' 	=> 'multi',
	'name' 	=> 'my_multi',
	'label' => 'My Multi Field',
	'id' => 'my_multi', // (optional, will default to name)
	'limit' => 3, // (optional, will default to unlimited)
	'fields' => $my_multi_fields
	);

$fields[] = array(
	'type' 	=> 'editor',
	'name' 	=> 'my_editor',
	'label' => 'My Editor'
	);

$settings['Section Two']['fields'] = $fields;

new OptionPageBuilderSingle($page, $settings);