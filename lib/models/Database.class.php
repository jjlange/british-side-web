<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

/**
 * @method Database
 * @see http://php.net/manual/en/book.pdo.php
 * @todo some more functions like query, row, close, etc
 *
 * @return $pdo var (conn)
 **/
class Database {

	private $pdo;

    /**
     * @param host, db, user, pass	
     **/
	public function __construct($host, $db, $user, $pass) {
		// Save all database variable
		$this->host = $host;
		$this->db = $db;
		$this->user = $user;
		$this->pass = $pass;
	}
	/** 
	 * @package Database	
	 **/
	public function connect() {
		try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8";
            $opt = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->pdo = new \PDO($dsn, $this->user, $this->pass, $opt);
        } catch(PDOException $e) {
            print "<strong>Database error:</strong>&nbsp; " . $e->getMessage() . "<br/>";
            die();
        }
	}

	/**
	 * @package Database
	 * @return $pdo var (conn)
	 **/
	public function get_conn() {
		return $this->pdo;
	}
} 

