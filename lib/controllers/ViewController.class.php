<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

class ViewController {
	/**
	 * @package ViewController
	 * @param $x template_name 
	 **/
	public static function render($x) {
		require_once 'page/'.$x.'.class.php';
		require_once 'lib/views/'.$x.'.php';
	}
}