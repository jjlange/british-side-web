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

$categories = Category::get_categories();