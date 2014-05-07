<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index-logged-in.php" class="navbar-brand">FitQik</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
	            <!-- notifications -->
                   <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <span class="label label-success">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <strong>5</strong> notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning warning"></i> Your balance is due
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> Melissa checked in
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person success"></i> You updated your profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person success"></i> You changed your password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="notifications.php">View all</a></li>
                            </ul>
                        </li>
                        
            <!-- messages -->
            <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope">&nbsp;</i>
                                <span class="label label-success">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <strong>3</strong> new messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    <strong>Helen Trainer</strong>
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p><strong>Great progress today!</strong></p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    <strong>FitQik Team</strong>
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p><strong>Special offer next week!</strong></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    <strong>Dave Trainer</strong>
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p><strong>About next week's session</strong></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    FitQik Team
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Thanks for signing up!</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Dave Trainer
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Some additional warm up movements</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="messages.php">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="my-fitqik">
              <i class="fa fa-bars"></i>
              <span>My FitQik <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="my-fitqik">
                <li><a href="book.php">Book a Session</a></li>
                <li class="divider"></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li class="divider"></li>
                <li><a href="profile.php">Profile</a></li>
              </ul>
            </li>
            <!-- this is a dropdown notifications module that looks cool but we can worry about implementation later -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span id="user">Jane Doe <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                                              <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                    <!-- Menu Body -->

                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="account.php" class="btn btn-default btn-flat">My Account</a>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>

          </ul>


        </div>
      </div>
    </div>

<div style="height:50px">&nbsp;</div>
<script>
  $( "#user" ).text(sessionStorage.name)
</script>
