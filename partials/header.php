<!DOCTYPE html>

<?php

if($_SERVER['PHP_SELF'] == '/story.php'){
	$imageURL = 'images/s1.jpg';
}
elseif($_SERVER['PHP_SELF'] == '/philosophy.php') {
	$imageURL = 'images/s2.jpg';
}
elseif($_SERVER['PHP_SELF'] == '/designers.php') {
	$imageURL = 'images/s3.jpg';
}
elseif($_SERVER['PHP_SELF'] == '/wishlist.php') {
	$imageURL = 'images/s1.jpg';
}
elseif($_SERVER['PHP_SELF'] == '/stores.php') {
	$imageURL = 'images/s2.jpg';
}
else {
	$imageURL = 'images/s3.jpg';
}

?>

<html style="background: url(<?php echo $imageURL; ?>) no-repeat center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;" class="background-fullscreen">

<head>
	<meta charset="utf-8">
	<title>Yarid's</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" title="style" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

	<script type="text/javascript" src="js/instafeed.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/yarids.js"></script>
</head>

<body>

<header>
	<div class="container">
		<div class="row">
      <div class="three columns">
        <div class="logo">
  				<a href="/"><img src="images/logo.png" /></a>
					<div class="responsive-menu">
						<i class="fa fa-close fa-2x"></i>
						<div class="navigation">
			        <ul>
			          <li><a href="story.php" <?php if($_SERVER['PHP_SELF'] == '/story.php'){echo 'class="active"';}?>>Our Story</a></li>
			          <li><a href="philosophy.php" <?php if($_SERVER['PHP_SELF'] == '/philosophy.php'){echo 'class="active"';}?>>Our Philosophy</a></li>
			          <li><a href="designers.php" <?php if($_SERVER['PHP_SELF'] == '/designers.php'){echo 'class="active"';}?>>Designers</a></li>
			          <li><a href="wishlist.php" <?php if($_SERVER['PHP_SELF'] == '/wishlist.php'){echo 'class="active"';}?>>Wishlist</a></li>
			          <li><a href="stores.php" <?php if($_SERVER['PHP_SELF'] == '/stores.php'){echo 'class="active"';}?>>Our Stores</a></li>
			        </ul>
			      </div>
					</div>
  			</div>
      </div>
		</div>
	</div>
</header>
