<?php include_once "./../_includes/global.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php print t('about_pagetitle', 'About | Drupal Developer Rochester NY'); ?> | WesJones.net</title>

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

<body class="about">

<?php include_once "./../_partials/lang_toggle.php"; ?>

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
          <a class="navbar-brand" href="<?php print url('/'); ?>">WesJones.net</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php print url('/'); ?>"><?php print t('nav_home', 'Home'); ?></a></li>
            <li class="active"><a href="<?php print url('/about'); ?>"><?php print t('nav_about', 'About'); ?> <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php print url('/work'); ?>"><?php print t('nav_work', 'Work'); ?></a></li>
            <li><a href="<?php print url('/contact'); ?>"><?php print t('nav_contact', 'Contact'); ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="jumbotron container">
      <!-- Main -->
      <div class="col-xs-9 col-sm-8 col-md-7">
        <h1><?php print t('about_h1', 'About'); ?></h1>
        <h2><?php print t('about_h2', 'Wes Jones is a Web developer and Drupal consultant from Rochester,&nbsp;NY.'); ?></h2>
        <p><?php print t('about_p', 'Wes loves what he does, motivated by a passion for technology, mathematics, and problem solving.'); ?></p>
      </div>
    </div>

    <div class="main-content">

      <p><a class="btn btn-primary" href="/files/Resume-WesJones.pdf"><?php print t('resume_link', "View Wes' full resume"); ?> &raquo;</a></p>

      <?php print t('about_body', "
        <h2>Drupal Consulting</h2>

        <p>Wes completed his first project with Drupal for Strong National Museum of Play in 2009&mdash;A Drupal 6 implementation with 6 interlocking websites, part of an 18-month rebranding and website redesign project. Since then, he's deployed dozens of sites in Drupal 6, 7, and 8. He's used his extensive knowledge of the Drupal API to develop custom modules and themes.</p>

        <p>Wes is an <a href=\"https://certification.acquia.com/registry?fname=Wesley&lname=Jones&city=Rochester&state=&country=&org=&exam=All\" target=\"_blank\">Acquia Certified Developer</a>. View his <a href=\"https://www.drupal.org/u/earthday47\" target=\"_blank\">Drupal.org profile page</a>.</p>

        <h2>Website Development</h2>

        <p>Wes specializes in custom website and Web application development on the LAMP stack&mdash;Linux, Apache, MySQL, and PHP&mdash;using PHP, HTML, CSS, and Javascript (jQuery).</p>

        <p>While Wes has the most experience working with Drupal, he has built websites using custom PHP, Wordpress, and MVC frameworks like Yii.</p>

        <h2>他也会讲中文!</h2>

        <p>Wes loves learning languages. He's fluent in Mandarin Chinese and Spanish and has studied Cantonese, Korean, Japanese, and American Sign Language (ASL).</p>

        <p>Wes lived in China from 2012-14 and traveled extensively throughout Asia. While at home, he enjoys playing music and watching sports, especially European football (soccer).</p>
      "); ?>

    </div>

    <hr />

    <?php include_once "../_partials/hero_panel.php"; ?>
    <?php include_once "../_partials/links_row.php"; ?>
    <?php include_once "../_partials/contact_cta.php"; ?>

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
