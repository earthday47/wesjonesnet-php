<?php include_once "./../_includes/global.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php print t('work_pagetitle', 'Work | Drupal Developer Rochester NY'); ?> | WesJones.net</title>

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

<body class="work">

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
            <li class="active"><a href="<?php print url('/work'); ?>"><?php print t('nav_work', 'Work'); ?> <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php print url('/contact'); ?>"><?php print t('nav_contact', 'Contact'); ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="jumbotron container">
      <div class="inner">
        <h1><?php print t('work_h1', 'Work'); ?></h1>
        <p><?php print t('work_p', "View Wes Jones' work in <strong>Web design</strong>, <strong>Drupal development</strong>, and <strong>PHP/MySQL application development</strong>."); ?></p>
      </div>
    </div>

    <div class="main-content">

      <p><a class="btn btn-primary" href="/files/Resume-WesJones.pdf"><?php print t('resume_link', "View Wes' full resume"); ?> &raquo;</a></p>

      <h2><?php print t('work_title', 'Timeline'); ?></h2>

      <div class="container">
        <ul class="timeline">
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Senior Engineer at Kanopi Studios</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> 2022 - present</small></p>
                </div>
                <div class="timeline-body">
                  <p>Drupal support services and development for clients in Drupal 7 and 9.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">The Gilder Lehrman Institute of American History</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.gilderlehrman.org/">https://www.gilderlehrman.org/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Senior Engineer at Phase2 Technology</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> 2022</small></p>
                </div>
                <div class="timeline-body">
                  <p>Drupal backend development support and planning for enterprise level client projects.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Senior Software Engineer / Technical Architect at Third and Grove</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> 2017 - 2022</small></p>
                </div>
                <div class="timeline-body">
                  <p>Development lead for projects, assisting with documentation, sprint planning, estimation, code review, and client communication.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Software Engineer at Third &amp; Grove</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> Feb 2015 - Feb 2016</small></p>
                </div>
                <div class="timeline-body">
                  <p>Drupal website and application development for enterprise-level clients.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Quicken</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.quicken.com/">http://www.quicken.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">King Arthur Flour</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.kingarthurbaking.com/">https://www.kingarthurbaking.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">CooperVision</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://coopervision.com/">https://coopervision.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Third and Grove: Drupal 8 decoupled + Gatsby</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.thirdandgrove.com/">https://www.thirdandgrove.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Chestnut Hill Realty</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.chr-apartments.com/">https://www.chr-apartments.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Freelance Drupal Developer</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> Dec 2011 - present</small></p>
                </div>
                <div class="timeline-body">
                  <p>Drupal and PHP application development consultant. Website design and development with PHP/MySQL, Drupal 6, Drupal 7, Wordpress, and more.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">George Eastman House - Technicolor100</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.eastman.org/technicolor">https://www.eastman.org/technicolor</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Bayer Video Tours</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.bayervideotours.com/">http://www.bayervideotours.com/</a></small>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Museum of Science</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.mos.org/">http://www.mos.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://livinglab.org/">http://livinglab.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://nanomedicine-explorer.net/">http://nanomedicine-explorer.net/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">SEO Specialist / Web Developer, Accelerate Media</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> Sept 2014 - Jan 2015</small></p>
                </div>
                <div class="timeline-body">
                  <p>Website development with Wordpress, Web application development with Yii Framework. Project planning, workload balancing, QA and testing for team of 5 developers.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Draft Sharks</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.draftsharks.com/">http://www.draftsharks.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Monroe Tractor</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.monroetractor.com/">http://www.monroetractor.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">All Collector Cars</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.allcollectorcars.com/">http://www.allcollectorcars.com/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">IASSIDD</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="https://www.iassidd.org/">https://www.iassidd.org/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Web Technologies Specialist, The Strong</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> May 2009 - Dec 2011</small></p>
                </div>
                <div class="timeline-body">
                  <p>Website development and maintenance, Web application development for user-submission contests.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">The Strong</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.thestrong.org/">http://www.thestrong.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.museumofplay.org/">http://www.museumofplay.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.journalofplay.org/">http://www.journalofplay.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.icheg.org/">http://www.icheg.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.toyhalloffame.org/">http://www.toyhalloffame.org/</a></small><br />
                  <small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.libraryandarchivesofplay.org/">http://www.libraryandarchivesofplay.org/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">The Strong Online Collections</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i> <a href="http://www.thestrong.org/online-collections/">http://www.thestrong.org/online-collections/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
            <li>
              <div class="timeline-badge job"><i class="glyphicon glyphicon-briefcase"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Student Web Programmer, The College at Brockport</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> May 2008 - May 2009</small></p>
                </div>
                <div class="timeline-body">
                  <p>Graduated with Bachelor's of Science in Computer Information Systems and Mathematics.</p>
                  <p>Development contributed to campus website.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge project"><i class="glyphicon glyphicon-cog"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">The College at Brockport</h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-link"></i>  <a href="http://www.brockport.edu/">http://www.brockport.edu/</a></small></p>
                </div>
                <div class="timeline-body"></div>
              </div>
            </li>
        </ul>
    </div>

    <hr />

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
