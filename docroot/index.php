<?php include_once "./_includes/global.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php print t('home_pagetitle', 'Enterprise Drupal website development Rochester NY'); ?> | WesJones.net</title>

  <!-- Bootstrap core CSS -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<body class="home">

  <div class="container-fluid">

    <!-- Static navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php print url('/'); ?>">WesJones.net</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php print url('/work'); ?>"><?php print t('nav_work', 'Work'); ?></a></li>
            <li><a href="<?php print url('/contact'); ?>"><?php print t('nav_contact', 'Contact'); ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="content-main">
      <div class="jumbotron">
        <div class="inner">
          <h1>Drupal websites.</h1>
          <p>Wes Jones is a Web developer from <strong>Rochester, NY</strong>, specializing in <strong>Drupal 7 and 8/9</strong>, <strong>Node.js</strong>, and <strong>multilingual website development</strong>. Wes is available on the <a href="https://www.toptal.com/resume/wesley-jones"><strong>Toptal Developer Network</strong></a>.<p>
          <p>Wes speaks Spanish and Mandarin Chinese fluently, and loves <a href="http://music.wesjones.net/"><strong>playing music!</strong></a> 🪕</p>
          <ul>
            <li><a href="/work">View Work history</a></li>
            <li><a href="/files/Resume-WesJones.pdf">Download resume</a></li>
          </ul>
        </div>
      </div>
          </div>

    <div class="content-bottom">
      <?php include_once "./_partials/contact_cta.php"; ?>

      <hr />
      <!-- Footer -->
      <footer>
        <div class="row text-right">
          <div class="col-lg-12">
            <p>&copy; WesJones.net <?php echo date('Y'); ?></p>
          </div>
        </div>
      </footer>
    </div>

  </div> <!-- /container -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>

  <?php if ($_SERVER['HTTP_HOST'] == 'www.wesjones.net'): ?>
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-28900790-1', 'auto');
      ga('send', 'pageview');

    </script>
  <?php endif; ?>
</body>
</html>
