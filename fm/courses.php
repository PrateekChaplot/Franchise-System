<?php include_once 'header.php'; ?>

	<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
		<ul class="nav navbar-nav">
			<li class="dropdown">
		        <a href="feedback_fm.html"><i class="fa fa-pencil"></i><span>Feedback</span></a>
		    </li>
		    <!-- <li class="dropdown">
		        <a href="certification.html"><i class="fa fa-certificate"></i><span>Certification</span></a>
		    </li> -->
		    <li class="dropdown">
				<a href="#"><i class="fa fa-list"></i><span>Courses</span></a>
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
</div>

<!-- banner -->
<div class="courses_banner">
	<div class="container">
		<h3>Courses</h3>
		<p class="description">
         Our University offers wide range of courses in field of Computer Science.You can find these and their
         respective details(duration,start_date,description) here.
    </p>
    <div class="breadcrumb1">
        <ul>
            <li class="icon6"><a href="../index.php">Home</a></li>
            <li class="current-page">Courses</li>
        </ul>
    </div>
	</div>
</div>

<!-- Course List -->
<div class="col-md-9" style="width: 100%;">
	<div class="course_list">
		<div class="table" align="centre">
            <div class="table-header clearfix">
                	<div class="id_col">ID</div>
                	<div class="name_col">Course Name</div>
                    <div class="duration_col">Duration</div>
                    <div class="fee_col">Fee</div>
    		</div>
			<ul class="table-list">
                    <li class="clearfix">
    					<div class="id_col"></div>

        				<div class="name_col"><a href="course_detail.html"></a></div>

        				<div class="duration_col"></div>

        				<div class="fee_col"></div>
    				</li>
    			</ul>   
				
		</div><!-- end table align="centre"-->
	    <div class="clearfix"> </div>
	</div> <!-- end .course_list -->
</div> <!-- end .col-md-9 -->

<?php include_once 'footer.php'; ?>