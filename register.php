<?php
    include_once 'header.php';
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
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
            <li><a href="index.html">Home</a></li>
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
  		<h3>Register</h3>
  		<!--<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>-->
                <div class="breadcrumb1"><br><br>
            <ul>
                <li class="icon6"><a href="index.html">&nbsp; &nbsp; Home</a></li>
                <li class="current-page">Register</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" action="includes/register-inc.php" method="POST">
                <p class="lead">Register New Account</p>
                <div class ="form group">
                    <input type="radio" name="user" value="f"> Franchise Manager&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="user" value="s" checked> Student
                </div>
                <br>
                <!--
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Name *" name="Name" value="">
                </div>
                -->
                 <div class="form-group">
                    <input type="text" name="email" autocomplete="off" class="required form-control" placeholder="Email *" value="">
                </div>
                
                
                <div class="form-group">
                    <input type="password" name="password" class="required form-control" placeholder="Password *" value="">
                </div>
                
               
                <div class="form-group">
                    <!--<input type="submit" name="submit" class="btn btn-primary btn-lg1 btn-block" value="Register">-->
                    <button type="submit" name="submit" class="btn btn-primary btn-lg1 btn-block">Sign Up</button>
                </div>
                <p>Already have an account? <a href="login.html">Sign In</a></p>
            </form>
	   </div>
	</div>
    <div class="footer">
    	<div class="container">
    		<div class="col-md-3 grid_4">
    		   <h3>About Us</h3>	
    		   <p>"We provide a platform where franchises and students can register. Franchises can provide a detailed structure of courses they are offering and students can manage their study material,payemnt details and many more things of crucial importance here ."</p>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Quick Links</h3>
    			<ul class="footer_list">
    				<strong><li><a href="courses.html">-Courses </a></li>
    				<li><a href="batches.html">-Batches</a></li>
			        <li><a href="recent.html">-Upcoming Events </a></li></strong>
    		    </ul>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Contact Us</h3>
    			<address>
                    <Strong>Address</strong>
					<p>"Plot T, Bhamas(RIICO) Industrial Area, Kaladwas, Udaipur, Rajasthan 313003"</p>
                    <br>
                    <abbr>Contact : 8949731742</abbr> 
                    <br>
                    <abbr>Email : </abbr> <a href="#">prateek@malinator.com</a>
               </address>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Working Hours</h3>
    			 <table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">monday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">tuesday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">wednesday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">thursday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">friday</td>
							<td class="day_value">9:30 am - 3.00 pm</td>
						</tr>
					    <tr class="closed">
							<td class="day_label">saturday</td>
							<td class="day_value closed"><span>Closed</span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">sunday</td>
							<td class="day_value closed"><span>Closed</span></td>
						</tr>
				    </tbody>
				</table>
            </div>
    		<div class="clearfix"> </div>
        </div>
    </div>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	