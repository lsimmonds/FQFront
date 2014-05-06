<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FitQik | Book a Session</title>
<?php include '_header.php'; ?>
<?php include '_nav-logged-in.php'; ?>
<!-- the framework page contains multiple additional components -->
<!-- Sets up the container object which sets max viewing width -->
<div class="container">

<!-- Page Header -->
<section class="content">
<h4 class="page-header">Book a Session</h4>
</section>



<!-- Begin Single Column Layout -->
<section class="content"><div class="row"><div class="col-xs-12"><div class="box box-solid">
<div class="box-body">
<!-- Insert Single Column Content Here -->
    <div class="row">
        <div class="col-sm-3">
	<?php include '_framework_sidebar_menu_include.php'; ?>
    </div>
<div class="col-sm-9">

<div class="form-group">

<h3>Book a Session</h3>
<div class="box-body">
<form role="form">
    <!-- text input -->
    <div class="form-group">
        <label>Date</label>
        <input type="text" class="form-control" placeholder="Enter ..."/>
    </div>
    <!-- textarea -->
    <div class="form-group">
        <label>Notes</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    
    <!-- select -->
    <div class="form-group">
        <label>Type of session</label>
        <select class="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
        </select>
    </div>


</form>
</div><!-- /.box-body -->

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