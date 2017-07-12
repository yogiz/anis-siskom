<?php
session_start();

// ======================= DB Connection ======================================
function dbconnect(){
	// Connection variables 
	$host = "localhost"; // MySQL host name eg. localhost
	$user = "root"; // MySQL user. eg. root ( if your on localserver)
	$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
	$database = "anis-siskom"; // MySQL Database name
	// Connect to MySQL Database 
	$db = mysql_connect($host, $user, $password) or die("Could not connect to database");
	// Select MySQL Database 
	mysql_select_db($database, $db);
}

function get_header(){
	include_once('header.php');
}

function get_footer(){
	include_once('footer.php');
}

function checklogin(){
	$checklogin = (isset($_SESSION['user-login'])) ? $_SESSION['user-login'] : '';
	if ($checklogin == 'user-mlebu'){
		return true;
	} else { return false;}
}

