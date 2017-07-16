<?php 

$soal = get_soal();

if (isset($_POST['login'])){
	$jawaban_user = (isset($_POST['user-jwb'])) ? $_POST['user-jwb']:'';
	$jawaban_pass = (isset($_POST['pass-jwb'])) ? $_POST['pass-jwb']:'';
	if ($jawaban_user ==  $soal['user-jwb'] && $jawaban_user == $soal['pass-jwb']){
		$_SESSION['user-login'] = 'm4suk';
		echo 'asd';
	}
}

 ?>
<h1 class="text-center">Welcome to hotspot login</h1>

<div class="content login row">
	
	<form class="text-left" method="post">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="login-item">
				<h3 class="text-center">Form User</h3>
				<div class="form-group">
					<label for="user-soal">Pertanyaan</label>
					<p id="user-soal"><?php echo $soal['user-soal']; ?></p>
				</div>
				<?php if(!empty($soal['user-image']) && $soal['user-image'] == 0) : ?>
					<div class="img-container text-center"><img src="<?php echo home_url().'img/soal/'.$soal['user-image']; ?>" class="img-responsive" >
					</div>
				<?php endif; ?>
				<div class="form-group">
					<label for="user-jwb">Jawaban</label>
					<input type="text" class="form-control" name="user-jwb" id="user-jwb" placeholder="Jawab" required="">
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="login-item">
				<h3 class="text-center">Form Password</h3>
				<div class="form-group">
					<label for="pass-soal">Pertanyaan</label>
					<p id="pass-soal"><?php echo $soal['pass-soal']; ?></p>
				</div>
				<?php if(!empty($soal['pass-image']) && $soal['pass-image'] == 0) : ?>
					<div class="img-container text-center"><img src="<?php echo home_url().'img/soal/'.$soal['pass-image']; ?>" class="img-responsive" >
					</div>
				<?php endif; ?>
				<div class="form-group">
					<label for="pass-jwb">Jawaban</label>
					<input type="pass" class="form-control" name="pass-jwb id="pass-jwb" placeholder="Jawab" required="">
				</div>
			</div>
		</div>
	</div>
	<div class="container-submit ">
		<input class="button-login flat-butt" type="submit" name="login" value="Masuk">
	</div>
	</form>
	

</div>

<?php


// print_r($soal);
?>
	
</div>