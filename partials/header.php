<!DOCTYPE html>

<?php

	$imageArray = [
		"images/Yarids_Blue_01-2.jpg",
		"images/Yarids_Blue_04.jpg",
		"images/Yarids_Blue_05.jpg",
		"images/Yarids_Purple_01-2.jpg",
		"images/Yarids_Purple_04.jpg",
		"images/Yarids_Purple_05.jpg",
		"images/Yarids_Red_01-2.jpg",
		"images/Yarids_Red_04.jpg",
		"images/Yarids_Red_05.jpg",
		"images/Yarids_Yellow_01-2.jpg",
		"images/Yarids_Yellow_04.jpg",
		"images/Yarids_Yellow_05.jpg"
	];

	if(strpos($_SERVER['PHP_SELF'], 'index.php') == false){
		$c = rand(0, count($imageArray) - 1);
		$imageURL = $imageArray[$c];

		?>

<html style="background: url(<?php echo $imageURL; ?>) no-repeat center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;" class="background-fullscreen">

		<?php
	}
	else {

		?>

<html style="-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;" class="background-fullscreen">

		<?php
	}

?>



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

	<style>
		div#preload { display: none; }
	</style>

	<div id="preload">
	   <img src="images/Yarids_Yellow_01-2.jpg" width="1" height="1" />
	   <img src="images/Yarids_Yellow_02-2.jpg" width="1" height="1" />
	   <img src="images/Yarids_Yellow_03-2.jpg" width="1" height="1" />
	   <img src="images/Yarids_Blue_01-2.jpg" width="1" height="1" />
	   <img src="images/Yarids_Blue_02-2.jpg" width="1" height="1" />
	   <img src="images/Yarids_Blue_03-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Purple_01-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Purple_02-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Purple_03-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Red_01-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Red_02-2.jpg" width="1" height="1" />
	<img src="images/Yarids_Red_03-2.jpg" width="1" height="1" />
	</div>

	<script type="text/javascript">

		$( document ).ready(function() {

			if ((window.location.href.indexOf('.php') == -1) || (window.location.href.indexOf('index.php') > -1)) {

				var bgs = ["images/Yarids_Yellow_01-2.jpg",
				"images/Yarids_Yellow_02-2.jpg",
				"images/Yarids_Yellow_03-2.jpg",
				"images/Yarids_Blue_01-2.jpg",
				"images/Yarids_Blue_02-2.jpg",
				"images/Yarids_Blue_03-2.jpg",
				"images/Yarids_Purple_01-2.jpg",
				"images/Yarids_Purple_02-2.jpg",
				"images/Yarids_Purple_03-2.jpg",
				"images/Yarids_Red_01-2.jpg",
				"images/Yarids_Red_02-2.jpg",
				"images/Yarids_Red_03-2.jpg"];

				var html = $('html');

				function changeBackground(curNumber) {

					html.css("background", "url(" + bgs[curNumber] + ") no-repeat center center fixed");
					html.css("background-size", "cover");

					curNumber++;

					if(curNumber == bgs.length) {
						curNumber = 0;
					}

					if (curNumber % 3 == 0) {
						setTimeout(function(){changeBackground(curNumber)}, 2000);
					} else {
						setTimeout(function(){changeBackground(curNumber)}, 750);
					}

				}

				changeBackground(0);
			}

		});



	</script>
</head>

<body>

<header>
	<div class="container">
		<div class="row">
      <div class="three columns">
        <div class="logo fixed">
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
