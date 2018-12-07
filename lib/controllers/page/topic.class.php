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
$replies = Reply::get_replies($topic_id);