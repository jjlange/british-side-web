<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

class Topic {
	public function get_topics($category_id) {
		global $db;
		$dbh = $db->get_conn();
		$topics = $dbh->query("SELECT TopicID, CreatorID, TopicTitle, TopicContent, CategoryID FROM Topics WHERE CategoryID='".$category_id."' ORDER BY TopicID DESC;");
		return $topics;
	}

	public function create($CreatorID, $Title, $Content, $CategoryID) {
		global $db;
		$dbh = $db->get_conn();
		$nc = Reply::mynl2br(strip_tags($Content));
		$stmt = $dbh->prepare('INSERT INTO Topics(CreatorID, TopicTitle, TopicContent, CategoryID) VALUES(:CreatorID, :Title, :Content, :CategoryID)');
		if($stmt->execute([
			'CreatorID' => $CreatorID,
			'Title' => $Title,
			'Content' => $nc,
			'CategoryID' => $CategoryID
		])) {
			header("Location: /topics?id=".$category_id);
		} else {
			header("Location: /community");
		}
	}

	/**
	 * Function to get the creator of a topic
	 * @param $creator_id int
	 * @return mixed
	 */
	public function get_topic_creator($creator_id) {
		global $db;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('SELECT Username FROM Accounts WHERE ID="'.$creator_id.'" LIMIT 1;');
		$stmt->execute();
		$data = $stmt->fetch();
		return $data['Username'];
	}

	/**
	 * Function to get the information of a topic
	 * @param $topic_id int
	 * @return mixed
	 */
	public function get_topic($topic_id) {
		global $db;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('SELECT TopicID, TopicTitle, TopicContent, CreatorID FROM Topics WHERE TopicID="'.$topic_id.'";');
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		return $data;
	}
}