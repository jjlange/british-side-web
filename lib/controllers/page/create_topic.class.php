
<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

$page = getPageInfo();

if(Account::isLoggedIn()) {
 	$Account = Account::getAccountInfo($_SESSION['AccountID']);
 }

$category_id = $_GET['id'];
if(!$category_id) { header("Location: /community");}
$category = Category::get_category($category_id);

// Check if submit button was clicked on
if(@$_POST['submit']) {
	$Title = $_POST['Title'];
	$Content = $_POST['Content'];

	if($Title == "") {
		header("Location: /community");
	} else if($Content == "") {
		header("Location: /community");
	}

	// Create new account with given parameters
	Topic::create($_SESSION['AccountID'], $Title, $Content, $category_id);
}