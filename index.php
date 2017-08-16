<?php 
	include_once 'header.php';
?>

        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                
                <?php
                    if (isset($_SESSION['id'])) {
                    	//Re-directing according to user-type
						if($_SESSION['type'] == 'a') {
							header("Location: admin.php");
							exit();
						} else if($_SESSION['type']  == 'f') {
							header("Location: franchise_manager.php");
							exit();
						} else if($_SESSION['type'] == 's') {
							header("Location: students.php");
							exit();
						}
					} else {
                        echo '  <li class="dropdown">
                                    <a href="login.php"><i class="fa fa-user"></i><span>Login</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="register.php"><i class="fa fa-user"></i><span>Sign Up</span></a>
                                </li>';
                    }
                ?>

                <!--
                <li class="dropdown">
                    <a href="login.php"><i class="fa fa-user"></i><span>Login</span></a>
                </li>
                <li class="dropdown">
                    <a href="register.html"><i class="fa fa-user"></i><span>Sign Up</span></a>
                </li>
                -->
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
<div class="banner">
	<!-- banner Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		// Slideshow 4
		$("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		});
	
		});
	</script>
	<!--//End-slider-script -->
	
	<div  id="top" class="callbacks_container">
		<ul class="rslides" id="slider3">
			<li>
			
				<div class="banner-bg">
					<div class="container">
						<div class="banner-info">
							<h3>Take the first step<span>to knowledge</span></h3>
							<p>Achieve success in all spheres of Education</p>
							<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 10px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
						</div>
					</div>
				</div>
						</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h3>Supportive staff<span></span></h3>
											<p>A Panel of experts and faculty Support.
											</p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
									<div class="container">
										<div class="banner-info">
											<h3><span>Examinations to check the Growth.</span></h3>
											<p>An evaluation pattern that helps to judge the growth of the students</p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg">.
									<div class="container">
										<div class="banner-info">
											<h3><span>Feedback System</span></h3>
											<p>Help to give a fair chance to students to raise their point
											</p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
			
			<div class="container">
										<div class="banner-info">
											<h3> trivial example,<span>who chooses</span></h3>
											<p>Tommorow belongs to those who prepare it today
											</p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
		          </div>
	</div><br>
	<div class="details">
       <div class="container">
		 <div class="col-sm-10 dropdown-buttons">   
			<div class="col-sm-3 dropdown-button">           			
    		  <div class="section_1">
				 <select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Beginner</option>
					<option value="null"></option>         
					<option value="AX"></option>
					<option value="AX"></option>
				 </select>
			  </div>
			</div>
		     <div class="col-sm-3 dropdown-button">
			  <div class="section_1">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Intermediate</option>
					<option value="null"></option>         
					<option value="AX"></option>
					</select>
			  </div>
			 </div>
			 <div class="col-sm-3 dropdown-button">
			  <div class="section_1">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Developer</option>
					<option value="null"></option>         
					<option value="AX"></option>
					</select>
			  </div>
			 </div>
			 <div>&nbsp; &nbsp;
			 <i class="fa fa-book icon_1" style="font-size:60px;color:	#FFE4C4; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>
			</div>
			<div class="clearfix"> </div>
	     </div>
     </div>
	</div><br>

<?php
	include_once 'footer.php';
?>