<?php include_once "./../_includes/global.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php print t('contact_pagetitle', 'Contact | Drupal Consulting &amp; Web Development'); ?> | Wesjones.net</title>

  <!-- Bootstrap core CSS -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="contact">

  <div class="container">

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
          <a class="navbar-brand" href="/">WesJones.net</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><?php print t('nav_home', 'Home'); ?></a></li>
            <li><a href="/about"><?php print t('nav_about', 'About'); ?></a></li>
            <li><a href="/work"><?php print t('nav_work', 'Work'); ?></a></li>
            <li class="active"><a href="/contact"><?php print t('nav_contact', 'Contact'); ?> <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="main-content">

      <div class="container">
        <h1><?php print t('contact_h1', 'Contact'); ?></h1>

        <?php print t('contact_body1', "
          <h3>If you'd like to contact me about custom development, a Website project, or translation services, email me at <a href=\"mailto:wes@wesjones.net\">wes@wesjones.net</a>.</h3>

          <h3>Or reach out to me on one of the following networks:<br /><br /></h3>
        "); ?>

        <?php include_once "../_partials/links_row.php"; ?>

        <?php print t('contact_body2', '<h3>I look forward to hearing from you!</h3>'); ?>

        <p>&nbsp;</p>
      </div>

    <hr />

    <?php include_once "../_partials/hero_panel.php"; ?>

    <hr />
    <!-- Footer -->
    <footer>
      <div class="row text-right">
        <div class="col-lg-12">
          <p>&copy; WesJones.net <?php echo date('Y'); ?></p>
        </div>
      </div>
    </footer>

  </div> <!-- /container -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
