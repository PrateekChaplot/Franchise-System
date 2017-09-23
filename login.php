<?php 
	include_once 'header.php';
?>

<?php
    if(isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
?>

        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="login.php"><i class="fa fa-user"></i><span>Login</span></a>
                </li>
                <li class="dropdown">
                    <a href="register.php"><i class="fa fa-user"></i><span>Sign Up</span></a>
                </li>
                <li class="dropdown">
                    <a href="courses.html"><i class="fa fa-list"></i><span>Courses</span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
<!--/.navbar-collapse-->
</nav>

<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="features.html">Career</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
  <div class="courses_banner">
      <div class="container">
  		<h3>Login</h3>
			<div class="breadcrumb1"><br><br>
            <ul>
                <li class="icon6"><a href="index.php"> &nbsp; &nbsp; Home</a></li>
                <li class="current-page">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" action="includes/login-inc.php" method="POST">
	    	<p class="lead">Welcome</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="userid" class="required form-control" placeholder="E-mail">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" name="password" class="password required form-control" placeholder="Password">
		    </div>
		    <div class="form-group">
				<!-- <label class="remember pull-left psT">
		    	<input type="checkbox" name="remember pull-left psT" value="true">Remember Me</label> -->
				<a class="cursor pull-right password retrieve small bold msT" href="forgot.php">Forget your password?</a><br>
				<!-- <input type="submit" name="submit" class="btn btn-primary btn-lg1 btn-block" value="Log In"> -->
				<button type="submit" name="submit" class="btn btn-primary btn-lg1 btn-block">Log In</button>
		    </div>
	        <p>Do not have an account? <a href="register.php" title="Sign Up">Sign Up</a></p>
		 </form>
	   </div>
	</div>
	<div class="js-password-retrieve-area span6 mlT forgot hide" style="margin-left: auto; margin-right:auto; float:none; display:block;">
	<form id ="legacy-reset" __bizdiag="0" _biza="WJ__">
	<p>"Enter your email or username below and we will send you a link to reset your password"</p>
	<div class="clearfix"> </div>
	<input id="Login" placeholder="Email or Userid" type="email" class="fw mlB">
	</div>

<?php
    include_once 'footer.php';
?>