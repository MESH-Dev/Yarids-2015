<?php include('partials/header.php'); ?>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: 309487880,
        accessToken: '19403516.467ede5.0ccd7aef758b45bdb48f1275ca25bcdf',
        template: '<div class="half"><div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /></a></div><div class="instagram-caption"><p>{{caption}}</p></div></div>',
        resolution: 'standard_resolution'
    });
    feed.run();
</script>

  <div class="container">

    <?php include('partials/sidebar.php'); ?>

    <div class="nine columns">

      <!-- this is where the content goes -->
      <div class="main-content">

        <h1><strong>Callout here!</strong> - Follow our Instagram to see more products!</h1>

        <hr>

        <div id="instafeed"></div>

      </div>

    </div>

  </div>

<?php include('partials/footer.php'); ?>
