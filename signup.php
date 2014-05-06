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
        <div class="box box-primary">
<div class="box-body">
<div class="box-header">
<h3 class="box-title">Sign Up</h3>
</div>
<div class="row">
	<div class="col-lg-6 col-sm-6">
    <!-- form start -->
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
                <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
	<div class="col-lg-6 col-sm-6"><div class="well">This will be exciting content on the side bar!</div></div>
</div> 
</div>

        </div>
        <?php include '_body-close.php'; ?>
        <?php include 'footer.php'; ?>
        </div>
    <?php include 'script-includes.php'; ?>
</body>
</html>