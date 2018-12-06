<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

// Include our init file, for including all-other required files
include 'lib/init.php';


/**
 * Render our index page (located in our views directory) and include the right 
 * controller file
 **/
$pr = @$_GET['page']; // Get 'page'- get parameter from URL (e.g /?page=x)
$vc = new ViewController(); // Initalizing our ViewController class file

if(!$pr){ $vc->render('index'); } // Render our index page, if no get parameter is given
else { 
	page_exists($pr); // Check if page exists
	$vc->render($pr); // Render our page (view file, controller file)
} 
