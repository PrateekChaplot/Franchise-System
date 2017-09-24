<?php
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
					<a href="fm-courses.php"><i class="fa fa-list"></i><span>Courses</span></a>
				</li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>My Profile</span></a>
		        	   <ul class="dropdown-menu">
						<!-- <li><a href="courses.html">Reports</a></li> -->
			            <!-- <li><a href="courses.html">Payment Details</a></li> -->
						<li><a href="courses.html">Exams</a></li>
						<!-- <li><a href="courses.html">Fee Records</a></li> -->
			            <li><a href="courses.html">Settings</a></li>
			            
			            <?php
							if (isset($_SESSION['id'])) {
		                        echo '<li><a href="franchise_manager.php?hello=true">Log Out</a></li>';
		                    } else {
		                        header("Location: index.php");
		                        exit();
		                    }
	                    ?>
			            
			            <!--
			            <form action="includes/logout-inc.php" method="POST">
		                    <li><input type="submit" name="submit" value="Log Out"></li>
		                </form>
			            -->
		              </ul>
		        </li>
			</ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>