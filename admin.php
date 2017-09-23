<?php 
	include_once 'header.php';
?>
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="course_detail.html"><i class="fa fa-list"></i><span>Courses</span></a>
				</li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>User id</span></a>
		        	   <ul class="dropdown-menu">
						<li><a href="courses.html">Add Courses</a></li>
			            <li><a href="courses.html">Reports</a></li>
			            <li><a href="courses.html">Provide Certificate</a></li>
						<li><a href="courses.html">Exams</a></li>
						<li><a href="courses.html">Fee structure</a></li>
			            <li><a href="courses.html">Payment Details</a></li>
						<li><a href="courses.html">Settings</a></li>
			            
			            <?php
							if (isset($_SESSION['id'])) {
		                        echo '<li><a href="franchise_manager.php?hello=true">Log Out</a></li>';
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
	</div>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="">Admissions Approval</a></li>
    		<li><a href="About.html">About</a></li> 
            <li><a href="services.html">Services</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
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
<div class="footer">
    	<div class="container">
    		<div class="col-md-3 grid_4">
    		   <h3>About Us</h3>	
    		   <p>"We provide a platform where franchises and students can register. Franchises can provide a detailed structure of courses they are offering and students can manage their study material,payemnt details and many more things of crucial importance here ."</p>
    		      <!--<ul class="social-nav icons_2 clearfix">
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                 </ul>-->
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Quick Links</h3>
    			<ul class="footer_list">
    				<strong><li><a href="#">-  Courses </a></li>
    				<li><a href="#">-  Admission Form</a></li>
    				<li><a href="#">-  Batches</a></li>
    				<li><a href="#">-  Upcoming Events </a></li></strong>
    				<!--<li><a href="#">-   NEW CLASSROOM TECHNOLOGY</a></li>-->
    			</ul>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Contact Us</h3>
    			<address>
                    <Strong>Address</strong>
					<p>"C/o eLagaan Biztech Labs, 1st Floor, 19 KNG Reddy Layout, Arekere MICO Layout, Bannerghatta Road Bangalore KA 560076 IN"</p>
                    <br>
                    <span>4877 It is a long established</span>
                    <br><br>
                    <span>Contrary to popular , 15089</span>
                    <br>
                    <abbr>Contact : </abbr> 
                    <br>
                    <abbr>Email : </abbr> <a href="mailto@example.com">info(at)Learn.com</a>
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
    		<div class="copy">
		       <!--<p>Copyright © 2015 Learn . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        --></div>
    	</div>
    </div>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	