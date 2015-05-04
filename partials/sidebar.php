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
          <li><a href="">Meet the Girls</a></li>
          <li><a href="">Designers</a></li>
          <li><a href="">Wishlist</a></li>
          <li><a href="">Our Philosophy</a></li>
          <li><a href="">Our Shops</a></li>
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
</div>
