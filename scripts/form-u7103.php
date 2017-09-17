<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.1.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'webhost Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'email@email.com',
		'to' => 'email@email.com'
	),
	'fields' => array(
		'custom_U7128' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U7122' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7109' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U7133' => array(
			'order' => 5,
			'type' => 'checkbox',
			'label' => 'WEBSITE DESIGN',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7113' => array(
			'order' => 6,
			'type' => 'checkboxgroup',
			'label' => 'Checkbox Group',
			'required' => true,
			'optionItems' => array(
				'WEBSITE HOSTING',
				'LOGO AND BRAND BUILDING'
			),
			'errors' => array(
				'required' => 'Field \'Checkbox Group\' is required.',
				'format' => 'Field \'Checkbox Group\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
