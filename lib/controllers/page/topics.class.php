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

$topics = Topic::get_topics($category_id);
$category = Category::get_category($category_id);