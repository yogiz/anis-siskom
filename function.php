<?php


function get_header(){
	include_once('header.php');
}

function get_footer(){
	include_once('footer.php');
}

function checklogin(){
	if (isset($_SESSION['user-login'])){
		if ($_SESSION['user-login'] == 'm4suk'){
			return true;
		}
		return false;
	} else { return false;}
}

// get random row
function get_randrow(){
	include('db.php');
	$sql = "SELECT * FROM `tabel-soal`";
	$result = $conn->query($sql);
	$sumrow = $result->num_rows;
	$conn->close();
	$randrow = rand(1,$sumrow)-1;
	return $randrow;
}
// get random soal
function get_soal(){
	$rand = get_randrow();
	include('db.php');
	$sql = "SELECT * FROM `tabel-soal` LIMIT $rand,1";
	$result = $conn->query($sql);
	$soal= array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	         $soal["no"] = $row["no"];
	         $soal["user-soal"] = $row["user-soal"];
	         $soal["user-jwb"] = $row["user-jwb"];
	         $soal["user-image"] = $row["user-image"];
	         $soal["pass-soal"] = $row["pass-soal"];
	         $soal["pass-jwb"] = $row["pass-jwb"];
	         $soal["pass-image"] = $row["pass-image"];
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
	return $soal;
}


function home_url(){
	echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
}
