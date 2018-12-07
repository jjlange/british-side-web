<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

class Reply {
	public function get_replies($topic_id) {
		global $db;
		$dbh = $db->get_conn();
		$replies = $dbh->query("SELECT ReplyID, CreatorID, ReplyContent FROM Replies WHERE TopicID='".$topic_id."' ORDER BY TopicID DESC;");
		return $replies;
	}

	public function mynl2br($text) { 
   		return strtr($text, array("\r\n" => '<br />', "\r" => '<br />', "\n" => '<br />')); 
	} 

	public function create($CreatorID, $Content, $TopicID) {
		global $db;
		$dbh = $db->get_conn();
		$nc = Reply::mynl2br(strip_tags($Content));
		$stmt = $dbh->prepare('INSERT INTO Replies(CreatorID, ReplyContent, TopicID) VALUES(:CreatorID, :Content, :TopicID)');
		if($stmt->execute([
			'CreatorID' => $CreatorID,
			'Content' => $nc,
			'TopicID' => $TopicID
		])) {
			header("Location: /topic?id=".$TopicID);
		} else {
			header("Location: /community");
		}
	}
}