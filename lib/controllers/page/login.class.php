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
	header("Location: /");
}

// Check if submit button was clicked on
if(@$_POST['submit']) {
	// Username field
	$Username = $_POST['Username'];

	// Password field
	$Password = $_POST['Password'];

	// Create new account with given parameters
	Account::login($Username, $Password);
}