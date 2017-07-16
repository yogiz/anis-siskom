<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/bootstrap-theme.css" >
<link rel="stylesheet" href="css/style.css" >
<script src="js/jquery.js" ></script>
<script src="js/bootstrap.js" ></script>
<script src="js/js.js" ></script>
	<title></title>
</head>
<body>
<div id="main" class="container">
<div class="row">
    <div class="col-md-12">
        <header id="header">

  <div class="slider">
	  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  <?php 
		  	for ($i=1; $i <= 6 ; $i++) { 
		  		$active = ($i == 1 )?'active' : '';
			    echo '<div class="item '.$active.'">';
			    echo '<img src="img/slide-'.$i.'.jpg">';
			    echo '</div>';	
		  	}
		   ?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="fa fa-angle-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="fa fa-angle-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
</div><!--slider-->
	<nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png"></a>
          <span class="site-name"><b>Sistem</b> Komputer</span>
          <span class="site-description">Hotspot login basecamp SK Asia</span>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNav" >
          <ul class="nav main-menu navbar-nav">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
	</nav>


</header>
</div>
</div>

<div id="page" class="">