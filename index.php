<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xml:lang="en" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Feed Bulls</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Backboneboilerplate.com is a community driven effort to help developers learn and rapidly deploy single page web applications" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="js/libs/raphael/raphael.js"></script>
  <script src="js/libs/raphael/g.raphael.js"></script>
  <script src="js/libs/raphael/g.bar.js"></script>
  <script src="js/libs/jquery/jquery-min.js"></script>
  <script src="js/libs/raphael/pie.js"></script>
  <style type="text/css">
  body{
    padding-top: 60px;
  }
  </style>
</head>
<body>
  <!-- Initially populated by templates/layout.html -->
  <div class="container container_16">
    <div class="main-menu-container "> 
      <div class="navbar navbar-inverse navbar-fixed-top main-menu">
        <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Feed Bulls</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="http://feed-bull.ap01.aws.af.cm/" class="active">Feedback</a></li>
                <li><a href="http://feed-bull.ap01.aws.af.cm/submit.php">Submit Review</a></li>
                <li><a href="http://feed-bull.ap01.aws.af.cm/user.php">Add User</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>
    <div class="page span16">
      <div class="row">
        <table></table>

        <div id="holder"></div>
        </div>
    </div>
    <div class="footer "><hr>
      <p class="copyright">© 2012 Ghanos &nbsp; Rizky</p>
    </div>
  </div>
  
</body>
</html>
