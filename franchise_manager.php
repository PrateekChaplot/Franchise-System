<?php
	include_once 'header.php';
?>
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				<li class="dropdown">
		            <a href="feedback_fm.html"><i class="fa fa-pencil"></i><span>Feedback</span></a>
		        </li>
                <!-- <li class="dropdown">
		            <a href="certification.html"><i class="fa fa-certificate"></i><span>Certification</span></a>
		        </li> -->
		        <li class="dropdown">
					<a href="fm/courses.php"><i class="fa fa-list"></i><span>Courses</span></a>
				</li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>My Profile</span></a>
		        	   <ul class="dropdown-menu">
						<li><a href="courses.html">Reports</a></li>
			            <li><a href="courses.html">Payment Details</a></li>
						<li><a href="courses.html">Exams</a></li>
						<li><a href="courses.html">Fee Records</a></li>
			            <li><a href="courses.html">Settings</a></li>
			            
			            <?php
							if (isset($_SESSION['id'])) {
		                        echo '  <li>
		                        			<a>
		                                    <form action="includes/logout-inc.php" method="POST">
		                                        <button type="submit" name="submit">Logout</button>
		                                    </form>
		                                	</a>
		                                </li>';
		                    } else {
		                        header("Location: index.php");
		                        exit();
		                    }
	                    ?>
			            
			            <!-- <li><a href="login.php">Log Out</a></li> -->
		              </ul>
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
    <!-- <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
	        <ul class="nav navbar-nav nav_1">
	            <li><a href="index.php">Home</a></li>
	            <li><a href="Registration_fm.html">Registration</a></li>
	    		<li><a href="about.html">About</a></li>
	    		<li><a href="services.html">Services</a></li>
	            <li class="last"><a href="contact.html">Contacts</a></li>
	        </ul>
      	</div>-->
     	<!-- /.navbar-collapse -->
  	</div>
</nav>
<div class="banner-bg">
	<div class="container">
		<div class="banner-info">
			<h3>Welcome!</h3><br><br>
		    <a href="farnchise_detail.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 10px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Details</a>
		</div>
	</div>
</div>
<!-- 
<div class="details">
       <div class="container">
	   <ul class="posts">
	      	<h3>Recent Activities</h3>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-left">
						<img src="images/t7.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
						<h6><a href="#">.....</a></h6>
						<p><a href="#">....</a></p>
					</div>
					<div class="clearfix"> </div>
				</article>
			</li>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-left">
						<img src="images/t17.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
						<h6><a href="#">.....</a></h6>
						<p><a href="#"></p>
					</div>
					<div class="clearfix"> </div>
				</article>
			</li>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-left">
						<img src="images/t16.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
						<h6><a href="#">.....</a></h6>
						<p><a href="#"></p>
					</div>
					<div class="clearfix"> </div>
				</article>
		    </li>
         </ul>
	</div>
</div>
 -->
<?php 
	include_once 'footer.php';
?>