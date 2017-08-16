<?php
    include_once 'header.php';
?>
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				<li class="dropdown">
		            <a href="feedback.html"><i class="fa fa-pencil"></i><span>Feedback</span></a>
		        </li>
                <li class="dropdown">
		            <a href="certification.html"><i class="fa fa-certificate"></i><span>Certification</span></a>
		        </li>
		        <li class="dropdown">
					<a href="courses.html"><i class="fa fa-list"></i><span>Courses</span></a>
				</li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>My Profile</span></a>
		        	   <ul class="dropdown-menu">
			            <li><a href="courses.html">My Courses</a></li>
			            <li><a href="courses.html">Whislist</a></li>
			            <li><a href="courses.html">Batch Calendar</a></li>
						<li><a href="courses.html">Profile</a></li>
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
                        
                        <!-- <li><a href="login.html">Log Out</a></li> -->
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
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            <li><a href="Registration.html">Registration</a></li>
    		<li class="dropdown mega-dropdown active">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="About_Admin.html">Administrator</a></li> 
								<li><a href="About_Franchise.html">Franchise</a></li> 
								<li><a href="About.html">About</a></li> 
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>				
			</li>
			<li><a href="services.html">Services</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
<div class="banner-bg">
	<div class="container">
		<div class="banner-info">
			<h3>Welcome!</h3><br>
			<p class="description">Get familiar with the courses by selecting the courses.</p><br><br>
			<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 10px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>Select Courses</a>
		</div>
	</div>
</div><br>
<!--banner end-->
<!-- Below banner content bg_1-->
<div class="bg_1">
	<div class="container">
	  	<h2>Special care on Students.</h2>
		<h4>Dreams comes true here.</h4>
			<p> We aim to achieve excellence in all spheres of life.holistic education that we provide, since we have a strong focus on student academic progress and achievement.</p><br>
			<div class="con-left text-center">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span><br><br>
				<h5>Learning</h5>
				<p>learning here refers to hollistic development of students enrolling here.</p>
			</div>
			<div class="con-left text-center">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				<h5>Examinations</h5>
				<p>time to time examinations along with certifications are taken to ensure a proper growth.</p>
			</div>
			<div class="clearfix"></div>
	</div>
</div>	
		<!--<div class="col-md-3 team_grid">
			<div class="team">
               <img src="images/team1.jpg" class="img-responsive" alt=""> 
               <div class="team_box">               
                 <h3>Beginner Level</h3>   
                 <p>C programming</p>        
                </div>                             
            </div>
        </div>
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team4.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>Intermediate Level</h3>  
                     <p>C# Programming</p>        
                   </div>                             
            </div>
        </div>
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team2.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>Developer Level</h3>    
                     <p>Internet of things</p>        
                   </div>                             
            </div>
        </div>
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team3.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>Developer</h3>  
                     <p>Machine Learning</p>        
                         
                   </div>                             
            </div>
        </div>
        <div class="clearfix"> </div>
	  </div>
	</div>-->
	<div class="bottom_content">  
	<h3>Our Facilities</h3>
     <div class="grid_2">
     	<div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t15.jpg" class="img-responsive" alt=""/>
                <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Well Defined Courses</a></h4>
               <p>Active learning environment with lively and engaging class sessions.</p>
                <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t10.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Certifications</a></h4>
               <p>A professional certification offers tangible benefits to both the individual and the employer.</p>
               <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t12.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Best Faculty</a></h4>
               <p>Faculty is very engaging and holds the attention of students in all discussions.</p>
               <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
     </div>
     <div class="grid_3">
     	<div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t11.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Examinations</a></h4>
               <p>An evaluation pattern that helps to judge the growth of the students.</p>
                <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t14.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Appropriate Guidance</a></h4>
               <p>A Panel of experts and faculty Support.</p>
               <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t13.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Feedback</a></h4>
               <p>Help to give a fair chance to students to raise their point.</p>
               <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
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