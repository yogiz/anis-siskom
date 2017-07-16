

<h1 class="text-center">Welcome to Sistem Komputer hotspot</h1>

<div class="content logged row">
	<h3 class="text-center">Selamat Kamu sudah login!</h3>
</div>

<form method="post">
	<div class="container-submit ">
		<input class="button-login flat-butt" type="submit" name="logout" value="Keluar">
	</div>
</form>

<?php 
if (isset($_POST['logout'])){
	session_destroy();
	header('url:'.home_url());
	}
 ?>
