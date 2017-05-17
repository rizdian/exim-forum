<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  <title>Exim | Page Login</title>

  <!-- Define Charset -->
  <meta charset="utf-8">


  <!-- Login -->
  <link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="css/colors/blue.css">
 

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />



  
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

   
<!--background-image:url('images/bgLogin.jpg'); -->
    <div class="login-box" style="border-style: solid; border-width: 2px;background-color: white">
      <div class="login-logo" style="padding:10px;font-family: 'Times New Roman'">
        <b>User Login</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body" style="">
        <form action="{{url('beranda')}}" method="get">
          <div class="form-group has-feedback">
            <input type="text" name="Username" class="form-control" placeholder="Username" maxlength="30" required/>
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="Password" class="form-control" placeholder="Password" maxlength="255" required />
            <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
          </div>
          <div class="row">
            <div class="col-xs-8" style="position: ">
              <input type="checkbox" name="remember" value="remember"> <b>Remember Me</b>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
            </div><!-- /.col -->
          </div>
      <br>
      <center><font style="color:red;">
      </font></center>
      <center><font style="color:green;"></font></center>
    </br>
        </form>
    
        <!--<a href="register.php"><i class="fa fa-users"></i> Register new User</a>-->
    
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

</body>
</html>