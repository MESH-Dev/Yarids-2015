<?php

require_once('TweetPHP.php');

$TweetPHP = new TweetPHP(array(
  'consumer_key'              => 'OxnejoaBCINsBH7hfMQebSrgd',
  'consumer_secret'           => 'ft7Ye5bEk0tgApTjClgXknGQuCoBGpG53uHiXAshwpE7gXV6Wg',
  'access_token'              => '205836469-XGKjw52IJuaWIZe5efe6udElJuS3eYV7J5irERqZ',
  'access_token_secret'       => 'bbgOfzZbueyoQ13ETxKO0hJBWYTSOLx0tz4loHa0XmZHj',
  'twitter_screen_name'       => 'yaridsshoes',
  'enable_cache'              => false,
  'tweets_to_retrieve'        => 1
));

?>

<div class="three columns">
  <div class="row">
    <div class="sidebar">
      <div class="navigation">
        <ul>
          <li><a href="story.php">Our Story</a></li>
          <li><a href="philosophy.php">Our Philosophy</a></li>
          <li><a href="designers.php">Designers</a></li>
          <li><a href="wishlist.php">Wishlist</a></li>
          <li><a href="stores.php">Our Stores</a></li>
        </ul>
      </div>
      <div class="social">
        <a href="" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
        <a href="" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="twitter">
        <?php echo $TweetPHP->get_tweet_list(); ?>
    </div>
  </div>
  <div class="row">
    <div class="cards">
      <p><a href="mailto:info@yarids.com">info.yarids@gmail.com</a></p>
      <p>
        <img src="images/icons/visa-straight-32px.png">
        <img src="images/icons/mastercard-straight-32px.png">
        <img src="images/icons/discover-straight-32px.png">
        <img src="images/icons/american-express-straight-32px.png">
      </p>
    </div>
  </div>
</div>
