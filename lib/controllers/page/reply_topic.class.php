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

$topic_id = $_GET['id'];
if(!$topic_id) { header("Location: /community");}
$topic = Topic::get_topic($topic_id);

// Check if submit button was clicked on
if(@$_POST['submit']) {
	$Content = $_POST['Content'];

	if($Content == "") {
		header("Location: /community");
	}

	// Create new account with given parameters
	Reply::create($_SESSION['AccountID'], $Content, $topic_id);
}