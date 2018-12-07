<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

class Account {

	/**
	 * Function for creating a new account
	 *
	 * @param $Username string
	 * @param $Password string
	 * @param $Email string
	 * @param $Country value
	 *
	 * @return redirection
	 **/
	public function create($Username, $Password, $Email, $Country) {
		global $dbh;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('INSERT INTO Accounts(Username, Password, Email, Country) VALUES(:Username, :Password, :Email, :Country)');
		if($stmt->execute([
			'Username' => $Username,
			'Password' => hash('sha256', $Password),
			'Email' => $Email,
			'Country' => $Country
		])) {
			header("Location: /");
		} else {
			header("Location :/signup?error=true");
		}
	}


	/**
	 * Function for logging into an account
	 *
	 * @param $Username string
	 * @param $Password string
	 *
	 * @return redirection
	 **/
	public function login($Username, $Password) {
		global $db;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('SELECT ID, Password FROM Accounts WHERE Username="'.$Username.'";');
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		if($data['Password'] == hash('sha256', $Password)) {
			$_SESSION['AccountID'] = $data['ID'];
			header("Location: /");
		} else {
			header("Location: /login?failed=true");
		}
	} 

	public function getAccountInfo($AccountID) {
		global $db;
		$dbh = $db->get_conn();
		$stmt = $dbh->prepare('SELECT Username, Email, Country FROM Accounts WHERE ID="'.$AccountID.'";');
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		return $data;
	}

	public function isLoggedIn() {
		if(@$_SESSION['AccountID']) {
			return true;
		} else {
			return false;
		}
	}
}