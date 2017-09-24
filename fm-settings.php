<!-- header -->
<?php
	include_once 'header.php';
	include_once 'franchise-navbar.php';
?>
<!-- body -->
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
   <!--Brand and toggle get grouped for better mobile display--> 
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div> 
    <!--Collect the nav links, forms, and other content for toggling--> 
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
    		<li><a href="services.html">Services</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
   </div>
</nav>

<!-- banner -->
<div class="courses_banner">
	<div class="container">
		<h3>Settings</h3>
		<div class="breadcrumb1"><br><br>
	        <ul>
	            <li class="icon6"><a href="franchise_manager.php">&nbsp; &nbsp; Franchise Manager</a></li>
	            <li class="current-page">Settings</li>
	        </ul>
    	</div>
	</div>
</div>
<!-- //banner -->

<div class="courses_box1">
   <div class="container">
   	  <form class="login" action="..." method="POST">
        <p class="lead">Account Settings</p>
        <div class="form-group">
            <input type="text" name="email" autocomplete="off" class="required form-control" placeholder="Email *" value="">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="required form-control" placeholder="Password *" value="">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg1 btn-block">Sign Up</button>
        </div>
        <p>Already have an account? <a href="login.html">Sign In</a></p>
        </form>
   </div>
</div>
<!-- end of body -->

<!-- footer -->
<?php 
	include_once 'footer.php';
?>