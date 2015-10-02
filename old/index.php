<?php $title = "Yarid's";
include('partials/header.php'); ?>
<section id="slideCache" class="hidden">
	<!-- <img src="/assets/img/bg/yaridsBG1.jpg" />
	<img src="/assets/img/bg/yaridsBG2.jpg" />
	<img src="/assets/img/bg/yaridsBG3.jpg" />
	<img src="/assets/img/bg/yaridsBG4.jpg" />
	<img src="/assets/img/bg/yaridsBG5.jpg" />
	<img src="/assets/img/bg/yaridsBG6.jpg" />
	<img src="/assets/img/bg/yaridsBG7.jpg" />
	<img src="/assets/img/bg/yaridsBG8.jpg" />
	<img src="/assets/img/bg/yaridsBG9.jpg" />
	<img src="/assets/img/bg/yaridsBG10.jpg" /> -->
	<img src="/assets/img/bg/yarids_ss15.jpg" />
	<!-- <img src="/assets/img/bg/yarids_fw14_02.jpg" />
	<img src="/assets/img/bg/yarids_fw14_03.jpg" /> -->
</section>
<section id="content">
	<div class="container">
		<div class="gutter">
			<!--<div id="contentPrimary">
				<div class="gutter">
					contentprimary
				</div>
			</div>!-->
			<nav id="contentSecondary">
				<div class="gutter">
					<?php include('partials/nav.php'); ?>
					<div id="social">
						<a href="https://www.facebook.com/pages/Yarids-Charleston/64910405871" class="facebook"></a>
						<a href="http://instagram.com/yaridsshoes/" class="instagram"></a>
					</div>
				</div>
				<div id="twitter">
					<div class="gutter">
						<?php display_user_tweets('yaridsshoes',1); ?>
						<a href="https://twitter.com/yaridsshoes" class="twitter"></a>
					</div>
				</div>
			</nav>
		</div>
	</div>
</section>

<?php include('partials/footer.php'); ?>
