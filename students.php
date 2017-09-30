<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Learn an Education Category Flat Bootstarp Resposive Website| Students</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	         <a class="navbar-brand" href="index.html">Learn</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				<li class="dropdown">
		            <a href="feedback_both.php"><i class="fa fa-pencil"></i><span>Feedback</span></a>
		        </li>
               
		        <li class="dropdown">
					<a href="courses.php"><i class="fa fa-list"></i><span>Courses</span></a>
				</li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>My Profile</span></a>
		        	   <ul class="dropdown-menu">
		        	   	<li><a href="settings_admin.php">Settings</a></li>
			           	<li><a href="index.php">Log Out</a></li>
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
            <li><a href="Registration.php">Registration</a></li>
            <li><a href="about.php">Services</a></li>
    		<li><a href="services.php">Services</a></li>
            <li class="last"><a href="contact.php">Contacts</a></li>
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
			<a href="courses.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 10px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>Select Courses</a>
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
<div class="bottom_content">  
	<h3>Our Facilities</h3>
     <div class="grid_2">
     	<div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/courses.jpg" class="img-responsive" alt=""/>
                <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Defined Courses</a></h4>
               <p>Active learning environment with lively and engaging class sessions.</p>
                <span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/certi.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Certifications</a></h4>
               <p>A professional certification offers tangible benefits to both the individual and the employer.</p>
               <span>
            </div><br>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fac.jpg" class="img-responsive" alt=""/>
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
                <img src="images/exam.png" class="img-responsive" alt=""/>
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
                <img src="images/guidance.jpg" class="img-responsive" alt=""/>
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
                <img src="images/feed.png" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">Feedback</a></h4>
               <p>Help to give a fair chance to students to raise their point which makes things more easier.</p>
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
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Quick Links</h3>
    			<ul class="footer_list">
    				<strong><li><a href="courses.php">-Courses </a></li>
    				<li><a href="courses.php">-Batches</a></li>
			        
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
