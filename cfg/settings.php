<?php
/**
 * This array stores the configuration for the website.
 *
 * Admin link: /admin
 * Default admin password is PasswordNotSafe
 *
 * @since Version 1.3
 */
	
	$config = array(
		'template_dir'			=> 'view/', 					// The folder location of the view files
		'default_filename'		=> 'index',						// Hompage filename without the file extension. (This is only available for servers that don't have index as the homepage)
		'file_extension'		=> '.tpl.php',					// File extension for the template files (Applicable to the files in the template_dir only).
		
		'site_url'				=> 'http://localhost/rvn_cms/',		// Site URL, you must update this configuration to effectively use the site_url() function.
		
		// Reserved page layout value: body (this will change according the the page you are currently in)
		'page_layout'			=> array(						// This is the page / template layout of your template.  In this example the 3 files; header.tpl.php, (body will be the file depending on the page you are in), footer.tpl.php
									'header',
									'body',
									'footer'
								)
	);
?>
