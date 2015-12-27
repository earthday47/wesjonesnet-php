<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact | Drupal Consulting &amp; Web Development | Wesjones.net</title>

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
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/work">Work</a></li>
            <li class="active"><a href="/contact">Contact <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="main-content">

      <div class="container">
        <h1>Contact</h1>

        <h3>If you'd like to contact me about custom development, a Website project, or just to say hi, email me at <a href="mailto:wes@wesjones.net">wes@wesjones.net</a>.</h3>

        <p>&nbsp;</p>
      </div>

    <hr />

    <div class="row hero-panel">

      <div class="col-md-4 clearfix hero-feature">
        <div class="col-xs-3 col-md-12 img-container">
          <img src="/img/colosseum-icon.png" alt="Drupal icon">
        </div>
        <div class="col-xs-9 col-md-12 content-container">
          <h3 class="">Museum Specialist</h3>
          <p>Wes has over 5 years of experience working closely with museums on website redesigns and IMLS grant-funded projects.</p>
        </div>
      </div>

      <div class="col-md-4 clearfix hero-feature">
        <div class="col-xs-3 col-md-12 img-container">
          <img src="/img/druplicon-small.png" alt="Drupal icon">
        </div>
        <div class="col-xs-9 col-md-12 content-container">
          <h3 class="">Drupal Consulting</h3>
          <p>Wes specializes in site building, theming and custom module development using the Drupal 7 web application framework.</p>
        </div>
      </div>

      <div class="col-md-4 clearfix hero-feature">
        <div class="col-xs-3 col-md-12 img-container">
          <img src="/img/html5-logo-small.png" alt="HTML5 logo">
        </div>
        <div class="col-xs-9 col-md-12 content-container">
          <h3>Website Development</h3>
          <p>Wes provides custom PHP website solutions using modern frameworks and industry best practices.</p>
        </div>
      </div>

    </div>

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