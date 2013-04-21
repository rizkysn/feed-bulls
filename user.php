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
                <li ><a href="http://feed-bull.ap01.aws.af.cm/">Feedback</a></li>
                <li><a href="http://feed-bull.ap01.aws.af.cm/submit.php" class="active">Submit Review</a></li>
                <li class="active"><a href="http://feed-bull.ap01.aws.af.cm/user.php">Add User</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="page span16">
          <form id="submit-user">
            <h1>Tell me about your self</h1>
            <p>
              <label for="username">
                Choose Username
              </label>
              <input type="text" id="username" />
            </p>
            <p>
              <label for="location">
                Where do you live?
              </label>
              <input type="text" id="location">
            </p>
            <p>
              <label for="age">
                Your Age? 
              </label>
              <input type="text" id="age">
            </p>
            <p>
              <label for="gender">
                Select your Gender
              </label>
              <select id="gender">
                <option value="m">Male</option>
                <option value="f">Female</option>
              </select>
            </p>
            <p>
              <label for="discipline">
                Whats Your Education Discipline?
              </label>
              <input type="text" id="discipline">
            </p>
            <p>
              <label for="level">
                Whats your Education Level?
              </label>
              <select id="Level">
                <option value="bachelor">Bachelor</option>
                <option value="magister">Magister</option>
              </select>
            </p>
            <p>
              <label for="password">
                Choose Password
              </label>
              <input type="password" id="password">
            </p>
            <p>
              <label for="re-password">
                Re-Password your password
              </label>
              <input type="password" id="re-password">
            </p>
            <p>
              <input type="submit" id="submitFeedback" value="Submit" class="btn">
            </p>
          </form>
      </div>
    </div>
    <div class="footer "><hr>
      <p class="copyright">© 2012 Ghanos-Rizky</p>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $('#submit-user').submit(function(){
      $.ajax(({ url: "http://feedbulls-api.ap01.aws.af.cm/user",
        type: "POST",
        data:{username: $('#username').val(), location: $('#location').val(), age: $('#age').val(), gender: $('#gender').val(), academicDiscipline:$('#discipline').val(),educationLevel:$('#level').val(), password: $('#password').val(), confirmPassword:$('#re-password').val()},
        xhrFields: {
            withCredentials: false 
          },
        success: function(data){
        $('#username').val(""); 
        $('#location').val(""); 
        $('#age').val(""); 
        $('#gender').val(""); 
        $('#discipline').val(""); 
        $('#level').val(""); 
        $('#password').val(""); 
        $('#re-password').val("");
        alert("Feedback has been Added");
      },error: function(data){
        $('#username').val(""); 
        $('#location').val(""); 
        $('#age').val(""); 
        $('#gender').val(""); 
        $('#discipline').val(""); 
        $('#level').val(""); 
        $('#password').val(""); 
        $('#re-password').val("");
        alert(" Something Error, \n Please Try Again Later");
      }, dataType: "json"}));
      return false;
    });
  });
  </script>
</body>
</html>
