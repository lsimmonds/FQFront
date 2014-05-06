<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FitQik</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body class="skin-black">

	<?php include '_nav-logged-out.php'; ?>
    <div style="height:65px">&nbsp;</div>
        <div class="container">
        <?php include '_body-open.php'; ?>
        <?php include '_breadcrumb-title.php'; ?>
<div class="box-body">
    <div style="background-image: url(img/fitqik/homepage-bg-image.jpg); color: #FFFFFF; height: 500px; padding-top: 125px; align-content:center" class="jumbotron text-center">
    <h2 style="text-shadow: 0px 0px 5px #666666"><strong>Affordable Fitness. Anytime. Anywhere.</strong></h2>
    <div align="center">
    <input class="form-control input-lg" type="text" placeholder="Name" style="width:300px; margin-bottom:10px; margin-top:20px">
    <input class="form-control input-lg" type="text" placeholder="Email Address" style="width:300px;">
    <button class="btn-lg bg-olive btn-flat margin" style="width:300px">Register Now</button>
    </div>
    </div>
     <div class="row">
        <div class="col-lg-12">
        <h4>Welcome to FitQik</h4>
        <h3>FitQik effortlessly connects you to fitness trainers and experts so you can get fit and stay motivated wherever you are in the world.</h3>
        </div>
        <div class="col-lg-12">
        <h4>How it works</h4>
        <h3>It's simple...</h3>
        </div>
    </div>
</div>
        <?php include '_body-close.php'; ?>
        <?php include 'footer.php'; ?>
        </div>
    <?php include 'script-includes.php'; ?>
</body>
</html>