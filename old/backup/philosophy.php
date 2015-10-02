<?php $title = "Our Philosophy | Yarid's";
include('partials/header.php'); ?>
<section id="content">
	<div class="container">
		<div class="gutter">
			<div id="contentPrimary" class="philosophy">
				<div class="gutter">
					<div class="abs"><img src="/assets/img/pink_shoes.png" /></div>
					<h1>Here's to you, girl.</h1>
					<div class="twofifth floatleft">
						<div class="gutter">
							<p>Although we have been a respected retailer of fine apparel and accessories for three generations, we know that you are the true pillar of our legacy. We celebrate our shoppers, from the fearless style mavens to sophisticated ladies to everyone in between. We revel in your charm, your grace, your wit, and your keen sense of style. We delight in your passion for life and in your multifaceted beauty, both inside and out.</p>

							<p>Like fine wine or French perfume, we know that quality is the key to indulging your pleasures.</p>
						</div>
					</div>
					<div class="twofifth floatleft">
						<div class="gutter">
							<p>Our chic apparel, to-die-for handbags, and fun, vibrant statement pieces will bring a smile to your face and a spring to your step. Whether you’re on the hunt for perfect pumps or are simply craving cashmere, our selection and friendly staff will create an unforgettable shopping experience. Our free store-to-store shipping means that you get the all of the merchandise you want, every time!</p>

							<p>While we span across the country, our personal service is the benchmark of our business—we’re here to find the perfect products for you!</p>
						</div>
					</div>
				</div>
			</div>
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