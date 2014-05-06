<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FitQik | Framework Page</title>
<?php include '_header.php'; ?>
<?php include '_nav-logged-in.php'; ?>
<!-- the framework page contains multiple additional components -->
<!-- Sets up the container object which sets max viewing width -->
<div class="container">

<!-- Page Header -->
<section class="content">
<h4 class="page-header">My Account</h4>
</section>



<!-- Begin Single Column Layout -->
<section class="content"><div class="row"><div class="col-xs-12"><div class="box box-solid">
<div class="box-body">
<!-- Insert Single Column Content Here -->
    <div class="row">
        <div class="col-sm-3">
	<?php include '_framework_sidebar_menu_include.php'; ?>
    </div>
<div class="col-sm-9"><!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">My Account</a></li>
            <li><a href="#tab_2" data-toggle="tab">Settings</a></li>
            <li><a href="#tab_3" data-toggle="tab">Password</a></li>   
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
	<?php include '_framework_default_copy.php'; ?>
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
	<?php include '_framework_default_copy.php'; ?>
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
	<?php include '_framework_default_copy.php'; ?>
            </div><!-- /.tab-pane -->            
        </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->
    </div>
<!-- End Single Column Content Here -->
</div></div></div></div></section>
<!-- End Single Column Layout -->


<!-- End container -->
</div> 


<?php include 'footer.php'; ?>
<?php include 'script-includes.php'; ?>
</body>
</html>