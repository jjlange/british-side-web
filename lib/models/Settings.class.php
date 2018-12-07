<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

/**
 * Function to get all rows of the table 'Settings'
 * @return mixed
 */
function getPageInfo() {
	global $db;
	$dbh = $db->get_conn();
	$stmt = $dbh->prepare('SELECT PageTitle, PageDescription, PageStatus, PageTheme, PageDomain FROM Settings');
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	return $data;
}