<?php 
include_once('function.php');
get_header();
if (checklogin()) {
	include_once('template/udah-masuk.php');
} else {
	include_once('template/user-login.php');
}
get_footer(); ?>
