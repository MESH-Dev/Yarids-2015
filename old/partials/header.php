<?php include('assets/libs/functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" title="style" type="text/css" media="screen" charset="utf-8">
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="/assets/js/jquery.cycle.js"></script>
	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/unslider.min.js"></script>
</head>
<body <?php if($_SERVER['PHP_SELF'] == '/index.php'){echo 'class="home"';}?>>
<?php if($_SERVER['PHP_SELF'] == '/index.php'){ ?>
	<div id="homeWrap">
<?php }?>
<header>
	<div class="container">
		<div class="gutter">
			<div id="logo">
				<a href="/"><img src="/assets/img/logo.jpg" /></a>
			</div>
		</div>
	</div>
</header>
