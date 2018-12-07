<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

session_start();

function page_exists($x) {
    // Check if class file exists in our page controllers folder
    if(!file_exists('lib/views/'.$x.'.php')) {
        include('views/not_found.php');
    } else {
    	require('controllers/page/'.$x.'.class.php');
    	include('views/'.$x.'.php');
    }
}

function load_controller($class_name) {
    require('controllers/'.$class_name.'.class.php');
}

function load_model($model_name) {
    require('models/'.$model_name.'.class.php');
}

/* Load our controllers as well as our models */
load_controller('ViewController');
load_model('Database');
load_model('Settings');
load_model('Account');
load_model('Category');

/**
 *
 ***********************
 * Database Connection *
 ***********************
 *
 * DO NOT use localhost as your default host, since
 * localhost uses an UNIX socket which is NOT supported by apache, 
 * 127.0.0.1 on the other hand uses TCP.
 *
 **/
$db = new Database('127.0.0.1', 'british-side', 'root', '');
$db->connect();