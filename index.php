<?php
/**
 * Simple RVN CMS
 * 
 * This is a very simple website template engine with limited helpers and a crude Content Management System (CMS).
 * Our aim is to create a CMS that does not use any database, to be useful 
 * for simple CMS sites but has no sql storage in their hosting package.
 * 
 * - the site does not use a database, it all stored in an encrypted flat file.
 * 
 * @author Earl Evan Amante <earlamante@w3bkit.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2015 RaeveN
 *
 * @version 1.3
 */
	 
	 /**
	  * This will include then load the main class of the template engine.
	  */
	require_once('lib/rvn.class.php');
	
	/**
	 * This function will prepare and print the output of the template on screen.
	 */
	$rvn->run();
?>