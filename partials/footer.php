  <div class="container responsive">
    <div class="row">
      <div class="twitter">
          <?php echo $TweetPHP->get_tweet_list(); ?>
          <div class="social">
            <a href="" target="_blank"><i class="fa fa-lg fa-twitter-square twitter-icon"></i></a>
          </div>
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

  <footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.slides').slick({
          dots: true,
          autoplay: true,
          autoplaySpeed: 7000
        });
      });
    </script>

  </footer>

</body>
</html>
