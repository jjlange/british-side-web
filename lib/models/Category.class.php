<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

class Category {
	public function get_categories() {
		global $db;
		$dbh = $db->get_conn();
		$categories = $dbh->query("SELECT CategoryID, CategoryTitle, CategoryDescription FROM Categories");
		return $categories;
	}
}