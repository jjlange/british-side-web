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
		$categories = $dbh->query("SELECT CategoryID, CategoryTitle, CategoryDescription FROM Categories ORDER BY OrderList;");
		return $categories;
	}


	/**
	 * Function to get the information of a category
	 * @param $category_id int
	 * @return mixed
	 */
	public function get_category($category_id) {
		global $db;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('SELECT CategoryID, CategoryTitle, CategoryDescription FROM Categories WHERE CategoryID="'.$category_id.'";');
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		return $data;
	}

	/**
	 * Function to get the topics count of a category
	 * @param $category_id int
	 * @return int(count)
	 */
	public function get_categories_topics_count($category_id) {
		global $db;
		$dbh = $db->get_conn();
		$count = $dbh->query('SELECT COUNT(*) FROM Topics WHERE CategoryID='.$category_id.';')->fetchColumn(); 
		return $count;
	}
}